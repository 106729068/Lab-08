<?php include 'header.inc'; ?>
<h2>Login page</h2>

<form method="post"
action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <input type="hidden" name="token" value="abc123">
    <input tyoe="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>