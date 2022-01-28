<?php

namespace App\Repositories;

use App\Models\Match;
use App\Repositories\BaseRepository;

/**
 * Class MatchRepository
 * @package App\Repositories
 * @version January 28, 2022, 1:00 pm UTC
*/

class MatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'equipe1',
        'equipe2',
        'score'
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
        return Match::class;
    }
}
