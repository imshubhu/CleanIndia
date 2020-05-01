
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>


<?php
session_start();
error_reporting(0);
$con = mysql_connect("localhost:3307","root","");
mysql_select_db("cleanindia",$con);


$subject = $_POST["sub"];
$descri = $_POST["message"];
$time = $_POST["date"];
$uname = $_SESSION['uname'];
$uid = $_SESSION['uid'];

$file_name = $_FILES['image']['name'];

$str = "insert into postcomplain(userid,username,subject, description, filename, datetime) values($uid,'$uname','$subject','$descri','$file_name',now())";


mysql_query($str);

echo "record inserted.";

header("location:postcomplain.php")

?>
