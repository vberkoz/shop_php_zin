<?php

class AdminController extends AdminBase
{
    /**
     * Administration area main page
     * @return bool
     */
    public function actionIndex() {
        self::checkAdmin();
        require_once ROOT . '/views/admin/index.php';
        return true;
    }
}