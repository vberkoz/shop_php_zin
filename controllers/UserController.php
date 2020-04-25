<?php

class UserController
{
    /**
     * Loads user sign up page
     * @return bool
     */
    public static function actionSignup() {
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

        require_once ROOT . '/views/user/signup.php';
        return true;
    }

    /**
     * Loads user sign in page
     * @return bool
     */
    public static function actionSignin() {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            if (!User::checkEmail($email)) $errors[] = 'Email is not valid';
            if (!User::checkLength($password, 6)) $errors[] = 'Password has to be at least 6 symbols length';

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Wrong sign in data';
            } else {
                User::auth($userId);
                header("Location: /cabinet/");
            }
        }

        require_once ROOT . '/views/user/signin.php';
        return true;
    }

    /**
     * Signs out current user
     */
    public function actionSignout() {
        session_start();
        unset($_SESSION['user']);
        header("Location: /");
    }
}