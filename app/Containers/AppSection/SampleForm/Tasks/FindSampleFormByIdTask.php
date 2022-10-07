<?php

namespace App\Containers\AppSection\SampleForm\Tasks;

use App\Containers\AppSection\SampleForm\Data\Repositories\SampleFormRepository;
use App\Containers\AppSection\SampleForm\Events\SampleFormFoundByIdEvent;
use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindSampleFormByIdTask extends ParentTask
{
    public function __construct(
        protected SampleFormRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): SampleForm
    {
        try {
            $sampleform = $this->repository->find($id);
            SampleFormFoundByIdEvent::dispatch($sampleform);

            return $sampleform;
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
