
<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $databaseName = "test";

    // $conn = mysqli_connect($servername, $username, $password, $databaseName);
    include 'myaction.php';
    if(isset($_POST['uname'])){
    $uname = $_POST['uname'];}
    if(isset($_POST['pass'])){
    $pass = $_POST['pass'];}
    // print $pass . "_" . $email;

    $query = ("SELECT Username , Password FROM login WHERE Username ='$uname' AND Password ='$pass'");

    $result_can = mysqli_query($conn, $query);
    echo mysqli_num_rows($result_can);

    while ($row = mysqli_fetch_array($result_can)) {
        $check_Username = $row['Username'];
        $check_Password = $row['Password'];
    }
    if (($uname == $check_Username && $pass == $check_Password)==true){
       $message = "ok";
        echo "alert('$message')";
        header("Location: ./index.html");
    }
    else {
        $message = "Please enter a correct username and password";
        echo "alert('$message')";
        header("Location: ./login.html");
    }
?>