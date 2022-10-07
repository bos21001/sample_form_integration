<?php

/**
 * @apiGroup           SampleForm
 * @apiName            CreateSampleForm
 *
 * @api                {POST} /v1/sample-forms Create Sample Form
 * @apiDescription     Writes to database nickname, age, email and age (all as strings).
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
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

Route::post('sample-forms', [Controller::class, 'createSampleForm'])
    ->middleware(['auth:api']);

