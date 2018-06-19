<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use softDeletes;

    protected $table = 'docentes';

    protected $primaryKey = 'id';

    protected $fillable = ['id','name','description','slug','avatar'];

    protected $dates = ['deleted_at'];
}
