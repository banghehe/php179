<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
// phuong thuc: GET
//cu phap truyen tham so len url
//tenmien.com/index.html/tham_so1=gia_tr1&tham_so2=gia_tri2
// $_GET['tham_so'];//biến toàn cục va lưu trữ dưới dang mảng bất tuần tự
// if(isset($_GET['name']) && isset($_GET['address'])){
//     $name = $_GET['name'];
//     $address = $_GET['address'];
//     echo $name.$address;
// }
//$array = array(bieu_thuc1,bieuthuc_2)
//$array =[bieu_thuc1,bieuthuc_2]
//mang vi du
// 
//JSON:
$data_json = file_get_contents('data.json');
$result_json = json_decode($data_json,true);
foreach($result_json as $key => $value){
    echo $value.'<br/>';
}
$data_en_json = json_encode($result_json);
  file_put_contents('data.json', $data_en_json);
  ?>
    <!-- <form action="" method="GET">
        <input type="email" name="email" placeholder="nhập email">
        <input type="password" name="pass" placeholder="nhập pass">
        <input type="submit" name="sub" value="đăng nhập">
    </form> -->
</body>
</html>