<?php

namespace app\controllers\site;

use app\database\entities\UserEntity;
use app\database\models\UserModel;
use app\library\controllers\Controller;
use app\library\database\actions\FindBy;
use app\library\database\actions\Insert;
use app\library\sanitize\Sanitize;
use app\library\validate\Validate;

class UserController extends Controller
{
  public function create()
  {
    return view('site.signup', [
      'title' => 'Cadastrar'
    ]);
  }

  public function store()
  {
    $validate = Validate::handle([
      'firstname' => ['REQUIRED'],
      'lastname' => ['REQUIRED'],
      'email' => ['REQUIRED', 'EMAIL', 'UNIQUE:table=users'],
      'password' => ['REQUIRED']
    ]);

    if(!$validate->success())
    {
      return redirect('/user/create');
    }

    $sanitize = Sanitize::handle();

    $user = new UserEntity;
    $user->firstname = $sanitize->get('firstname');
    $user->lastname = $sanitize->get('lastname');
    $user->email = $sanitize->get('email');
    $user->setPasswordHash($sanitize->get('password'));
    $user->sections = '';

    $insert = (new UserModel)->execute(new Insert($user));

    if($insert)
    {
      $user = (new UserModel)->execute(new FindBy('email', $user->email));
      session_set('user', $user);
    }

    return redirect('/');
  }
}
