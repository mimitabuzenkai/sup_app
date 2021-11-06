<?php
namespace controller\logout;

use model\UserModel;
use model\SupModel;
use db\SupQuery;
use lib\Msg;
use lib\Auth;

function get() {

  echo 'login get';
  \view\login\index();
}

function post() {
  echo 'login post';

  $id = get_param('id', '');
  $pwd = get_param('pwd', '');

  $result = Auth::login($id, $pwd);

  
  if ($result) {
    
    Msg::push(Msg::INFO, 'ログインしました！');
    redirect('sup_index');

  } else {

    redirect(GO_REFERER);
  }


}