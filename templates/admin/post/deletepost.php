<?php
include "../../../models/admin/PostModel.php";

if (isset($_REQUEST['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = getDeletePost($id);
}
?>