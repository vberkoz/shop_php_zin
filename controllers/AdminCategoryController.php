<?php

class AdminCategoryController extends AdminBase
{
    /**
     * Categories list
     * @return bool
     */
    public function actionIndex() {
        self::checkAdmin();
        $categories = Category::getCategories();
        require_once ROOT . '/views/admin_category/index.php';
        return true;
    }

    /**
     * Create category
     * @return bool
     */
    public function actionCreate() {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            $category['title'] = $_POST['title'];
            $category['visibility'] = $_POST['visibility'];
            $category['sort_order'] = $_POST['sort_order'];

            $errors = false;

            if (!isset($category['title']) || empty($category['title'])) {
                $errors[] = 'Complete form';
            }

            if (!$errors) {
                $id = Category::createCategory($category);
                header("Location: /admin/category");
            }
        }

        require_once ROOT . '/views/admin_category/create.php';
        return true;
    }

    /**
     * Remove category
     * @param $id
     * @return bool
     */
    public function actionDelete($id) {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Category::deleteCategory($id);
            header("Location: /admin/category");
        }
        require_once ROOT . '/views/admin_category/delete.php';
        return true;
    }

    /**
     * Update category
     * @param $id
     * @return bool
     */
    public function actionUpdate($id) {
        self::checkAdmin();
        $category = Category::getCategory($id);

        if (isset($_POST['submit'])) {
            $category['title'] = $_POST['title'];
            $category['visibility'] = $_POST['visibility'];
            $category['sort_order'] = $_POST['sort_order'];

            $errors = false;

            if (!isset($category['title']) || empty($category['title'])) {
                $errors[] = 'Complete form';
            }

            if (!$errors) {
                Category::updateCategory($id, $category);

                header("Location: /admin/category");
            }
        }

        require_once ROOT . '/views/admin_category/update.php';
        return true;
    }
}