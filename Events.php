<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events | Hackathon Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f6d365, #fda085, #84fab0, #8fd3f4);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      color: #333;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    header, footer {
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      padding: 25px 0;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.25);
    }

    header h1 {
      font-size: 2rem;
      letter-spacing: 1px;
      margin: 0;
    }

    .section {
      padding: 70px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: #222;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.15);
    }

    .section p {
      font-size: 1.1rem;
      color: #444;
      margin-bottom: 50px;
    }

    /* Events Grid */
    .events {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 35px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .event {
      background: #fff;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      position: relative;
      overflow: hidden;
      border-top: 6px solid transparent;
    }

    /* Different accent colors for variety */
    .event:nth-child(1) { border-color: #ff512f; }
    .event:nth-child(2) { border-color: #2196f3; }
    .event:nth-child(3) { border-color: #4caf50; }

    .event:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 16px 40px rgba(0,0,0,0.25);
    }

    .event h3 {
      font-size: 1.6rem;
      margin-bottom: 15px;
      font-weight: 700;
    }

    .event:nth-child(1) h3 { color: #ff512f; }
    .event:nth-child(2) h3 { color: #2196f3; }
    .event:nth-child(3) h3 { color: #4caf50; }

    .event p {
      font-size: 1rem;
      margin-bottom: 20px;
      color: #555;
    }

    .btn {
      display: inline-block;
      padding: 12px 22px;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn:hover {
      background: linear-gradient(135deg, #2196f3, #00bcd4);
      transform: scale(1.08);
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
    }

    footer p {
      margin: 8px 0;
      font-size: 0.95rem;
    }

    @media (max-width: 768px) {
      .section h2 {
        font-size: 2rem;
      }
      .event h3 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>🌟 Hackathon Hub</h1>
  </header>

  <section class="section">
    <h2>🚀 Upcoming Yearly Hackathons</h2>
    <p>Be part of innovation & showcase your skills at these vibrant events!</p>
    <div class="events">
      <div class="event">
        <h3>Hackathon 2025: Innovators Challenge</h3>
        <p>📅 Event Date: January 2025</p>
        <a href="Innovators.php" class="btn">Register Now</a>
      </div>
      <div class="event">
        <h3>Hackathon 2025: AI Revolution</h3>
        <p>📅 Event Date: June 2025</p>
        <a href="Ai rev.php" class="btn">Register Now</a>
      </div>
      <div class="event">
        <h3>Hackathon 2025: Cybersecurity Warfare</h3>
        <p>📅 Event Date: December 2025</p>
        <a href="CW.php" class="btn">Register Now</a>
      </div>
    </div>
  </section>
  <footer>
    <p>© 2025 Hackathon Hub. All rights reserved.</p>
  </footer>
</body>
</html>
