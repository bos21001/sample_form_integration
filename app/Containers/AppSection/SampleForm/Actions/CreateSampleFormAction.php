<?php

namespace App\Containers\AppSection\SampleForm\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Containers\AppSection\SampleForm\Tasks\CreateSampleFormTask;
use App\Containers\AppSection\SampleForm\UI\API\Requests\CreateSampleFormRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateSampleFormAction extends ParentAction
{
    /**
     * @param CreateSampleFormRequest $request
     * @return SampleForm
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateSampleFormRequest $request): SampleForm
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateSampleFormTask::class)->run($data);
    }
}
