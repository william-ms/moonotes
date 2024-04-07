<?php

namespace app\controllers\site;

use app\library\controllers\Controller;

class HomeController extends Controller
{
  public function index(array $args)
  {
    $user = (session_has('user'))
    ? session_get('user')
    : null;

    return view('site.home', [
      'title' => 'Home',
      'user' => $user
    ]);
  }
}