<?php

     //session_start();
    if (isset($_POST['submit'])) {

        ///Add Connection to the Database
        require 'database.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

         session_start();
         $_SESSION['sessionId'] = false;

        if (empty($username) || empty($password)) {
            header("Location: ../../index.php?error = emptyfields");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../../index.php?error = sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($password, $row['password']);
                    if ($passCheck == false) {
                        header("Location: ../../index.php?error = wrongpassword");
                        exit();
                    } else if ($passCheck == true) {
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['username'];
            
                        header("Location: ../../index.php?success = loggedin " . $_SESSION['sessionId'] . " " . $_SESSION['sessionUser']);
                        exit();
                    } else {
                        header("Location: ../index.php?error = wrongpassword");
                        exit();
                    }
                } else {
                    header("Location: ../../index.php?error = nouser");
                    exit();
                }
            }
        } 

    } else {
        $_SESSION['sessionId'] = false;
        // header("Location: index.php?success = loggedin");
        // exit();
    }

    session_abort();

?>