<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Match
 * @package App\Models
 * @version January 28, 2022, 1:00 pm UTC
 *
 * @property string $equipe1
 * @property string $equipe2
 * @property string $score
 */
class Match extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'matches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'equipe1',
        'equipe2',
        'score'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'equipe1' => 'string',
        'equipe2' => 'string',
        'score' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'equipe1' => 'required|string|max:100',
        'equipe2' => 'required|string|max:100',
        'score' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
