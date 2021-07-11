<?php
 include ('connect.php');
     if($_SERVER["REQUEST_METHOD"]=="POST"){
       $Username=$_POST["name"];
       $Email=$_POST["email"];
       $Password=$_POST["password"];
        $Phonenumber=$_POST["phone"];
      
       $qry1="INSERT INTO `info`(`Username`,`Email`, `Password`, `Phonenumber`) VALUES ('$Username','$Email','$Password','$Phonenumber')";
       $res1=mysqli_query($conn,$qry1);
    }
    else{
       
        echo "failed";
    }
    mysqli_close($conn);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration form</title>

</head>
<body>
     <form id="one" method="POST" action="">
    <label><h2><b>Registration form</b></h2></label><br><br>
     Username:<input type="text"  id="userid" name="name" required><br><br>
     Password:<input type="password" id="pass" name="password" required><br><br>
     Email id:<input type="email"  id="mailid" name="email" required><br><br>
     Phone number:<input type="text" id="phone" name="phone" pattern="[0-9]{10}"  required><br><br>
  
     <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>
