<?php

abstract class AdminBase
{
    /**
     * Checks if user is admin
     * @return bool
     */
    public static function checkAdmin() {
        $userId = User::checkLogged();
        $user = User::getUser($userId);

        if ($user['role'] == 'admin') {
            return true;
        }

        die('Access denied');
    }
}