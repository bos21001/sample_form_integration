<?php

namespace App\Containers\AppSection\SampleForm\Actions;

use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Containers\AppSection\SampleForm\Tasks\FindSampleFormByIdTask;
use App\Containers\AppSection\SampleForm\UI\API\Requests\FindSampleFormByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindSampleFormByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindSampleFormByIdRequest $request): SampleForm
    {
        return app(FindSampleFormByIdTask::class)->run($request->id);
    }
}
