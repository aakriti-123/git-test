<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "login");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "SELECT fullname, address,contact,email,password,confirmpassword from register";
// $sql = "INSERT INTO register (fullname, address, contact,email,password,confirmpassword)";

$result = $conn->query($sql);// run the sql query

// if($result->num_rows > 0) {
    if($result && $result->num_rows){
    while($row = $result->fetch_assoc()) {  //it fetch data from each row, php method
        // echo "Username:" . $row["username"]. "Password:". $row["password"]. "<br>";
        $fname = $row["fullname"];
        $add = $row["address"];
        $contact = $row["contact"];
        $email = $row["email"];
        $pass = $row["password"];
        $cpass = $row["confirmpassword"];



        echo "$fname";
        echo "$add";
        echo "$contact";
        echo "$email";
        echo "$pass";
        echo"$cpass";

    }
} else {
    echo "Data not found!";
}


//database insertion parts

$name = $_POST["name"];
$address = $_POST["address"];
$contact=$_POST["contact"];
$email= $_POST["email"];
$password= $_POST["password"];
$confirmpassword= $_POST["confirmpassword"];

echo $name;
echo $address;
echo $contact;
echo $email;
echo $password;
echo $confirmpassword;


 $insert = "INSERT INTO register (fullname, address, contact, email ,password,confirmpassword)
 VALUES ('$name', '$address', '$contact', '$email', '$password', '$confirmpassword')";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>
