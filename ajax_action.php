<?php
include_once 'config/Database.php';
include_once 'class/Records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {	
	$record->ma_tour = $_POST["ma_tour "];
    $record->chu_tour = $_POST["chu_tour"];
    $record->loai_tour = $_POST["loai_tour"];
	$record->ten_tour = $_POST["ten_tour"];
	$record->dia_diem = $_POST["dia_diem"];
	$record->thoi_gian = $_POST["thoi_gian"];
	$record->gia_tour = $_POST["gia_tour"];
	$record->mo_ta = $_POST["mo_ta"];

	$record->addRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["ma_tour"];
	$record->getRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
	$record->ma_tour = $_POST["ma_tour "];
    $record->chu_tour = $_POST["chu_tour"];
    $record->loai_tour = $_POST["loai_tour"];
	$record->ten_tour = $_POST["ten_tour"];
	$record->dia_diem = $_POST["dia_diem"];
	$record->thoi_gian = $_POST["thoi_gian"];
	$record->gia_tour = $_POST["gia_tour"];
	$record->mo_ta = $_POST["mo_ta"];
	$record->updateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->ma_tour = $_POST["ma_tour"];
	$record->deleteRecord();
}
?>