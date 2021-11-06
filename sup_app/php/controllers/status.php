<?php
namespace controller\status;
use model\UserModel;
use db\SupQuery;

function get() {

  $user = UserModel::getSession();
  $sups = SupQuery::fetchByUser_id($user);

  \view\status\index($sups);
}

function post() {

}

?>