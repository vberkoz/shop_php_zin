<?php

/**
 * Class User
 */
class User
{
    /**
     * Creates new user in database
     * @param $username
     * @param $email
     * @param $secret
     * @return bool
     */
    public static function register($username, $email, $secret) {
        $db = Db::getConnection();
        $sql = 'INSERT INTO users (username, email, secret) VALUES (:username, :email, :secret)';

        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':secret', $secret, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Checks is string length meets requirements
     * @param $string
     * @param $length
     * @return bool
     */
    public static function checkLength($string, $length) {
        if (strlen($string) >= $length) return true;
        return false;
    }

    /**
     * Checks if string is valid email address
     * @param $email
     * @return bool
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
        return false;
    }

    /**
     * Checks if email already exists in database
     * @param $email
     * @return bool
     */
    public static function checkEmailExists($email) {
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) return true;
        return false;
    }
}