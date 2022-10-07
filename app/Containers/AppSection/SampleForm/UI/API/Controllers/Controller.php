<?php

namespace App\Containers\AppSection\SampleForm\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\SampleForm\Actions\CreateSampleFormAction;
use App\Containers\AppSection\SampleForm\Actions\DeleteSampleFormAction;
use App\Containers\AppSection\SampleForm\Actions\FindSampleFormByIdAction;
use App\Containers\AppSection\SampleForm\Actions\GetAllSampleFormsAction;
use App\Containers\AppSection\SampleForm\Actions\UpdateSampleFormAction;
use App\Containers\AppSection\SampleForm\UI\API\Requests\CreateSampleFormRequest;
use App\Containers\AppSection\SampleForm\UI\API\Requests\DeleteSampleFormRequest;
use App\Containers\AppSection\SampleForm\UI\API\Requests\FindSampleFormByIdRequest;
use App\Containers\AppSection\SampleForm\UI\API\Requests\GetAllSampleFormsRequest;
use App\Containers\AppSection\SampleForm\UI\API\Requests\UpdateSampleFormRequest;
use App\Containers\AppSection\SampleForm\UI\API\Transformers\SampleFormTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Prettus\Repository\Exceptions\RepositoryException;

class Controller extends ApiController
{
    /**
     * @param CreateSampleFormRequest $request
     * @return JsonResponse
     * @throws InvalidTransformerException
     * @throws CreateResourceFailedException
     */
    public function createSampleForm(CreateSampleFormRequest $request): JsonResponse
    {
        $sampleform = app(CreateSampleFormAction::class)->run($request);

        return $this->created($this->transform($sampleform, SampleFormTransformer::class));
    }

    /**
     * @param FindSampleFormByIdRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function findSampleFormById(FindSampleFormByIdRequest $request): array
    {
        $sampleform = app(FindSampleFormByIdAction::class)->run($request);

        return $this->transform($sampleform, SampleFormTransformer::class);
    }

    /**
     * @param GetAllSampleFormsRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllSampleForms(GetAllSampleFormsRequest $request): array
    {
        $sampleforms = app(GetAllSampleFormsAction::class)->run($request);

        return $this->transform($sampleforms, SampleFormTransformer::class);
    }

    /**
     * @param UpdateSampleFormRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     */
    public function updateSampleForm(UpdateSampleFormRequest $request): array
    {
        $sampleform = app(UpdateSampleFormAction::class)->run($request);

        return $this->transform($sampleform, SampleFormTransformer::class);
    }

    /**
     * @param DeleteSampleFormRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     */
    public function deleteSampleForm(DeleteSampleFormRequest $request): JsonResponse
    {
        app(DeleteSampleFormAction::class)->run($request);

        return $this->noContent();
    }
}
