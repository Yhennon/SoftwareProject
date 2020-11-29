<?php 

function checkData ($username,$password) {

    if (isset($_POST["reg-username-field"]) && $_POST["reg-username-field"] == true && isset($_POST["reg-password-field"]) && $_POST["reg-password-field"] == true) {
        $username = $_POST["reg-username-field"];
        $password = $_POST["reg-password-field"];
        registerUser($username, $password);
        echo 
        '
        <p>A regisztráció sikeres.<br></p>
        <p><a href="index.php">Vissza az előző oldalra!</a></p>
        ';
    } else if ($_POST["reg-username-field"] == false && $_POST["reg-password-field"] == false) {
        echo '<script>alert("You need to type in the username and the password first.")</script>';
    } else if ($_POST["reg-password-field"] == false) {
        echo "You need to type in the password.";
    } else if ($_POST["reg-username-field"] == false) {
        echo "You need to type in the username.";
    }

}

function registerUser($username, $password)
{
    $conn = new mysqli("localhost", "root", "", "beergallery");
    if ($conn->connect_error) {
        die('<script>
            alert("Connection failed: " . $conn->connect_error)
            </script>');
    }

    $sql = "INSERT INTO users (username,password)
            VALUES ('$username','$password')";

    $result = $conn->query($sql);
    $conn->close();
}


?>