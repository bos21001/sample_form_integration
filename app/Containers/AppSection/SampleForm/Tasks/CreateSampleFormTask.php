<?php

namespace App\Containers\AppSection\SampleForm\Tasks;

use App\Containers\AppSection\SampleForm\Data\Repositories\SampleFormRepository;
use App\Containers\AppSection\SampleForm\Events\SampleFormCreatedEvent;
use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateSampleFormTask extends ParentTask
{
    public function __construct(
        protected SampleFormRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): SampleForm
    {
        try {
            $sampleform = $this->repository->create($data);
            SampleFormCreatedEvent::dispatch($sampleform);

            return $sampleform;
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
