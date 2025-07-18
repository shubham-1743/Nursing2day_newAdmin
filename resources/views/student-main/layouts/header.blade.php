<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
    }

    .topbar {
      background: #024b86;
      color: white;
      padding: 5px 20px;
      font-size: 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .topbar a { color: white; margin-left: 15px; text-decoration: none; }

    .header {
      background: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
    }

    .header img { height: 40px; }

    .nav { display: flex; gap: 20px; }

    .nav a {
      text-decoration: none;
      color: #024b86;
      font-weight: bold;
    }

    .container {
      width: 100%;
      max-width: 500px;
      margin: 40px auto;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .tab { display: flex; }

    .tab button {
      flex: 1;
      padding: 15px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      background: #0099ff;
      color: white;
    }

    .tab button.active { background: #024b86; }

    .tabcontent { display: none; padding: 20px; }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="file"] { padding: 5px; }

    button.submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #0066cc;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    button.submit-btn:hover { background-color: #004a99; }

    a {
      color: #0066cc;
      text-decoration: none;
      font-size: 14px;
    }

    a:hover { text-decoration: underline; }

    .footer {
      background: #024b86;
      color: white;
      padding: 30px 20px;
      margin-top: 40px;
    }

    .footer .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .footer .col {
      flex: 1 1 220px;
      margin: 10px;
    }

    .footer h4 {
      margin-bottom: 10px;
      border-bottom: 2px solid white;
      display: inline-block;
      padding-bottom: 5px;
    }

    .footer p, .footer a {
      font-size: 14px;
      color: white;
    }

    .footer a:hover { text-decoration: underline; }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
      font-size: 13px;
    }

    @media(max-width: 600px) {
      .nav { flex-direction: column; gap: 10px; }
    }
  </style>
</head>

<body>
  <div class="topbar">
    <div>📞 9529488883 | ✉ info@nursing2day.com</div>
    <div><a href="#">Follow on Facebook</a></div>
  </div>

  <div class="header">
    <img src="https://nursing2day.com/assets/logo.png" alt="Nursing2Day Logo">
    <div class="nav">
      <a href="#">🏠 Home</a>
      <a href="#">About</a>
      <a href="#">Packages</a>
      <a href="#">Register/Login</a>
      <a href="#">🗑 Delete Account Request</a>
    </div>
  </div>

  @yield('content')  <!-- 👈 Here page content will be injected -->

  @include('student-main.layouts.footer')

</body>
</html>
