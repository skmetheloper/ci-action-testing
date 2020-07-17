<?php

namespace Ethereal\Http;

use Ethereal\Contracts\Http\Request as RequestContract;

class Request implements RequestContract
{
  public static function create()
  {
    $server = array_replace([
      'REQUEST_METHOD' => null,
      'REQUEST_URI' => null,
      'HTTP_HOST' => null,
      'HTTP_USER_AGENT' => null,
      'HTTP_REFERRAL' => null,
    ], $_SERVER);
    
    return new self($server);
  }
  
  public function __construct(array $server)
  {
    $this->server = $server;
  }
}