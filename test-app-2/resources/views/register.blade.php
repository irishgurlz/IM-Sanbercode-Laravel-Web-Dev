<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <br>

        <label for="first_name">First Name:</label> <br><br>
        <input id="first_name" type="text" name="first_name" required><br>
        <br>

        <label for="last_name">Last Name:</label> <br><br>
        <input id="last_name" type="text" name="last_name" required><br>
        <br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="male" required>Male<br>
        <input type="radio" name="gender" value="female" required>Female<br>
        <input type="radio" name="gender" value="other" required>Other<br>
        <br>

        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality" required>
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
        </select><br>
        <br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="language[]" value="English"> English<br>
        <input type="checkbox" name="language[]" value="Other"> Other<br>
        <br>

        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="30" required></textarea>
        <br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
