<?php

namespace Ethereal\Http;

use Ethereal\Contracts\Http\Request as RequestContract;

class Request implements RequestContract
{
  public static function create()
  {
    return new self();
  }
}