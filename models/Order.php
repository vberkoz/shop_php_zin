<?php

class Order
{
    /**
     * Saves order into database
     * @param $userName
     * @param $userPhone
     * @param $userComment
     * @param $userId
     * @param $bag
     * @return bool
     */
    public static function save($userName, $userPhone, $userComment, $userId, $bag) {
        $db = Db::getConnection();
        $sql = 'INSERT INTO orders (user_name, user_phone, user_comment, user_id, bag) 
                VALUES (:user_name, :user_phone, :user_comment, :user_id, :bag)';

        $bag = json_encode($bag);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':bag', $bag, PDO::PARAM_STR);

        return $result->execute();
    }
}