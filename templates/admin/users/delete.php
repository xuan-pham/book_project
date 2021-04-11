<?php
include "../../../models/UserModel.php";

if (isset($_REQUEST['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = getDelete($id);
}
?>