<?php

namespace App\Containers\AppSection\SampleForm\Data\Factories;

use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class SampleFormFactory extends ParentFactory
{
    protected $model = SampleForm::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
