<?php

/**
 * Class UserController
 */
class UserController
{
    /**
     * Loads user registration page
     * @return bool
     */
    public static function actionRegister() {
        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkLength($name, 2)) $errors[] = 'Name has to be at least 2 symbols length';
            if (!User::checkEmail($email)) {
                $errors[] = 'Email is not valid';
            } else {
                if (User::checkEmailExists($email)) $errors[] = 'Email is already exists';
            }
            if (!User::checkLength($password, 6)) $errors[] = 'Password has to be at least 6 symbols length';

            if ($errors == false) $result = User::register($name, $email, $password);
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }
}