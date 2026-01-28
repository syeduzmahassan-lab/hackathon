<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hackathon Leaderboard</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1f1c2c, #928dab);
      color: #fff;
      line-height: 1.6;
    }

    header {
      text-align: center;
      padding: 3rem 1rem;
      background: linear-gradient(90deg, #ff6a00, #ee0979);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    header h1 {
      font-size: 2.8rem;
      margin-bottom: 0.5rem;
      letter-spacing: 2px;
      color: #fff;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    .leaderboard {
      max-width: 950px;
      margin: 2rem auto;
      padding: 1rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
    }

    th, td {
      padding: 1rem;
      text-align: center;
    }

    th {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      color: #fff;
      font-size: 1.1rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    tr:nth-child(even) {
      background: rgba(255,255,255,0.05);
    }

    tr:hover {
      background: rgba(255, 255, 255, 0.15);
      transition: 0.3s;
    }

    /* Highlight top 3 */
    .rank-1 {
      background: linear-gradient(90deg, #FFD700, #FFEF8D);
      color: #000;
      font-weight: bold;
    }
    .rank-2 {
      background: linear-gradient(90deg, #C0C0C0, #E0E0E0);
      color: #000;
      font-weight: bold;
    }
    .rank-3 {
      background: linear-gradient(90deg, #CD7F32, #E6A57E);
      color: #000;
      font-weight: bold;
    }

    .emoji {
      font-size: 1.4rem;
      margin-right: 8px;
    }

    .btn {
      display: inline-block;
      margin: 2rem auto;
      text-decoration: none;
      padding: 0.9rem 1.8rem;
      background: linear-gradient(90deg, #ff512f, #dd2476);
      color: #fff;
      border-radius: 30px;
      font-weight: bold;
      transition: 0.3s;
      font-size: 1.1rem;
    }

    .btn:hover {
      background: linear-gradient(90deg, #dd2476, #ff512f);
      box-shadow: 0 5px 15px rgba(0,0,0,0.4);
    }

    @media(max-width: 768px) {
      th, td {
        padding: 0.7rem;
        font-size: 0.9rem;
      }
      header h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>🏆 Hackathon 2025 Leaderboard</h1>
    <p>Celebrating Innovation, Creativity & Teamwork</p>
  </header>
  <section class="leaderboard">
    <table>
      <thead>
        <tr>
          <th>Rank</th>
          <th>Team / Participant</th>
          <th>Project</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody>
        <tr class="rank-1">
          <td><span class="emoji">🥇</span>1</td>
          <td>Team Innovators</td>
          <td>AI Health Assistant</td>
          <td>980</td>
        </tr>
        <tr class="rank-2">
          <td><span class="emoji">🥈</span>2</td>
          <td>Code Masters</td>
          <td>Smart City Tracker</td>
          <td>940</td>
        </tr>
        <tr class="rank-3">
          <td><span class="emoji">🥉</span>3</td>
          <td>Tech Titans</td>
          <td>Green Energy IoT</td>
          <td>910</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Byte Busters</td>
          <td>Blockchain Voting</td>
          <td>890</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Hack Ninjas</td>
          <td>EduTech AR</td>
          <td>870</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Cyber Squad</td>
          <td>SecurePay System</td>
          <td>850</td>
        </tr>
      </tbody>
    </table>
    <div style="text-align:center;">
      <a href="Hackathon.php" class="btn">⬅ Back to Home</a>
    </div>
  </section>
</body>
</html>
