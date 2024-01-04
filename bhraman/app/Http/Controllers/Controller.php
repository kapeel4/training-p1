<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helper\Helper;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct(Request $request, Helper $helper, Guard $auth)
    {
      $this->request = $request;
      $this->helper = $helper;
    }
}
