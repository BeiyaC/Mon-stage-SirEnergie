<?php
$name = $_POST['Nom'];
$prix = $_POST['Prix'];
$image = $_POST['Image'];
$discount = 1;
$servername = "localhost";
$username = "root";
$password = "toto";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_errno) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_connect(
    $db = mysqli_select_db($conn, "mysql"));
$sql = "INSERT INTO article (Nom, Prix, Image, Discount) VALUES ('$name','$prix', '$image', '$discount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

Bonjour, vous avez ajouté cet article : <?php echo $_POST['Nom']; ?>. <br>
Au prix de: <?php echo $_POST['Prix']; ?> euros. <br>
Avec cet image: <img class="test" src="<?php echo $_POST['Image']; ?>"> <br>
En discount: <?php echo $_POST['Discount']; ?>


