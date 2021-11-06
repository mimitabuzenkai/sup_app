<?php 
namespace model;

use lib\Msg;

class StockModel extends AbstractModel {

    public string $id;
    public string $stock_id;
    public string $user_id;
    public string $item_id;
    public string $created_at;
    public string $updated_at;
    public string $updated_by;

    protected static $SESSION_NAME = '_stock';

    // public function isValidId() {

    //     return static::validateId($this->id);
        
    // }

    // public static function validateId($val) {
    //     $res = true;

    //     if(empty($val)) {

    //         Msg::push(Msg::ERROR, 'ユーザーIDを入力してください。');
    //         $res = false;

    //     } else {

    //         if(strlen($val) > 10) {
    //             Msg::push(Msg::ERROR, 'ユーザーIDは１０桁以下で入力してください。');
    //             $res = false;
    //         }

    //         if(!is_alnum($val)) {
    //             Msg::push(Msg::ERROR, 'ユーザーIDは半角英数字で入力してください。');
    //             $res = false;
    //         }

    //     }

    //     return $res;
    // }
    
    // public static function validatePwd($val)
    // {
    //     $res = true;

    //     if (empty($val)) {

    //         Msg::push(Msg::ERROR, 'パスワードを入力してください。');
    //         $res = false;

    //     } else {

    //         if(strlen($val) < 4) {

    //             Msg::push(Msg::ERROR, 'パスワードは４桁以上で入力してください。');
    //             $res = false;

    //         } 
            
    //         if(!is_alnum($val)) {

    //             Msg::push(Msg::ERROR, 'パスワードは半角英数字で入力してください。');
    //             $res = false;

    //         }
    //     }

    //     return $res;
    // }

    // public function isValidPwd()
    // {
    //     return static::validatePwd($this->pwd);
    // }

    // public static function validateNickname($val)
    // {

    //     $res = true;

    //     if (empty($val)) {

    //         Msg::push(Msg::ERROR, 'ニックネームを入力してください。');
    //         $res = false;

    //     } else {

    //         if(mb_strlen($val) > 10) {

    //             Msg::push(Msg::ERROR, 'ニックネームは１０桁以下で入力してください。');
    //             $res = false;
                
    //         } 
    //     }

    //     return $res;
    // }

    // public function isValidNickname()
    // {
    //     return static::validateNickname($this->nickname);
    // }
}
