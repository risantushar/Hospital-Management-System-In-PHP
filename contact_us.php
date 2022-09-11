<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

if(!empty($name) || !empty($email)|| !empty($message))
{
    $host="localhost";
	$dbusername="risantushar";
	$dbpassword="risantushar#*";
    $dbname="hms.";
    
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }

    else
    {
        $sql="INSERT INTO contact_form(NAME,EMAIL,MESSAGE) values('$name','$email','$message')";
        mysqli_query($conn,$sql);

        if($conn->query($sql))
		{
			echo "sent sucessfully";
			echo "<a href='javascript:history.go(-1)'onMouuseOver='self.status.referrer;return true'>Back To privous page</a>";
			
		}
	else
	{
		echo "Failed";
		echo "<a href='javascript:history.go(-1)'onMouuseOver='self.status.referrer;return true'>Back To privous page</a>";
	}

        $conn->close();
    }
}
else
{
    echo "All fields are required";
    echo "<a href='javascript:history.go(-1)'onMouuseOver='self.status.referrer;return true'>Back To privous page</a>";
	die();
}
?>