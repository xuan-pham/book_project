<?php
include ('../../../models/admin/PostCategoryModel.php');
if (isset($_REQUEST['PCid'])) {
    $id = $_GET['PCid'];
    $sql = deletePostCategory($id);
}
?>