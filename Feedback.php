<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hackathon Feedback</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: #333;
    }

    header {
      background: rgba(0, 0, 0, 0.6);
      color: white;
      text-align: center;
      padding: 40px 20px;
      border-bottom: 4px solid #ffcc00;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    .container {
      width: 90%;
      max-width: 800px;
      margin: 40px auto;
      padding: 30px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      font-size: 1.1em;
      font-weight: bold;
      margin-bottom: 8px;
      display: block;
      color: #444;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 12px;
      border: 2px solid #ddd;
      border-radius: 8px;
      font-size: 1em;
      transition: 0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      border-color: #2575fc;
      box-shadow: 0 0 8px rgba(37, 117, 252, 0.3);
      outline: none;
    }

    .form-group textarea {
      min-height: 120px;
      resize: vertical;
    }

    .form-group button {
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      font-size: 1.2em;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.3s ease;
      display: inline-block;
    }

    .form-group button:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(221, 36, 118, 0.4);
    }

    #successMessage {
      display: none;
      margin-top: 20px;
      padding: 15px;
      background: #4caf50;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      animation: fadeIn 0.5s ease-in-out;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      font-size: 0.9rem;
    }

    .footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Hackathon Feedback</h1>
    <p>We appreciate your feedback to help us improve future events!</p>
  </header>
  <div class="container">
    <form id="feedbackForm">
      <div class="form-group">
        <label for="name">Your Name (Optional)</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" />
      </div>
      <div class="form-group">
        <label for="email">Email Address (Optional)</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" />
      </div>
      <div class="form-group">
        <label for="rating">Overall Hackathon Experience</label>
        <select id="rating" name="rating">
          <option value="excellent">🌟 Excellent</option>
          <option value="good">👍 Good</option>
          <option value="average">👌 Average</option>
          <option value="poor">👎 Poor</option>
        </select>
      </div>
      <div class="form-group">
        <label for="comments">What did you like the most?</label>
        <textarea id="comments" name="comments" placeholder="Your feedback here..."></textarea>
      </div>
      <div class="form-group">
        <label for="improvements">How can we improve?</label>
        <textarea id="improvements" name="improvements" placeholder="Your suggestions here..."></textarea>
      </div>
      <div class="form-group">
        <button type="submit">🚀 Submit Feedback</button>
      </div>
    </form>
    <!-- Success Message -->
    <div id="successMessage">✅ Thank you! Your feedback has been submitted successfully.</div>
  </div>
  <footer class="footer">
    <p>&copy; 2025 Hackathon Inc. | All Rights Reserved</p>
  </footer>
  <script>
    document.getElementById("feedbackForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Stop page reload
      // Show success message
      document.getElementById("successMessage").style.display = "block";
      // Optional: Reset form
      document.getElementById("feedbackForm").reset();
      // Auto-hide after 5 seconds
      setTimeout(() => {
        document.getElementById("successMessage").style.display = "none";
      }, 5000);
    });
  </script>
</body>
</html>
