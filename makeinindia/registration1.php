	
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
         move_uploaded_file($file_tmp,"uimages/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>


<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);


$First = $_POST["fname"];
$Last = $_POST["lname"];
$Address = $_POST["address"];
$State_Id = $_POST["state"];
$City_Id = $_POST["city"];
$Area_Id = $_POST["area"];
$Mobile = $_POST["mobile"];
$Email = $_POST["email"];
$Username = $_POST["uname"];
$Password = $_POST["pass"];
$Gender = $_POST["gender"];

$file_name = $_FILES['image']['name'];

$str = "insert into registration(firstname, lastname, address, stateid, cityid, areaid, mobileno, email, username, password, gender , uimage) values('$First','$Last','$Address',$State_Id,$City_Id,$Area_Id,'$Mobile','$Email','$Username','$Password','$Gender','$file_name')";

mysql_query($str);

echo "record inserted.";

header("location:registration.php")

?>
