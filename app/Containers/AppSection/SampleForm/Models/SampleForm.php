<?php

namespace App\Containers\AppSection\SampleForm\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class SampleForm extends ParentModel
{
    protected $fillable = [
        'nickname',
        'age',
        'email',
        'note',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'SampleForm';
}
