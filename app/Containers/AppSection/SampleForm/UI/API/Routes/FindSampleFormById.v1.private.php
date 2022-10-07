<?php

/**
 * @apiGroup           SampleForm
 * @apiName            FindSampleFormById
 *
 * @api                {GET} /v1/sample-forms/:id Find Sample Form By Id
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\SampleForm\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('sample-forms/{id}', [Controller::class, 'findSampleFormById'])
    ->middleware(['auth:api']);

