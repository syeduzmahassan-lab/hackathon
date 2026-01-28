<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice | Hackathon Hub</title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional external CSS -->
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f6d365, #fda085, #a1c4fd, #c2e9fb);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      color: #333;
      line-height: 1.6;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    header, footer {
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.25);
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #ffeb3b;
    }

    .section {
      padding: 70px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 2.7rem;
      margin-bottom: 15px;
      color: #222;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.15);
    }

    .section p {
      font-size: 1.2rem;
      margin-bottom: 40px;
      color: #444;
    }

    /* Filter dropdown */
    .filter-section {
      margin-bottom: 50px;
    }
    .filter-section select {
      padding: 12px 20px;
      font-size: 1rem;
      border-radius: 10px;
      border: 2px solid #ff512f;
      outline: none;
      cursor: pointer;
      background: white;
      font-weight: bold;
      color: #333;
      transition: 0.3s;
    }
    .filter-section select:hover {
      border-color: #0073e6;
      box-shadow: 0 0 10px rgba(0,115,230,0.3);
    }

    /* Practice list */
    .practice-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }

    .practice-card {
      width: 280px;
      background: white;
      padding: 25px;
      border-radius: 18px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      text-align: left;
      transition: transform 0.4s, box-shadow 0.4s;
      position: relative;
      overflow: hidden;
      border-top: 6px solid transparent;
    }

    /* Different colors per card */
    .practice-card:nth-child(1) { border-color: #ff512f; }
    .practice-card:nth-child(2) { border-color: #2196f3; }
    .practice-card:nth-child(3) { border-color: #4caf50; }
    .practice-card:nth-child(4) { border-color: #9c27b0; }

    .practice-card:hover {
      transform: translateY(-12px) scale(1.03);
      box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    }

    .practice-card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .practice-card:nth-child(1) h3 { color: #ff512f; }
    .practice-card:nth-child(2) h3 { color: #2196f3; }
    .practice-card:nth-child(3) h3 { color: #4caf50; }
    .practice-card:nth-child(4) h3 { color: #9c27b0; }

    .practice-card p {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 15px;
    }

    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 12px 20px;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 8px;
      transition: 0.3s;
    }
    .btn:hover {
      background: linear-gradient(135deg, #0073e6, #00bcd4);
      transform: scale(1.08);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    footer p {
      margin: 8px 0;
      font-size: 0.9rem;
    }

    footer a {
      color: #ffeb3b;
      text-decoration: none;
      margin: 0 8px;
      transition: 0.3s;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Practice Section -->
  <section class="section">
    <h2>🌈 Practice Challenges</h2>
    <p>Sharpen your skills with these fun & colorful domain-specific problems!</p>
    <div class="filter-section">
      <label for="domain"><strong>Filter by Domain:</strong></label>
      <select id="domain">
        <option value="all">All</option>
        <option value="ai">AI & Machine Learning</option>
        <option value="web">Web Development</option>
        <option value="cyber">Cybersecurity</option>
        <option value="mobile">Mobile Development</option>
      </select>
    </div>
    <div class="practice-list">
      <div class="practice-card">
        <h3>Spam Email Classifier (AI/ML)</h3>
        <p>Build a machine learning model that classifies emails as spam or not spam.</p>
        <a href="AI.php" class="btn">🚀 Try Now</a>
      </div>
      <div class="practice-card">
        <h3>Responsive Portfolio Website (Web Dev)</h3>
        <p>Create a responsive personal portfolio using HTML, CSS, and JavaScript.</p>
        <a href="webdev.php" class="btn">💻 Try Now</a>
      </div>
      <div class="practice-card">
        <h3>Password Strength Tester (Cybersecurity)</h3>
        <p>Design a tool that evaluates the strength of user passwords.</p>
        <a href="cybersecurity.php" class="btn">🔐 Try Now</a>
      </div>
      <div class="practice-card">
        <h3>Fitness Tracker App (Mobile Dev)</h3>
        <p>Build an Android/iOS app to track daily fitness activities.</p>
        <a href="Mobile dev.php" class="btn">📱 Try Now</a>
      </div>
    </div>
    <br><br>
    <a href="#" class="btn">✨ View All Practice Problems</a>
  </section>
  <!-- Footer -->
  <footer>
    <p>© 2025 Hackathon Hub</p>
    <p>
      <a href="#">Privacy Policy</a> | 
      <a href="#">Terms of Service</a> | 
      <a href="#">Contact Us</a> | 
      <a href="#">FAQs</a>
    </p>
  </footer>
</body>
</html>
