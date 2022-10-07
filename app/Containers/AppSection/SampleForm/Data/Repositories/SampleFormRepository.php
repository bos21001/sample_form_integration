<?php

namespace App\Containers\AppSection\SampleForm\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class SampleFormRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
