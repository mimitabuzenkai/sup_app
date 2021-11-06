<?php

namespace controller\item_delete;

use model\UserModel;
use model\SupModel;
use db\SupQuery;
use lib\Msg;
use lib\Auth;

function get()
{

  echo 'delete get';

  $sup = new SupModel;
  $sup->id = get_param('sup_id', null, false);

  $result = SupQuery::item_delete($sup);

  if ($result) {

    Msg::push(Msg::INFO, '在庫を削除しました！');
    redirect(GO_REFERER);

  } else {

    redirect(GO_REFERER);
  }
}

function post()
{

  // if ($result) {

  //   Msg::push(Msg::INFO, '在庫を編集しました！');
  //   redirect(GO_REFERER);

  // } else {

  //   redirect(GO_REFERER);
  // }


}
