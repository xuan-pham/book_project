<?php
require_once ('../../../models/AuthorModel.php');
$id = $_GET['adid'];
$authorModel = new AuthorModel();
$sql = $authorModel->deleteAuthor($id);