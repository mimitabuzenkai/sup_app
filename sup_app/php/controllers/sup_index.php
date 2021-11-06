<?php

namespace controller\sup_index;

use model\UserModel;
use model\SupModel;
use model\StockModel;
use db\SupQuery;
use lib\Msg;

function get()
{
  
  $user = UserModel::getSession();
  // $items = SupQuery::fetchByUser_id($user);
  $items = SupQuery::fetchByStockOk($user);
  // 在庫あるものを表示
  \view\sup_index\index($items);
  
  // // 削除フラグが立ってるsup配列の値を取得
  $lack_items = SupQuery::fetchByDel_Id();
  // 在庫が無いものを表示

  // ユーザーが持ってる全てのSUP値を取得
  $sups = SupQuery::fetchByUser_id($user);

  \view\sup_index\stock($lack_items);
  
  \view\sup_insert\index($sups);
}

function post()
{
  echo 'sup_index post';

  $user = UserModel::getSession();

  $sup = new SupModel;
  $sup->item = get_param('item', '');
  $sup->maker = get_param('maker', '');
  $sup->price = get_param('price', '');
  $sup->capacity = get_param('capacity', '');
  $sup->utility = get_param('utility', '');
  $sup->stock = get_param('stock', '');

  $result = SupQuery::insert($sup, $user);

  // $stock->stock = $sup->stock_id;

  // $sup->stock_id = $stock->stock;

  // var_dump(StockQuery::stock_input($user, $sup));



  if ($result) {
    
    Msg::push(Msg::INFO, 'サプリメントを登録しました！');
    redirect('sup_index');

  } else {

    redirect(GO_REFERER);
  }
}

// function get()
// {
//   echo 'sup_index get';

//   $user = UserModel::getSession();
//   // $items = SupQuery::fetchByUser_id($user);
//   $items = SupQuery::fetchByStockOk($user);
//   // 在庫あるものを表示
//   \view\sup_index\index($items);

//   // // 削除フラグが立ってるsup配列の値を取得
//   $lack_items = SupQuery::fetchByDel_Id();
//   // 在庫が無いものを表示
//   \view\sup_index\stock($lack_items);
// }

