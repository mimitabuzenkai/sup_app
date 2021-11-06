<?php
namespace controller\register;

use model\UserModel;
use model\SupModel;
use db\SupQuery;
use lib\Msg;
use lib\Auth;

function get() {

  echo 'register get';
  \view\register\index();
}

function post() {
  echo 'register post';

  $user = new UserModel;
  $user->id = get_param('id', '');
  $user->pwd = get_param('pwd', '');
  
  if (Auth::regist($user)) {
    
    Msg::push(Msg::INFO, 'ログインしました！');
    redirect('sup_index');

  } else {

    redirect(GO_REFERER);
  }


}