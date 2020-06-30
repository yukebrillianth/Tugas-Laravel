<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <title>Sign Up</title>
    <!-- tidak pakai css -->
</head>

<body>

    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ url('/welcome')}}" method="POST">
        @csrf

        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname" placeholder="Nama depan"><br><br>

        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname" placeholder="Nama belakang"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="M"> Male<br>
        <input type="radio" name="gender" value="F"> Female<br>
        <input type="radio" name="gender" value="O"> Other<br><br>

        <label>Nationality:</label><br><br>
        <select>
            <option value="indonesia">Indonesian</option>
            <option value="india">Indian</option>
            <option value="malaysia">Malaysian</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="gender" value="M"> Bahasa Indonesia<br>
        <input type="checkbox" name="gender" value="F"> English<br>
        <input type="checkbox" name="gender" value="O"> Other<br><br>

        <label>Bio:</label><br><br>
        <textarea rows="15" cols="45" placeholder="Bio"></textarea><br>
        <input type="submit" value="Sign Up">

    </form>

</body>

</html>