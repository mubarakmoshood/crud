<!doctype html>
<html>
    <head>
        <title>Crud Website</title>
    </head>
    <body>
        <h2>List of Users</h2>

        <?php
            include 'dbcon.php';

            try
            {
                $sql = 'SELECT * FROM users';
                $result = $pdo->query($sql);
            }
            catch (PDOException $e)
            {
                echo 'error';
                exit();
            }

            while ($row = $result->fetch())
            {
                $jokes[] = array('id' => $row['id'], 'username' => $row['username'], 'email' => $row['email'], 'password' => $row['password'], 'state' => $row['state'], 'age' => $row['age']);
            }

            print_r($jokes);
        ?>
    </body>    
</html>