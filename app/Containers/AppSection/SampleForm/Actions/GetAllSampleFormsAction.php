<?php

namespace App\Containers\AppSection\SampleForm\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\SampleForm\Tasks\GetAllSampleFormsTask;
use App\Containers\AppSection\SampleForm\UI\API\Requests\GetAllSampleFormsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSampleFormsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllSampleFormsRequest $request): mixed
    {
        return app(GetAllSampleFormsTask::class)->run();
    }
}
