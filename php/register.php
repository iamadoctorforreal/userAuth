<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file

    $filename = "../storage/users.csv";	

$file_open = fopen($filename, "a");
$no_rows = count(file($filename));
if($no_rows > 1)
{
$no_rows = ($no_rows - 1) + 1;
}
$form_data = array(
'ID' => $no_rows,
'Name' => $username,
'Email' => $email,
'Password' => $password
);

fputcsv($file_open, $form_data, ",");
fclose($file_open);
    
    // echo "OKAY";

echo "OKAY";
}
echo ",  User Successfully registered";


