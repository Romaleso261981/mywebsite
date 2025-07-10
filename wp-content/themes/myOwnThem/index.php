<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume - Mike</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    background: #f7f7f7;
    margin: 0;
    padding: 20px;
  }

  .container {
    max-width: 800px;
    margin: auto;
    background: white;
    border-radius: 10px;
    padding: 20px;
  }

  .header {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .header img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
  }

  .header-text h1 {
    margin: 0;
    font-size: 28px;
  }

  .header-text p {
    font-size: 12px;
    color: #555;
  }

  .section {
    margin-top: 20px;
  }

  .section-title {
    font-weight: bold;
    color: #5555cc;
    margin-bottom: 10px;
  }

  .contacts {
    background: #8b77ed;
    color: white;
    padding: 10px;
    border-radius: 5px;
  }

  .contacts p {
    margin: 5px 0;
  }

  a {
    color: #5555cc;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  ul {
    padding-left: 20px;
    margin: 0;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <img src="https://via.placeholder.com/120" alt="Mike Photo">
      <div class="header-text">
        <h1>Hello, I’m Mike,<br>Web Developer</h1>
        <p>I specialize in building user-friendly websites and custom WordPress solutions.
          With a keen eye for detail and a passion for problem-solving, I strive to create
          seamless and efficient digital experiences.</p>
      </div>
    </div>

    <div class="section">
      <div class="contacts">
        <p><strong>Phone:</strong> +1 (555) 123-4567</p>
        <p><strong>Email:</strong> mike@gmail.com</p>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Projects</div>
      <ol>
        <li><a href="#">https://mikeivanov.com</a> — HTML5, CSS3, JavaScript</li>
        <li><a href="#">https://mikeivanov.com</a> — React.js, Node.js, MongoDB</li>
        <li><a href="#">https://mikeivanov.com</a> — HTML5, CSS3, JavaScript</li>
      </ol>
    </div>

    <div class="section">
      <div class="section-title">Soft Skills</div>
      <ul>
        <li>Problem-Solving</li>
        <li>Teamwork</li>
        <li>Communication</li>
        <li>Adaptability</li>
        <li>Time Management</li>
        <li>Attention to Detail</li>
      </ul>
    </div>

    <div class="section">
      <div class="section-title">Hard Skills</div>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>JavaScript</li>
        <li>React.js</li>
        <li>Node.js</li>
        <li>Git</li>
      </ul>
    </div>
  </div>
</body>

</html>