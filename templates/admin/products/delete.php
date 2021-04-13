<?php
include "../../../models/admin/ProductModel.php";

if (isset($_REQUEST['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = getDeleteProduct($id);
}
?>