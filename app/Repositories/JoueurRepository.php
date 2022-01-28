<?php

namespace App\Repositories;

use App\Models\Joueur;
use App\Repositories\BaseRepository;

/**
 * Class JoueurRepository
 * @package App\Repositories
 * @version January 28, 2022, 12:56 pm UTC
*/

class JoueurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'equipe_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Joueur::class;
    }
}
