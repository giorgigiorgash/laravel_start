<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> <!--  fixed socialmedia icons-->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    header {
      background-color: rgb(37,37,37);
      width: 100%;
      padding: 1rem 0 1rem 0;
    }
    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .title {
      color: white;
      font-size: 24px; 
      font-family: 'Open Sans',sans-serif !important;
      font-weight: bold;
      text-decoration: none;
    }
    nav {
      display: flex;
      gap: 30px; /* space between nav items */
      margin-left: 2rem;
      margin-right: 2rem;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-family: 'Open Sans',sans-serif !important;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 1px;
    }
    nav a:hover {
      opacity: 0.8;
    }
    
    .social-icons {
      display: flex;
      gap: 15px;
   
    }
    .social-icons a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      &:hover{
        opacity: 0.8;
      }
    }
    .right-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 4rem;
    }
  </style>
</head>
<body>

<header>
  <div class="header-container">
    <a href="#" class="title">MEGAPACK</a>
    <div class="right-container">
    <nav class="nav">
      <a href="#" class="features">FEATURES</a>
      <a href="#" class="dropdown">DROPDOWN</a>
      <a href="#" class="contact">CONTACT</a>
    </nav>
    <div class="social-icons">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>   
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  </div>
</header>

</body>
</html>
