<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Laravel CORS
  |--------------------------------------------------------------------------
  |
  | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
  | to accept any value.
  |
  */

  'supportsCredentials' => false,
  'allowedOrigins' => env('CORS_ALLOWED_ORIGINS') ? explode(',', env('CORS_ALLOWED_ORIGINS')) : ['*'],
  'allowedOriginsPatterns' => [],
  'allowedHeaders' => ['*'],
  'allowedMethods' => ['*'],
  'exposedHeaders' => ['Authorization'],
  'maxAge' => 0,

];
