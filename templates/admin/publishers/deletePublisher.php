<?php
require_once ('../../../models/PublisherModel.php');
$id = $_GET['pdid'];
$publisherModel = new PublisherModel();
$sql = $publisherModel->deletePB($id);