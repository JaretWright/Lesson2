<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>
    <h1>My Contacts</h1>

    <?php
        //Step 1 - connect to the database
        $conn = new PDO('mysql:host=localhost;dbname=php','root', 'admin');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Step 2 - create a SQL query
        $sql = "SELECT * FROM contacts";

        //Step 3 - prepare the SQL
        $cmd = $conn->prepare($sql);

        //Step 4 - execute the command and store the results
        $cmd->execute();
        $contacts = $cmd->fetchAll();

        //Step 5 - disconnect from the database
        $conn=null;

        echo '<table class="table table-striped table-hover"><tr><th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
              </tr>';

        foreach($contacts as $contact)
        {
            echo '<tr><td>'.$contact['firstName'].'</td>
                    <td>'.$contact['lastName'].'</td>
                    <td>'.$contact['email'].'</td></tr>';
        }
    ?>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</html>
