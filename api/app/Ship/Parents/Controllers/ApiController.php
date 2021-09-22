<?php

namespace App\Ship\Parents\Controllers;

use Apiato\Core\Abstracts\Controllers\ApiController as AbstractApiController;
use Apiato\Core\Abstracts\Transformers\Transformer;
use Fractal;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Collection;
use Request;
use App\Ship\Fractal\ArraySerializer;

/**
 * {@inheritdoc}
 * @OA\Info(
 *      version="1.0.0",
 *      title="NNG Documentation",
 *      description="NNG Apiato Swagger OpenApi description",
 *      @OA\Contact(
 *          email="admin@admin.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Demo API Server"
 * )

 *
 * @OA\Tag(
 *     name="NNG",
 *     description="API Endpoints of Projects"
 * )
 *
 */

abstract class ApiController extends AbstractApiController
{

}
