<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <!-- Include db -->
    <?php include 'db.php' ?>
    <!-- Main Content -->
    <h1>Signup Form</h1>
    <form action="process_signup.php" method="post">
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div class="form-input">
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-input">
            <input type="submit" name="signup" value="Signup">
        </div>
    </form>

    <!-- Footer -->
</body>