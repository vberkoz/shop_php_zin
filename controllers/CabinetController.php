<?php

class CabinetController
{
    /**
     * User cabinet main page
     * @return bool
     */
    public function actionIndex() {
        $userId = User::checkLogged();
        $user = User::getUser($userId);

        require_once ROOT . '/views/cabinet/index.php';
        return true;
    }

    /**
     * Cabinet edit user page
     * @return bool
     */
    public function actionEdit() {
        $userId = User::checkLogged();
        $user = User::getUser($userId);

        $username = $user['username'];
        $secret = $user['secret'];

        if (array_key_exists('secret2', $user)) {
            $secret2 = $user['secret2'];
        } else {
            $secret2 = $user['secret'];
        }

        $result = false;

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $secret = $_POST['secret'];
            $secret2 = $_POST['secret2'];

            $errors = false;

            if (!User::checkLength($username, 2)) $errors[] = 'Name has to be at least 2 symbols length';
            if (!User::checkLength($secret, 6)) $errors[] = 'Password has to be at least 6 symbols length';
            if (!User::checkLength($secret2, 6)) $errors[] = 'Password has to be at least 6 symbols length';
            if (!User::checkSecretMatch($secret, $secret2)) $errors[] = 'Passwords does not match';

            if ($errors == false) {
                $result = User::edit($userId, $username, $secret);
            }
        }

        require_once ROOT . '/views/cabinet/edit.php';
        return true;
    }

    /**
     * Cabinet history page
     * @return bool
     */
    public static function actionHistory() {
        $userId = User::checkLogged();
        $user = User::getUser($userId);

        require_once ROOT . '/views/cabinet/history.php';
        return true;
    }
}