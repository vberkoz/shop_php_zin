<?php

class Order
{
    const STATUS_CAPTIONS = ['New order', 'In progress', 'Shipping', 'Closed'];

    /**
     * Gets orders list
     * @return array
     */
    public static function getOrders()
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM orders ORDER BY created_at ASC");

        $i = 0;
        $orders = [];
        while ($row = $result->fetch()) {
            $orders[$i]['id'] = $row['id'];
            $orders[$i]['user_name'] = $row['user_name'];
            $orders[$i]['user_phone'] = $row['user_phone'];
            $orders[$i]['user_comment'] = $row['user_comment'];
            $orders[$i]['user_id'] = $row['user_id'];
            $orders[$i]['created_at'] = $row['created_at'];
            $orders[$i]['bag'] = $row['bag'];
            $orders[$i]['order_status'] = $row['order_status'];
            $i++;
        }

        return $orders;
    }

    /**
     * Get single order
     * @param $id
     * @return mixed
     */
    public static function getOrder($id)
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM orders WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }

    /**
     * Saves order into database
     * @param $userName
     * @param $userPhone
     * @param $userComment
     * @param $userId
     * @param $bag
     * @return bool
     */
    public static function save($userName, $userPhone, $userComment, $userId, $bag)
    {
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

    /**
     * Update order
     * @param $id
     * @param $orderStatus
     * @return bool
     */
    public static function update($id, $orderStatus) {
        $db = Db::getConnection();
        $sql = 'UPDATE orders SET order_status = :order_status WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':order_status', $orderStatus, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Delete order by id
     * @param $id
     * @return bool
     */
    public static function delete($id)
    {
        $id = intval($id);

        $db = Db::getConnection();

        $sql = 'DELETE FROM orders WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }
}