<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */

    session_start();

   // if(isset ($email) && isset($password) {
    	function validate($data){
    		$data = trim($data);
    		$data = stripslashes($data);
    		$data = htmlspecialchars($data);

    		return $data;
    	}

    	 $email = validate($_POST['email']);
         $password = validate($_POST['password']);

         if (empty($email)) {
         	header("Location:login.php?error=Email is required");

         	exit();

         }else if(empty($password)){
         	header("Location:login.php?error=Password is required");

         	exit();

         }else{
         	// $sql = "SELECT * FROM '$filename' WHERE Email='$email' AND Password='$password'";



         function csv_content_parser($content4) {
	foreach (explode("\n", $content4)as $line){
		yield str_getcsv($line);
	}
}

$content4 = file_get_contents('../storage/users.csv');
$data =array();
foreach (csv_content_parser($content4) as $fields) {
	array_push($data, $fields);
}

 print_r($data);





         	$filename = "../storage/users.csv";
         	$fileopen = fopen($filename, "r");
         	while (($dataa=fgetcsv($fileopen,1000,",")) !==FALSE){
         		$retrivedEmail = $dataa[2];
         		$retrivedPassword = $dataa[3];
         		if($retrivedEmail === $email && $retrivedPassword === $password){
         			echo "Logged in";

         			$_SESSION['email'] = $retrivedEmail;
         			$_SESSION['password'] = $retrivedPassword;
         			$_SESSION['ID'] = $dataa['ID'];
         			$_SESSION['fullname'] = $dataa[1];

         			header("Location:../dashboard.php");

         		}
         	}
           
         }
            
         }
    


echo "HANDLE THIS PAGE";

