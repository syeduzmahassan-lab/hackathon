<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hackathon Hub</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    :root {
      --primary-color: #2563eb;
      --secondary-color: #1e40af;
      --accent-color: #facc15;
      --bg-color: #f4f4f9;
      --text-color: #333;
      --white: #fff;
      --dark: #111827;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      line-height: 1.6;
      position: relative;
      z-index: 0;
    }

    /* 🔥 Background Video Styling */
    .bg-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      filter: brightness(0.6); /* dark overlay for better text visibility */
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Header */
    header {
      background: rgba(17, 24, 39, 0.8);
      backdrop-filter: blur(6px);
      color: var(--white);
      padding: 15px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 8px;
    }

    nav {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    nav a {
      padding: 6px 12px;
      border-radius: 5px;
      font-weight: 500;
      transition: background 0.3s;
      color: var(--white);
    }

    nav a:hover {
      background-color: var(--primary-color);
    }

    /* Hero Section */
    .hero {
      color: var(--white);
      text-align: center;
      padding: 100px 20px;
    }

    .hero h1 {
      font-size: 2.8rem;
      margin-bottom: 20px;
      text-shadow: 0 3px 8px rgba(0,0,0,0.6);
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      text-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }

    .btn {
      display: inline-block;
      background: var(--accent-color);
      color: var(--dark);
      padding: 12px 22px;
      margin: 10px;
      border-radius: 6px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background-color: #fbbf24;
      transform: translateY(-2px);
    }

    /* Section General */
    .section {
      padding: 60px 20px;
      text-align: center;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
      position: relative;
      z-index: 1; /* content above video */
    }

    .section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .section h2 {
      font-size: 2.2rem;
      color: var(--accent-color);
      margin-bottom: 20px;
      text-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }

    .section p {
      max-width: 700px;
      margin: 0 auto 40px;
      font-size: 1.05rem;
      color: var(--white);
      text-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }

    footer {
      background: rgba(17, 24, 39, 0.85);
      color: var(--white);
      padding: 30px 15px;
      text-align: center;
      font-size: 0.95rem;
      margin-top: 40px;
      backdrop-filter: blur(6px);
    }

    footer a {
      color: var(--accent-color);
      margin: 0 8px;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- 🔥 Live Background Video -->
  <video autoplay muted loop playsinline class="bg-video">
    <source src="videos/Background.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Header -->
  <header>
    <h1>Hackathon Hub</h1>
    <nav>
      <a href="Page.php">Home</a>
      <a href="Events.php">Events</a>
      <a href="Domain.php">Domains</a>
      <a href="Practice.php">Practice</a>
      <a href="Leaderboard.php">Leaderboard</a>
      <a href="Notifications.php">Notifications</a>
      <a href="Feedback.php">Feedback</a>
      <a href="Sign up.php">Sign Up</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <!-- Hero -->
  <section id="home" class="hero">
    <h1>Join the Most Exciting Hackathons Worldwide!</h1>
    <p>Compete, learn, and innovate with global tech enthusiasts.</p>
    <a href="Sign up.php" class="btn">Sign Up</a>
    <a href="login.php" class="btn">Login</a>
  </section>

  <!-- Example Section -->
  <section class="section">
    <h2>Experience the Energy Live</h2>
    <p>Our hackathons are broadcast live so you never miss a moment of innovation!</p>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Hackathon Hub</p>
    <p>
      <a href="#">Privacy Policy</a> |
      <a href="#">Terms of Service</a> |
      <a href="#">Contact Us</a>
    </p>
  </footer>
</body>
</html>
