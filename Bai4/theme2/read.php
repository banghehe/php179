<?php 
$file = $_GET['file'];
// mở file
$file_path = 'upload/'.$file;
//thông báo tải file cho trình duyệt

//trình duyệt trả về định dạng file
header("Content-Type: application/pdf");
//đọc files
readfile($file_path);
?>