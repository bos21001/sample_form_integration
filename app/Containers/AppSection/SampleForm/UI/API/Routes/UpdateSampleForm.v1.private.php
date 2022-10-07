<?php

/**
 * @apiGroup           SampleForm
 * @apiName            UpdateSampleForm
 *
 * @api                {PATCH} /v1/sample-forms/:id Update Sample Form
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} id
 * @apiParam           {String} [nickname]
 * @apiParam           {String} [age]
 * @apiParam           {String} [email]
 * @apiParam           {String} [nome]
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\SampleForm\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('sample-forms/{id}', [Controller::class, 'updateSampleForm'])
    ->middleware(['auth:api']);

