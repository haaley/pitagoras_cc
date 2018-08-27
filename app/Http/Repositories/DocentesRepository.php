<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 17:41
 */
namespace App\Http\Repositories;

use App\Docente;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Traits\UploadAvatarDocente;
use App\Http\Requests;

/**
 * Class CategoryRepository
 * @package App\Http\Repository
 */
class DocentesRepository extends Repository
{
    use UploadAvatarDocente;
    const PATH_AVATAR = '/site/img/avatar';

    static $tag = 'docente';

    public function model()
    {
        return app(Docente::class);
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $docentes = $this->remember('docente.all', function () {
            return Docente::withCount('name')->get();
        });
        return $docentes;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        $docente = $this->remember('docente.one.' . $name, function () use ($name) {
            return Docente::where('name', $name)->first();
        });
        if (!$docente)
            abort(404);
        return $docente;
    }

    /**
     * @param Request $request
     * @return Category
     */
    public function create(Request $request)
    {
        $this->clearCache();
        $avatar = $request->file('avatar');

        $name_avatar = $this->saveAvatarDocente($avatar,self::PATH_AVATAR);

        $dados = $request->all();
        unset($dados['_token']);
        $dados['slug'] = str_slug($dados['name'],'-');
        $dados['avatar'] = self::PATH_AVATAR.'/'.$name_avatar;        
        $docente = Docente::create($dados);
        return $docente;
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return bool|int
     */
    public function update(Request $request, Docente $docente)
    {
        $this->clearCache();
        return $docente->update($request->all());
    }

    public function tag()
    {
        return DocentesRepository::$tag;
    }
}