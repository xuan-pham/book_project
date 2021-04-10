<?php
include_once('models/UserModel.php');
if (isset($_REQUEST['?action=delete']) and $_REQUEST['?action=delete'] != "") {
    $id = $_GET['?action='];
    $sql = getDelete($id);
    if ($conn->query($sql) === TRUE) {
        header("Refresh:0; url=/book_project/?action=userlist");
    } else {
        header("Refresh:0; url=/book_project/?action=userlist");
    }
}