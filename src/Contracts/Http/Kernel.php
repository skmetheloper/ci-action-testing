<?php

namespace Ethereal\Contracts\Http;

interface Kernel
{
  public function handle(Request $request);
  
  public function terminate($request, $response);
}