<!doctype html>
<html>
    <head>
        <title>Crud Website</title>
    </head>
    <body>
        <h2>Registeration Form</h2>

        <form action="reg-processor.php" method="post">
            <label for="uname">Username:</label><br>
            <input type="text" id="uname" name="uname" placeholder="Enter Username"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter Email"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter Password"><br>

            <label for="state">State:</label><br>
            <input type="text" id="state" name="state" placeholder="Enter State"><br>

            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age" placeholder="Enter Age"><br>
            <input type="submit" value="Submit">
        </form>
    </body>    
</html>