<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Contact</title>
</head>
<body>
    <form method="post" action="saveContact.php">
        <fieldset class="form-group">
            <label for="firstName">First Name:</label>
            <input name="firstName" id="firstName" placeholder="first name">
        </fieldset>
        <fieldset class="form-group">
            <label for="lastName">Last Name:</label>
            <input name="lastName" id="lastName" placeholder="last name">
        </fieldset>
        <fieldset class="form-group">
            <label for="email">Email:</label>
            <input name="email" id="email" placeholder="email">
        </fieldset>
        <button>Submit</button>
    </form>

</body>
</html>
