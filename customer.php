<?php>
   /*$firstname = $_POST[' firstname'];
   $lastname = $_POST['lastname'];
   $birthday= $_POST['birthday'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phoneNumber = $_POST['phone number'];
   $options= $_POST['options'];

//Data base connection
    
    $conn = new mysqli('localhost', 'root', 'Maran"1997', 'girrfe');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error');
    } else{
        $stmt = $conn->prepare("inser into Customers(firstname, lastname, birthday, gender,email,phoneNumber, options) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$firstname,$lastname,$birthday,$gender,$email,$phoneNumber,$options);
        $stmt->execute();
        echo "registration Success...";
        $stmt->close();
        $conn->close();
    }
*/

$servername = "localhost";
$username = "root";
$password = "Maran@1997";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
</php>
