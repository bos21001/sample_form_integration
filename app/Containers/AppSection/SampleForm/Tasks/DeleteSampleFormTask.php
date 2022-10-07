<?php

namespace App\Containers\AppSection\SampleForm\Tasks;

use App\Containers\AppSection\SampleForm\Data\Repositories\SampleFormRepository;
use App\Containers\AppSection\SampleForm\Events\SampleFormDeletedEvent;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteSampleFormTask extends ParentTask
{
    public function __construct(
        protected SampleFormRepository $repository
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = $this->repository->delete($id);
            SampleFormDeletedEvent::dispatch($result);

            return $result;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
