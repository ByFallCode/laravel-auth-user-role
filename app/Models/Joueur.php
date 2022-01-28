<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Joueur
 * @package App\Models
 * @version January 28, 2022, 12:56 pm UTC
 *
 * @property \App\Models\Equipe $equipe
 * @property string $name
 * @property integer $equipe_id
 */
class Joueur extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'joueurs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'equipe_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'equipe_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:100',
        'equipe_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function equipe()
    {
        return $this->belongsTo(\App\Models\Equipe::class, 'equipe_id');
    }
}
