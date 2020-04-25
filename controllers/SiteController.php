<?php

class SiteController
{
    /**
     * Loads main page
     * @return bool
     */
    public function actionIndex() {
        $categories = Category::getCategories();
        $products = Product::getProducts(4);

        require_once ROOT . '/views/site/index.php';
        return true;
    }

    /**
     * Contact page action
     * @return bool
     */
    public function actionContact() {
        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $userEmail = $_POST['email'];
            $userText = $_POST['message'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Email is not valid';
            }

            if ($errors == false) {

                $adminEmail = 'vberkoz@gmail.com';
                $subject = 'Shop PHP Zin Message';
                $message = "$userEmail $userText";
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once ROOT . '/views/site/contact.php';
        return true;
    }
}