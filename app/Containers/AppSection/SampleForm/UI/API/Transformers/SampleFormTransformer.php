<?php

namespace App\Containers\AppSection\SampleForm\UI\API\Transformers;

use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class SampleFormTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(SampleForm $sampleform): array
    {
        $response = [
            'object' => $sampleform->getResourceKey(),
            'id' => $sampleform->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $sampleform->id,
            'created_at' => $sampleform->created_at,
            'email' => $sampleform->email,
            'note' => $sampleform->note,
            'updated_at' => $sampleform->updated_at,
            'readable_created_at' => $sampleform->created_at->diffForHumans(),
            'readable_updated_at' => $sampleform->updated_at->diffForHumans(),
            // 'deleted_at' => $sampleform->deleted_at,
        ], $response);
    }
}
