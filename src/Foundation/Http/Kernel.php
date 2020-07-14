<?php

namespace Ethereal\Foundation\Http;

use Ethereal\Http\Request;
use Ethereal\Http\Response;
use Ethereal\Contracts\Http\Kernel as KernelContract;

class Kernel implements KernelContract
{
  public function handle(Request $request)
  {
    
    return $this->makeResponse();
  }
  
  protected function makeResponse()
  {
    $response = new Response;
    
    app()->instance('response', $response);
    
    return $response;
  }
}