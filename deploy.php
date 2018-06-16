<?php
require 'recipe/laravel.php';

// Set configurations
set('default_stage', 'new-master');
set('repository', 'git@bitbucket.org:RaelsonRosa/land_pitagoras.git');
set('use_ssh2', false);
set('shared_files', ['.env']);
set('writable_use_sudo', false);
set('writable_dirs', ['
    bootstrap/cache',
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);
set('shared_dirs', [
    'storage'
]);

// Configure servers

$servers = [
    'production' => [
        'name' => 'production',
        'address' => 'pitagoras.predeploy.site',
        'branch' => 'master',
        'port' => 22,
        'user' => 'rr',
        'identityFile' => '~/.ssh/id_rsa.pub',
        'path' => '/var/www/pitagoras.predeploy.site',
        'pemFile' => ''

    ],
    'new-master' => [
        'name' => 'new-master',
        'address' => 'pitagoras.predeploy.site',
        'branch' => 'new-master',
        'port' => 22,
        'user' => 'rr',
        'identityFile' => '~/.ssh/id_rsa.pub',
        'path' => '/var/www/pitagoras.predeploy.site',
        'pemFile' => ''

    ]
];

foreach ($servers as $server) {
    server($server['name'], $server['address'], $server['port'])
        ->user($server['user'])
        ->forwardAgent()
        ->stage($server['name'])
        ->env('branch', $server['branch'])
        ->env('deploy_path', $server['path']);
    //->pemFile($server['pemFile'])
}

/**
 * Install npm
 */

task('npm:install', function () {
    $npm_folder_exists = run('if [ ! -L {{deploy_path}}/shared/node_modules ] && [ -d {{deploy_path}}/shared/node_modules ]; then echo true; fi')->toBool();

    if (!$npm_folder_exists) {
        run('cd {{deploy_path}}/current; {{bin/npm}} install');
        run('mv {{deploy_path}}/current/node_modules {{deploy_path}}/shared');
    }

    run('ln -s {{deploy_path}}/shared/node_modules {{deploy_path}}/current');
})->desc('Execute npm install');

/**
 * Assets compilation
 */

task('assets:generate', function() {
    cd('{{release_path}}');
    run('npm run production');
})->desc('Assets generation');

/**
 * Upload .env.production em vez da nossa .env local
 */

task('storage-link', function() {
    cd('{{release_path}}');
    run('php artisan storage:link');
})->desc('Link storage/public');

task('environment', function () {
    if($server['branch'])
    upload('.env.production', '{{release_path}}/.env');
})->desc('Environment setup');

/**
 * Fix permissions - Resolve problemas de permissões dentro dos diretorios
 */

task('permissions:reset', function () {
    run('cd {{deploy_path}}');
    run('sudo chown -R [USER]:[GROUP] {{deploy_path}}');
    run('sudo find . -type f -exec chmod 644 {} \;');
    run('sudo find . -type d -exec chmod 755 {} \;');

    run('sudo chmod 775 {{deploy_path}}/shared/node_modules');
    run('sudo chmod 775 {{deploy_path}}/shared/storage');

    run('cd {{release_path}}');
    run('sudo chmod 775 {{release_path}}/vendor');
})->desc('Fix permissions');

after('artisan:cache:clear', 'storage-link');
//after('artisan:cache:clear', 'permissions:reset');
//after('artisan:cache:clear', 'environment');

