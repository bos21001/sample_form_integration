<?php

namespace App\Containers\AppSection\SampleForm\Actions;

use App\Containers\AppSection\SampleForm\Tasks\DeleteSampleFormTask;
use App\Containers\AppSection\SampleForm\UI\API\Requests\DeleteSampleFormRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteSampleFormAction extends ParentAction
{
    /**
     * @param DeleteSampleFormRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteSampleFormRequest $request): int
    {
        return app(DeleteSampleFormTask::class)->run($request->id);
    }
}
