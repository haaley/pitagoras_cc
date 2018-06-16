<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Plank\Metable\Metable;
use App\Page;

class DatabaseSeeder extends Seeder
{
    use Metable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::truncate();
        \App\Post::truncate();
        \App\Category::truncate();
        \App\Tag::truncate();
        \App\Page::truncate();

        Model::unguard();

        factory(App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@pitagoras.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);

        factory(Page::class)->create(
            [
                'name' => 'cursos',
                'display_name' => 'cursos',
                'content' => ' ',
                'html_content' => ' ',
                'standard' => 1,
            ]
        );
        factory(Page::class)->create(
            [
                'name' => 'docentes',
                'display_name' => 'docentes',
                'content' => 'std content',
                'html_content' => '< p > std content < /p >',
                'standard' => 1,
            ]
        );
        factory(Page::class)->create(
            [
                'name' => 'discentes',
                'display_name' => 'discentes',
                'content' => 'std content',
                'html_content' => '< p > std content < /p >',
                'standard' => 1,
            ]
        );
        factory(Page::class)->create(
            [
                'name' => 'blog',
                'display_name' => 'blog',
                'content' => 'std content',
                'html_content' => '< p > std content < /p >',
                'standard' => 1,
            ]
        );
        factory(Page::class)->create(
            [
                'name' => 'contato',
                'display_name' => 'contato',
                'content' => 'std content',
                'html_content' => '< p > std content < /p >',
                'standard' => 1,
            ]
        );

        $page = Page::all();
        foreach($page as $p) {
            $dados = ['name'=> 'blank', 'status'=> 1, 'breadcrumbs'=> 'blank > blank', 'background' => 'blank.jpg', 'search' => 0, 'like' => 0];
            $serializa = json_encode(serialize($dados));

            $p->setMeta('page-meta', $serializa);
        }

        factory(App\Category::class)->create(['name' => '#noticia']);
        factory(App\Category::class)->create(['name' => '#evento']);
        factory(App\Category::class)->create(['name' => '#fiquesabendo']);
        factory(App\Category::class)->create(['name' => '#coordenacao']);
        factory(App\Tag::class, 10)->create();
        $tag_ids = \App\Tag::all();
        factory(App\User::class, 10)->create()->each(function ($u) use ($tag_ids) {
            factory(App\Post::class, mt_rand(0, 10))->make(
                ['category_id' => mt_rand(1, 4)]
            )->each(function ($post) use ($u, $tag_ids) {
                $p = $u->posts()->save($post);
                $count = mt_rand(1, 4);
                $ids = [];
                for ($i = 0; $i < $count; $i++) {
                    array_push($ids, $tag_ids[mt_rand(1, 9)]->id);
                }
                $p->tags()->sync($ids);
            });

        });
    }
}
