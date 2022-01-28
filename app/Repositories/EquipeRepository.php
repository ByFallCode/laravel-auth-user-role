<?php

namespace App\Repositories;

use App\Models\Equipe;
use App\Repositories\BaseRepository;

/**
 * Class EquipeRepository
 * @package App\Repositories
 * @version January 28, 2022, 12:51 pm UTC
*/

class EquipeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Equipe::class;
    }
}
