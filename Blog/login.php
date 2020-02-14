  <?php
$connection = mysqli_connect("localhost", "root", "");  
 mysqli_select_db($connection,'blog_data'); 
$email=$_POST['name'];  
$password= $_POST['pwd']; 
 
 
 
$s="SELECT * FROM users WHERE Name='$email' AND password='$password'";
$result = mysqli_query($connection,$s);
$data = mysqli_num_rows($result);
if($data==1){
  include 'Collection.html';

}else{
		include 'login.html';
}
mysqli_close ($connection);  
?>