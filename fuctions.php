<?php 
function check_login($connection){
    if(isset($_SESSION['name'])){
        $id=$_SESSION['name'];
        $query="SELECT * FROM userdetais WHERE name='$id' limit 1";
        $result=mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result)>0){
$user_data=mysqli_fetch_assoc($result);
return $user_data;
        }
    }

    //redirect throw login
    header(("location:signin.php"));
}
