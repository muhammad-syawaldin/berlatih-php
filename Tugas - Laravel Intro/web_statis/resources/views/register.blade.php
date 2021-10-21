<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label>First Name:</label> <br><br>
        <input type="text" name="firstName"> <br><br>
        <label>Last Name:</label> <br><br>
        <input type="text" name="lastName"> <br><br>
        <label>Gender:</label> <br><br>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br><br>
        <label>Nationality:</label> <br><br>
        <select name="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="singapore">Singaporean</option>
            <option value="malaysia">Malaysian</option>
            <option value="australia">Australian</option>
        </select> <br><br>
        <label>Language Spoken:</label> <br><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br><br>
        <label>Bio:</label> <br><br>
        <textarea name="bio" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>