<?php
namespace controller\lack_process;

use model\UserModel;
use model\SupModel;
use db\SupQuery;
use lib\Msg;
use lib\Auth;

function get() {

  echo 'lack_process get';

  $sup = new SupModel;
  $sup->id = get_param('sup_id', null, false);
  $sup = SupQuery::fetchBySup_id($sup);

  // 削除フラグを立てる　& 購入回数をカウント &　合計課金額を更新
  if($sup->del_flg === 0) {
    $sup_lack_move = SupQuery::del_On($sup);
  } else {
    $sup_lack_move = SupQuery::del_Off($sup);
    $sup_purchase_up = SupQuery::purchase_up($sup);
    $sup_purchase_up = SupQuery::total_billing_amount($sup);
  }

  redirect(GO_REFERER);
}