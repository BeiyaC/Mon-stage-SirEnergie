<?php
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
//$query = mysqli_query($conn, "SELECT * FROM article", MYSQLI_USE_RESULT);
$sql = "SELECT id,Nom, Prix, Image, Discount FROM article";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <br>

        <a href="vitrine.php?data=<?php echo $row["id"] ?>"> <?php echo($row["Nom"]); ?> </a> <?php
        if ($row["Discount"] > 0) { ?>
            <span style="color:red; text-decoration: line-through;"> <?php echo($row["Prix"]); ?> </span> <?php
            $row["Prix"] = $row["Prix"] * (1 - 0.20); ?> <span style="color:green;"> <?php
            echo($row["Prix"]);
        } else {
            echo($row["Prix"]);
        } ?> <img class="Test" src=
        <?php echo($row["Image"]) ?>
        alt="Picture" width="150" height="150"></span>

        <?php
        if ($row["Discount"] > 0) {
            echo("oui");
        } else {
            echo("non");
        }
    }
} ?>

<?php
$conn->close();
?>



