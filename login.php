<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "logindb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// INSERT data
if (isset($_POST['add'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // store as entered (no hashing)
    $stmt = $conn->prepare("INSERT INTO login (email, `password`) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    if ($stmt->execute()) {
        echo "<script>alert('Record inserted successfully');</script>";
    } else {
        echo "<script>alert('Error inserting record: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}
// UPDATE data
if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // store as entered
    $stmt = $conn->prepare("UPDATE login SET `password`=? WHERE email=?");
    $stmt->bind_param("ss", $password, $email);
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "<script>alert('No record found for this email');</script>";
        }
    } else {
        echo "<script>alert('Error updating record: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}

// DELETE data
if (isset($_POST['delete'])) {
    $email = $_POST['email'];

    $stmt = $conn->prepare("DELETE FROM login WHERE email=?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Record deleted successfully');</script>";
        } else {
            echo "<script>alert('No record found to delete');</script>";
        }
    } else {
        echo "<script>alert('Error deleting record: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Hackathon Hub</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      justify-content: center;
      align-items: center;
      color: white;
    }

    header {
      position: absolute;
      top: 0;
      width: 100%;
      text-align: center;
      padding: 20px 0;
      font-size: 1.8rem;
      font-weight: 600;
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(6px);
    }

    .login-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.2);
      max-width: 420px;
      width: 90%;
      text-align: center;
    }

    .login-container h2 {
      color: #fff;
      margin-bottom: 25px;
      font-size: 2rem;
    }

    label {
      display: block;
      margin: 15px 0 5px;
      font-weight: 600;
      color: #f0f0f0;
      text-align: left;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 1rem;
      outline: none;
      background: rgba(255,255,255,0.85);
    }

    input:focus {
      box-shadow: 0 0 10px rgba(37, 117, 252, 0.6);
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      margin: 8px 0;
      cursor: pointer;
      color: white;
      background: linear-gradient(45deg, #ff416c, #ff4b2b);
      transition: transform 0.2s ease, background 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
      background: linear-gradient(45deg, #ff4b2b, #ff416c);
    }

    .extra-links {
      margin-top: 15px;
    }

    .extra-links a {
      color: #ffeb3b;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      padding: 15px;
      margin-top: 30px;
      color: white;
      font-size: 0.9rem;
    }
    footer a {
      color: #ffeb3b;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    Hackathon Hub
  </header>

  <div class="login-container">
    <h2>Login</h2>
    <form method="POST">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Enter email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <button type="submit" name="add">Insert</button>
      <button type="submit" name="update">Update</button>
      <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>

      <div class="extra-links">
        <p><a href="#">Forgot Password?</a></p>
        <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
      </div>
    </form>
  </div>
  <footer>
    © 2025 Hackathon Hub | 
    <a href="#">Privacy Policy</a> | 
    <a href="#">Terms of Service</a>
  </footer>
</body>
</html>
