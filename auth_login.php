<?php
    include('inc/connect.php');

    $user_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $user_pass = filter_var($_POST["user_pass"], FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'";
    $result = $conn->query($sql);

    $check_name = "";
    $check_pass = "";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $check_name = $row["user_name"];
            $check_pass = $row["user_pass"];
        }
    } else {
        header('Location: login.php?e=1');
    }

    if($user_name == $check_name && $user_pass == $check_pass) {
        echo "Successful Login!";
        $_POST["user_name"] = "";
        $_POST["user_pass"] = "";
        setcookie("LoggedIn", 1, time()+3600);
        setcookie("User", $user_name, time()+3600);
        header('Location: index.php?u='.$user_name);
    } else if ($user_name != $check_name || $user_pass != $check_pass) {
        header('Location: login.php?e=1');
    }

    include('inc/close.php');
?>
