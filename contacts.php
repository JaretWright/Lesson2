<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <h1>My Contacts</h1>

    <?php
    //Step 1 - connect to the database
    $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc500182472',  'gc500182472', 'EInCI-ksZ_');

    //Step 2 - create the SQL command
    $sql = "SELECT * FROM contacts";

    //Step 3 - prepare the sql command (prevents SQL injection)
    $cmd = $conn->prepare($sql);

    //Step 4 - execute the command
    $cmd->execute();

    //Step 5 - store the results
    $contacts = $cmd->fetchAll();

    //Step 6 - remove the DB connection
    $conn = null;

    //Step 7 - loop over the results and display them to the screen
    echo '<table class="table table-striped table-hover">
            <tr><th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
              </tr>';
    foreach($contacts as $contact)
    {
        echo '<tr><td>'.$contact['firstName'].'</td>
                  <td>'.$contact['lastName'].'</td>
                  <td>'.$contact['email'].'</td></tr>';
    }
    echo '</table>';
    ?>
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>