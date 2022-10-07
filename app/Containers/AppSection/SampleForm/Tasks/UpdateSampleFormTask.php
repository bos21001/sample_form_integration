<?php

namespace App\Containers\AppSection\SampleForm\Tasks;

use App\Containers\AppSection\SampleForm\Data\Repositories\SampleFormRepository;
use App\Containers\AppSection\SampleForm\Events\SampleFormUpdatedEvent;
use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateSampleFormTask extends ParentTask
{
    public function __construct(
        protected SampleFormRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): SampleForm
    {
        try {
            $sampleform = $this->repository->update($data, $id);
            SampleFormUpdatedEvent::dispatch($sampleform);

            return $sampleform;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
