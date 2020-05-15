<? php 
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];   
    $dob = $_POST['dob'];

    $conn = new mysqli('localhost', 'root', '','form');
    if ($conn->connect_error)
    {
    	die('Connection Failed : '. $conn->connect_error);

    }
    else
    {
    	$stm= $conn->prepare("insert into signup(name,email, pass,gender,dob)values(?,?,?,?,?)");
    	$stm->blind_param("ssssi",$name , $email, $pass, $gender,$dob);
    	$stm->execute();
    	
    	$stm->close();
    	$conn->close();
    	    }

   ?>
  