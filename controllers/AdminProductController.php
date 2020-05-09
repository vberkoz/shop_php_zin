<?php

class AdminProductController extends AdminBase
{
    /**
     * Products list
     * @return bool
     */
    public function actionIndex() {
        self::checkAdmin();
        $products = Product::getProductsForAdmin();
        require_once ROOT . '/views/admin_product/index.php';
        return true;
    }

    /**
     * Remove product
     * @param $id
     * @return bool
     */
    public function actionDelete($id) {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Product::deleteProduct($id);
            header("Location: /admin/product");
        }
        require_once ROOT . '/views/admin_product/delete.php';
        return true;
    }

    /**
     * Create product
     * @return bool
     */
    public function actionCreate() {
        self::checkAdmin();
        $categories = Category::getCategories();

        if (isset($_POST['submit'])) {
            $product['title'] = $_POST['title'];
            $product['category_id'] = $_POST['category_id'];
            $product['product_id'] = $_POST['product_id'];
            $product['price'] = $_POST['price'];
            $product['availability'] = $_POST['availability'];
            $product['brand'] = $_POST['brand'];
            if ($_FILES['image']['name']) {
                $product['image'] = $_FILES['image']['name'];
            } else {
                $product['image'] = 'no-image.jpg';
            }
            $product['description'] = $_POST['description'];
            $product['is_new'] = $_POST['is_new'];
            $product['is_recommended'] = $_POST['is_recommended'];
            $product['visibility'] = $_POST['visibility'];

            $errors = false;

            if (!isset($product['title']) || empty($product['title'])) {
                $errors[] = 'Complete form';
            }

            if (!$errors) {
                $id = Product::createProduct($product);

                if ($id) {
                    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                        move_uploaded_file($_FILES['image']['tmp_name'],
                            $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$_FILES['image']['name']}");
                    }
                }

                header("Location: /admin/product");
            }
        }

        require_once ROOT . '/views/admin_product/create.php';
        return true;
    }

    /**
     * Update product
     * @param $id
     * @return bool
     */
    public function actionUpdate($id) {
        self::checkAdmin();
        $categories = Category::getCategories();
        $product = Product::getProduct($id);
        $image = '/template/images/' . $product['image'];

        if (isset($_POST['submit'])) {
            $product['title'] = $_POST['title'];
            $product['category_id'] = $_POST['category_id'];
            $product['product_id'] = $_POST['product_id'];
            $product['price'] = $_POST['price'];
            $product['availability'] = $_POST['availability'];
            $product['brand'] = $_POST['brand'];

            if ($_FILES['image']['name']) {
                $product['image'] = $_FILES['image']['name'];
            } else {
                $product['image'] = 'no-image.jpg';
            }

            $product['description'] = $_POST['description'];
            $product['is_new'] = $_POST['is_new'];
            $product['is_recommended'] = $_POST['is_recommended'];
            $product['visibility'] = $_POST['visibility'];

            $errors = false;

            if (!isset($product['title']) || empty($product['title'])) {
                $errors[] = 'Complete form';
            }

            if (!$errors) {
                if (Product::updateProduct($id, $product)) {
                    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                        move_uploaded_file($_FILES['image']['tmp_name'],
                            $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$_FILES['image']['name']}");
                    }
                }

                header("Location: /admin/product");
            }
        }

        require_once ROOT . '/views/admin_product/update.php';
        return true;
    }
}