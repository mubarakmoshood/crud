<?php
    include 'dbcon.php';

    //This code create/inserts user data into the database
    try {
        $sql = 'INSERT INTO users SET
            username="' . $_POST['uname'] . '",
            email="' . $_POST['email'] . '",
            password="' . $_POST['password'] . '",
            state="' . $_POST['state'] . '",
            age="' . $_POST['age'] . '"';

        $pdo->exec($sql);

        echo "successful";
        exit();
    } catch (PDOException $error)
    {
        echo "Failed";
        exit();
    }
    


    // $name = "Sunday Tobi";
    // $class = "400lv";
    // echo "My name is " . $name . ", I am in " . $class;
    //      "My name is Sunday Tobi, I am in 400lv"

    // $_POST['uname']

    // echo $_POST['uname'] . "<br>";
    // echo $_POST['email'];
    // echo $_POST['password'];
    // echo $_POST['state'];