<?php
namespace controller\item_chenge;

use model\UserModel;
use model\SupModel;
use model\StockModel;
use db\SupQuery;
use db\StockQuery;
use lib\Msg;
use lib\Auth;

function get() {

  echo 'item_chenge get';

  // $user = UserModel::getSession();

  // $sup = new SupModel;
  // $sup->item = get_param('item', '');
  // $sup->maker = get_param('maker', '');
  // $sup->price = get_param('price', '');
  // $sup->capacity = get_param('capacity', '');
  // $sup->utility = get_param('utility', '');
  // $sup->stock = get_param('stock', '');
  // $result = SupQuery::insert($sup, $user);

}

function post() {
  echo 'item_chenge post';

  $user = UserModel::getSession();
  var_dump($user);

  $sup = new SupModel;
  $sup->id = get_param('id', '');
  $sup->item = get_param('item', '');
  $sup->maker = get_param('maker', '');
  $sup->price = get_param('price', '');
  $sup->capacity = get_param('capacity', '');
  $sup->utility = get_param('utility', '');
  $sup->stock = get_param('stock', '');
  $sup->user_id = $user->id;

  $result = SupQuery::item_update($sup);

  $stock = new StockModel;
  $stock->stock_id = $sup->stock;
  $stock->sup_id = $sup->id;

  var_dump(StockQuery::stock_input($stock));

  
  if ($result) {
    
    Msg::push(Msg::INFO, '在庫を編集しました！');
    redirect(GO_REFERER);

  } else {

    redirect(GO_REFERER);
  }


}