<?php

/**
 * @OA\Info(title="My First API", version="0.1")
 */

/**
 * @OA\Get(
 *     path="/api/resource.json",
 *     @OA\Response(response="200", description="An example resource")
 * )
 */

use OpenApi\Serializer;

$serializer = new Serializer();
$openapi = $serializer->deserialize($jsonString, 'OpenApi\Annotations\OpenApi');
echo $openapi->toJson();