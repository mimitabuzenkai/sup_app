<?php

namespace db;

use db\DataSource;
use model\SupModel;

class SupQuery
{
    public static function fetchByUser_id($user)
    {

        $db = new DataSource;
        $sql = 'select * from sups where user_id = :user_id;';

        $result = $db->select($sql, [
            ':user_id' => $user->id
        ], DataSource::CLS, SupModel::class);

        return $result;
    }

    public static function fetchBySup_id($sup)
    {

        $db = new DataSource;
        $sql = 'select * from sups where id = :sup_id;';

        $result = $db->selectOne($sql, [
            ':sup_id' => $sup->id
        ], DataSource::CLS, SupModel::class);

        return $result;
    }

    public static function fetchByStockOk()
    {

        $db = new DataSource;
        $sql = 'select * from sups where del_flg = 0;';

        $result = $db->select($sql, [], DataSource::CLS, SupModel::class);

        return $result;
    }

    public static function fetchByDel_Id()
    {

        $db = new DataSource;
        $sql = 'select * from sups where del_flg = 1;';

        $result = $db->select($sql, [], DataSource::CLS, SupModel::class);

        return $result;
    }

    public static function insert($sup, $user)
    {

        $db = new DataSource;
        $sql = 'insert into sups (item, maker, price, capacity, utility, user_id, stock) values (:item, :maker, :price, :capacity, :utility, :user_id, :stock);';

        return $db->execute($sql, [

            ':item' => $sup->item,
            ':maker' => $sup->maker,
            ':price' => $sup->price,
            ':capacity' => $sup->capacity,
            ':utility' => $sup->utility,
            ':stock' => $sup->stock,
            ':user_id' => $user->id
        ]);
    }

    public static function del_On($sup)
    {
        $db = new DataSource;
        $sql = 'update sups set del_flg = 1 where id = :id;';

        return $db->execute($sql, [

            ':id' => $sup->id
        ]);
    }

    public static function del_Off($sup)
    {
        $db = new DataSource;
        $sql = 'update sups set del_flg = 0 where id = :id;';

        return $db->execute($sql, [

            ':id' => $sup->id
        ]);
    }

    public static function item_update($sup)
    {
        $db = new DataSource;
        $sql = 'update sups set item = :item, maker = :maker, price = :price, capacity = :capacity, utility = :utility, stock = :stock where id = :id';

        return $db->execute($sql, [

            ':item' => $sup->item,
            ':maker' => $sup->maker,
            ':price' => $sup->price,
            ':capacity' => $sup->capacity,
            ':utility' => $sup->utility,
            ':stock' => $sup->stock,
            ':id' => $sup->id
        ]);
    }

    public static function item_delete($sup)
    {
        $db = new DataSource;
        $sql = 'delete from sups where id = :id;';

        return $db->execute($sql, [

            ':id' => $sup->id,
        ]);
    }

    public static function purchase_up($sup)
    {
        $db = new DataSource;
        $sql = 'update sups set purchase = purchase + 1 where id = :id;';

        return $db->execute($sql, [
            
            ':id' => $sup->id
        ]);
    }

    public static function total_billing_amount($sup)
    {
        $db = new DataSource;
        $sql = 'update sups set total_billing_amount = total_billing_amount + :price where id = :id;';

        return $db->execute($sql, [
            
            ':price' => $sup->price,
            ':id' => $sup->id,
        ]);
    }
}
