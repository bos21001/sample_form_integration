<?php

/**
 * @apiGroup           SampleForm
 * @apiName            GetAllSampleForms
 *
 * @api                {GET} /v1/sample-forms Get All Sample Forms
 * @apiDescription     Lists all sample form items
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\SampleForm\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('sample-forms', [Controller::class, 'getAllSampleForms'])
    ->middleware(['auth:api']);

