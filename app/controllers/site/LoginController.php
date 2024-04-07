<?php

namespace app\controllers\site;

use app\database\models\UserModel;
use app\library\controllers\Controller;
use app\library\database\actions\FindBy;
use app\library\helpers\Flash;
use app\library\sanitize\Sanitize;
use app\library\validate\Validate;

class LoginController extends Controller
{
  public function index(array $args)
  {
    return view('site.login', [
      'title' => 'Login'
    ]);
  }

  public function store()
  {
    $validate = Validate::handle([
      'email' => ['REQUIRED', 'EMAIL'],
      'password' => ['REQUIRED']
    ]);

    if(!$validate->success())
    {
      return redirect('/login');
    }

    $sanitize = Sanitize::handle();

    $user = (new UserModel)->execute(new FindBy('email', $sanitize->get('email')));

    if(!$user)
    {
      Flash::set('email', 'Email não encontrado');
      return redirect('/login');
    }

    if(!password_verify($sanitize->get('password'), $user->password))
    {
      Flash::set('password', 'Senha inválida');
      return redirect('/login');
    }

    session_set('user', $user);
    return redirect('/');
  }

  public function destroy(array $args)
  {
    if(session_has('user'))
    {
      session_remove('user');
    }

    redirect('/login');
  }
}
