<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice | Hackathon Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      color: #333;
    }

    header, footer {
      background: linear-gradient(90deg, #0073e6, #00c6ff);
      color: white;
      padding: 20px 0;
      text-align: center;
      font-size: 1.2rem;
      font-weight: 600;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffdd57;
    }

    .section {
      padding: 60px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 2.5rem;
      margin-bottom: 15px;
      background: linear-gradient(90deg, #ff4b2b, #ff416c);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .section p {
      font-size: 1.1rem;
      margin-bottom: 40px;
      color: #555;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .category {
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .category:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .category img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-bottom: 4px solid #0073e6;
    }

    .category h3 {
      font-size: 1.5rem;
      margin: 15px 0;
      color: #0073e6;
    }

    .category p {
      color: #555;
      padding: 0 15px;
      margin-bottom: 15px;
    }

    iframe {
      width: 100%;
      height: 220px;
      border: none;
      border-top: 1px solid #ddd;
    }

    footer p {
      margin: 0;
      font-size: 0.95rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .section h2 {
        font-size: 2rem;
      }
      .category h3 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>
  <!-- Domains -->
  <section id="domains" class="section">
    <h2>Explore Different Domains</h2>
    <p>Discover hackathons across diverse technology domains and expand your skillset.</p>

    <div class="categories">
      <div class="category">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRept5QK5jzjf-Pg-ncLXXNNmFyhf1Cez5y5w&s" alt="AI & Machine Learning">
        <h3>AI & Machine Learning</h3>
        <p>Challenges focused on AI and ML technologies.</p>
        <iframe src="https://www.youtube.com/embed/qYNweeDHiyU?si=0DzYRXwjsqgTY9ry" allowfullscreen></iframe>
      </div>
      <div class="category">
        <img src="https://img1.wsimg.com/isteam/ip/5d0888b8-f3bc-4e47-91c6-5e2d2262f57b/Circuit%20Board%20Instagram%20Post%20(3).png" alt="Web Development">
        <h3>Web Development</h3>
        <p>Create websites and apps using modern tools.</p>
        <iframe src="https://www.youtube.com/embed/4isyq1u-PxU?si=6W4DHJi0TNrSzIZp" allowfullscreen></iframe>
      </div>
      <div class="category">
        <img src="https://d8it4huxumps7.cloudfront.net/uploads/images/opportunity/mobile_banner/65ac2450e3ff1_cyberthon-a-cybersecurity-hackathon.png?d=700x400" alt="Cybersecurity">
        <h3>Cybersecurity</h3>
        <p>Test your skills in ethical hacking and defense.</p>
        <iframe src="https://www.youtube.com/embed/qVET1vD3NtQ?si=KA5_BsoiMUKaefwy" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <footer>
    <p>&copy; 2025 Hackathon Hub. All Rights Reserved.</p>
  </footer>
</body>
</html>
