<?php

namespace lib;

use db\UserQuery;
use db\GirlQuery;
use db\ImageQuery;
use model\UserModel;
use lib\Msg;
use Throwable;

class Auth
{

  // ユーザーのログイン
  public static function login($id, $pwd)
  {
    try {

      $is_success = false;

      $user = UserQuery::fetchById($id);
      // var_dump(UserQuery::fetchById($id));

      // var_dump($user);

      // if (!empty($user)) {

      //   if (password_verify($pwd, $user->pwd)) {
      //     $is_success = true;
      //     UserModel::setSession($user);

      //   } else {
      //     Msg::push(Msg::ERROR, 'パスワードが一致しません。');
      //   }

      // } else {

      //   Msg::push(Msg::ERROR, 'ユーザー登録してください.');
      // }

      $is_success = true;
      UserModel::setSession($user);


    } catch (Throwable $e) {

      $is_success = false;
      
      echo 'ログイン処理でエラーが発生しました。';
      // Msg::push(Msg::DEBUG, $e->getMessage());
      // Msg::push(Msg::ERROR, 'ログイン処理でエラーが発生しました。');
    }

    return $is_success;
  }

  public static function regist($user)
  {
    try {
      // if (!($user->isValidId()
      //   * $user->isValidEmail()
      //   * $user->isValidPwd())) {
      //   return false;
      // }

      $is_success = false;

      // $exist_user = UserQuery::fetchByEmail($user->email);

      // if (!empty($exist_user)) {
      //   Msg::push(Msg::ERROR, '同じメールアドレスは登録できません。');
      //   return false;
      // }

      // $is_success = UserQuery::insert($user);
      $is_success = UserQuery::insert($user);

      if ($is_success) {
        UserModel::setSession($user);
      }

    } catch (Throwable $e) {

      $is_success = false;
      // Msg::push(Msg::DEBUG, $e->getMessage());
      // Msg::push(Msg::ERROR, 'ユーザー登録でエラーが発生しました。');
      echo 'ユーザー登録でエラーが発生しました。';
    }

    return $is_success;
  }

  // ログインしているかどうか？
  public static function isLogin()
  {

    try {

      $user = UserModel::getSession();
    } catch (Throwable $e) {

      UserModel::clearSession();
      echo '再度、ログインを行なってください。';
      // Msg::push(Msg::DEBUG, $e->getMessage());
      // Msg::push(Msg::ERROR, 'エラーが発生しました。再度ログインを行なってください。');
      return false;
    }

    if (isset($user)) {

      return true;
    } else {
      return false;
    }
  }

  // public static function logout()
  // {
  //   try {

  //     UserModel::clearSession();
  //   } catch (Throwable $e) {

  //     Msg::push(Msg::DEBUG, $e->getMessage());
  //     return false;
  //   }

  //   return true;
  // }

  // public static function requireLogin()
  // {
  //   if (!static::isLogin()) {
  //     Msg::push(Msg::ERROR, 'archive/pictureが見たければログインしてください。');
  //     redirect('login');
  //   }
  // }

  // public static function hasPermission($image_id, $user)
  // {
  //   return ImageQuery::isUserOwnImage($image_id, $user);
  // }

  // public static function requirePermission($image_id, $user)
  // {
  //   if (!static::hasPermission($image_id, $user)) {
  //     Msg::push(Msg::ERROR, '編集権限がありません。ログインして再度試してみてください。');
  //     redirect('login');
  //   }
  // }
}
