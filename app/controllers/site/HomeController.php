<?php

namespace app\controllers\site;

use app\database\models\SectionModel;
use app\library\controllers\Controller;
use app\library\database\actions\FindAll;
use app\library\database\Query;

class HomeController extends Controller
{
  public function index(array $args)
  {
    $user = (session_has('user'))
    ? session_get('user')
    : null;

    if(isset($user))
    {
      if(session_has('sections'))
      {
        $sections = session_get('sections');
      }
      else
      {
        $sections = (new SectionModel)->execute(new FindAll((new Query)->where('user_id', '=', $user->id)));
        session_set('sections', $sections);
      }
    }

    return view('site.home', [
      'title' => 'Home',
      'user' => $user,
      'sections' => (isset($sections)) ? $sections : null
    ]);
  }
}