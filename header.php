<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Header</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 30px;
      height: 80px;
      position: sticky;
      top: 0;
      background-color: white;
      box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
      z-index: 999;
    }

    #logo img {
      height: 45px;
      width: auto;
      object-fit: contain;
    }

    #navigation {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1;
    }

    #navigation ul {
      display: flex;
      gap: 10px;
      align-items: center;
      background: white;
      border-radius: 100px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 5px 10px;
    }

    #navigation ul li {
      list-style: none;
    }

    #navigation ul li a {
      text-decoration: none;
      padding: 10px 20px;
      color: black;
      font-size: 15px;
      display: block;
    }

    #navigation ul li a:hover,
    #navigation ul li a.active {
      background-color: #3498DB;
      color: white;
      border-radius: 100px;
    }

    #loginbutton {
      background-color: #3498DB;
      padding: 10px 30px;
      color: white;
      border: none;
      border-radius: 100px;
      font-size: 15px;
      margin-left: 15px;
      cursor: pointer;
    }

    #hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      justify-content: center;
      align-items: center;
      width: 30px;
      height: 25px;
      position: relative;
      z-index: 999;
    }

    #hamburger div {
      width: 30px;
      height: 3px;
      background-color: #333;
      border-radius: 5px;
      transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
      margin: 2px 0;
    }

    #hamburger.open div:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }

    #hamburger.open div:nth-child(2) {
      opacity: 0;
    }

    #hamburger.open div:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    /* Responsive Design */
    @media (max-width: 1065px) {
      #navigation {
        position: absolute;
        top: 80px;
        right: 0;
        background: white;
        width: 100%;
        display: none;
        flex-direction: column;
        align-items: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        z-index: 998;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
      }

      #navigation.active {
        display: flex;
        transform: translateX(0);
      }

      #navigation ul {
        flex-direction: column;
        width: 100%;
        border-radius: 0;
        box-shadow: none;
      }

      #navigation ul li {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #eee;
      }

      /* Hover and Active effect for Hamburger menu links */
      #navigation.active ul li a:hover,
      #navigation.active ul li a.active {
        background-color: #3498DB;
        color: white;
        border-radius: 100px;
      }

      #loginbutton {
        margin: 10px 0;
      }

      #hamburger {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <header>
    <div id="logo">
      <img src="images/logo.png" alt="logo">
    </div>

    <div id="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <div id="navigation">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Rate Calculator</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Industries</a></li>
      </ul>
    </div>

    <button id="loginbutton">Login</button>
  </header>

  <script>
    function toggleMenu() {
      const nav = document.getElementById('navigation');
      const hamburger = document.getElementById('hamburger');
      nav.classList.toggle('active');
      hamburger.classList.toggle('open');
    }

    function moveLoginButton() {
      const nav = document.getElementById('navigation');
      const btn = document.getElementById('loginbutton');
      const header = document.querySelector('header');
  
      if (window.innerWidth <= 1065) {
        if (!nav.contains(btn)) {
          nav.appendChild(btn);
        }
      } else {
        if (!header.contains(btn)) {
          header.appendChild(btn);
        }
      }
    }
  
    // Initial check
    moveLoginButton();
  
    // Run when window resizes
    window.addEventListener('resize', moveLoginButton);
  </script>

</body>
</html>
