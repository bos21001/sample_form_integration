<?php

namespace App\Containers\AppSection\SampleForm\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Containers\AppSection\SampleForm\Tasks\UpdateSampleFormTask;
use App\Containers\AppSection\SampleForm\UI\API\Requests\UpdateSampleFormRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateSampleFormAction extends ParentAction
{
    /**
     * @param UpdateSampleFormRequest $request
     * @return SampleForm
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateSampleFormRequest $request): SampleForm
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateSampleFormTask::class)->run($data, $request->id);
    }
}
