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
    // phương thức POST
    // CÚ PHÁP $_POST['name']
// if(isset($_POST['sub'])){
//     $user = $_POST['user'];
//     $pass = $_POST['pass'];
//     echo $user.'<br/>'.$pass;
// }
//upload file
// $name = $_FILES['gia tri o input']['name'];// lay dc ten file
// $_FILES['gia tri o input']['szie'];// lay dc kich cu file
// $_FILES['gia tri o input']['type'];//nkieu file
// $_FILES['gia tri o input']['error'];//file loi
// $tmp_name = $_FILES['gia tri o input']['tmp_name']; //thư mục tạm
// move_uploaded_file($tmp_name, 'upload/'.$name);
if(isset($_POST['sub'])){
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if($error > 0){
        echo 'file bi loi';
    }else{
        move_uploaded_file($tmp_name, 'upload/'.$file);
        echo 'thanh cong';
    }
}

    ?>
    <!-- <form action="" method="POST">
        <input type="text" name="user">
        <input type="password" name="pass">
        <input type="submit" name="sub" value="đăng nhập">
    </form> -->
    <img src="<?php echo 'upload/'.$file;?>">
    <hr/>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="sub">
</form>
</body>
</html>