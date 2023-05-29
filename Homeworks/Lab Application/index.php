<!DOCTYPE html>
<html>
<body>
    <form action="register.php" method="post">
        Full Name: <input type="text" name="fullname" required><br>
        Email: <input type="email" name="email" required><br>
        Gender: 
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="submit">
    </form>
</body>
</html>