<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="{{route('store')}}" method="POST">
    	@csrf()
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="confirmpassword">Confirm Password:</label><br>
        <input type="password" id="confirmpassword" name="confirmpassword"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>