<?php

namespace App\Containers\AppSection\SampleForm\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\SampleForm\Data\Repositories\SampleFormRepository;
use App\Containers\AppSection\SampleForm\Events\SampleFormsListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSampleFormsTask extends ParentTask
{
    public function __construct(
        protected SampleFormRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->addRequestCriteria()->repository->all();
        SampleFormsListedEvent::dispatch($result);

        return $result;
    }
}
