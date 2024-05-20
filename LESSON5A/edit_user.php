<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if (!empty($name) && !empty($email) && !empty($role)) {
        $sql = "UPDATE users SET name='$name', email='$email', role='$role' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required!";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT id, name, email, role FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="edit_user.php">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <label for="role">Role:</label><br>
        <input type="text" id="role" name="role" value="<?php echo $user['role']; ?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
