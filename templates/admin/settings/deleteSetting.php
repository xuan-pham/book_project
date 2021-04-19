<?php
require_once ('../../../models/SettingModel.php');
$id = $_GET['sdid'];
$settingModel = new SettingModel();
$sql = $settingModel->deleteSetting($id);