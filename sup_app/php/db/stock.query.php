<?php

namespace db;

use db\DataSource;
use model\SupModel;

class StockQuery
{
    public static function stock_input($stock)
    {

        $db = new DataSource;
        $sql = 'insert into stocks (stock_id, sup_id) values (:stock_id, :sup_id);';

        $result = $db->execute($sql, [

            ':stock_id' => $stock->stock_id,
            ':sup_id' => $stock->sup_id
        ]);

        return $result;
    }

}
