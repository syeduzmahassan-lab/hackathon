<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hackathon Notifications</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      line-height: 1.6;
    }

    header {
      text-align: center;
      padding: 3rem 1rem;
      background: linear-gradient(90deg, #ff512f, #dd2476);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      color: #fff;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    .notifications {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1rem;
      display: grid;
      gap: 1.5rem;
    }

    .card {
      background: rgba(255,255,255,0.1);
      padding: 1.5rem;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
      transition: 0.3s;
      position: relative;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }

    .icon {
      font-size: 1.8rem;
      margin-right: 10px;
    }

    .title {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
    }

    .message {
      font-size: 1rem;
      opacity: 0.9;
      margin-bottom: 0.8rem;
    }

    .time {
      font-size: 0.85rem;
      opacity: 0.7;
    }

    .btn {
      display: inline-block;
      margin: 2rem auto;
      text-decoration: none;
      padding: 0.9rem 1.8rem;
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      color: #fff;
      border-radius: 30px;
      font-weight: bold;
      transition: 0.3s;
      font-size: 1.1rem;
    }

    .btn:hover {
      background: linear-gradient(90deg, #0072ff, #00c6ff);
      box-shadow: 0 5px 15px rgba(0,0,0,0.4);
    }

    @media(max-width: 768px) {
      .title {
        font-size: 1.1rem;
      }
      .message {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>🔔 Hackathon Notifications</h1>
    <p>Stay updated with the latest announcements & updates</p>
  </header>
  <section class="notifications">
    <div class="card">
      <div class="title"><span class="icon">📢</span>Opening Ceremony</div>
      <div class="message">Hackathon 2025 kicks off today at 10:00 AM! Don’t miss the live opening session.</div>
      <div class="time">Posted on: Aug 30, 2025</div>
    </div>
    <div class="card">
      <div class="title"><span class="icon">📅</span>Submission Deadline</div>
      <div class="message">Final project submissions are due by 11:59 PM tomorrow. Make sure you submit before the deadline.</div>
      <div class="time">Posted on: Aug 29, 2025</div>
    </div>
    <div class="card">
      <div class="title"><span class="icon">🏆</span>Winners Announcement</div>
      <div class="message">The winners will be announced during the Closing Ceremony on Sept 2nd, 2025. Stay tuned!</div>
      <div class="time">Posted on: Sep 3, 2025</div>
    </div>
    <div class="card">
      <div class="title"><span class="icon">⚡</span>Workshop Alert</div>
      <div class="message">Join the “AI & Innovation” workshop today at 4:00 PM in Hall B.</div>
      <div class="time">Posted on: Dec 14, 2025</div>
    </div>
  </section>
  <div style="text-align:center;">
    <a href="Hackathon.php" class="btn">⬅ Back to Home</a>
  </div>
</body>
</html>
