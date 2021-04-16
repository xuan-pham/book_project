<?php
include ('../../../models/admin/ProductCategoryModel.php');
if (isset($_REQUEST['PCid'])) {
    $id = $_GET['PCid'];
    $sql = deleteProductCategory($id);
}
?>