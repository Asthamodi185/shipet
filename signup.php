<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipet</title>





    <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    
    body {
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}


.center-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}


    .form-box {
      background: white;
      border-radius: 10px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 420px;
      overflow: hidden;
    }

    .tab-header {
      display: flex;
    }

    .tab-btn {
      width: 50%;
      padding: 14px 0;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      border: none;
      background: #fff;
      color: #333;
      transition: all 0.3s ease;
    }

    .tab-btn.active {
      background: #2196f3;
      color: #fff;
    }

    form {
      display: none;
      flex-direction: column;
      padding: 30px;
    }

    form.active {
      display: flex;
    }

    form h2 {
      text-align: center;
      margin-bottom: 5px;
      font-size: 22px;
      font-weight: 700;
    }

    form p {
      text-align: center;
      margin-bottom: 25px;
      font-size: 14px;
      color: #555;
    }

    label {
      font-size: 14px;
      margin-bottom: 6px;
      color: #333;
    }

    input {
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 18px;
      font-size: 14px;
      width: 100%;
    }

    .input-group {
      position: relative;
    }

    .input-group .eye-icon {
      position: absolute;
      right: 12px;
      top: 12px;
      cursor: pointer;
      font-size: 16px;
      user-select: none;
    }

    button.submit-btn {
      padding: 14px;
      background: #2196f3;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button.submit-btn:hover {
      background: #0b7dda;
    }
  </style>
</head>
<body>

<?php 
include "header.php"; 
?> 

<div class="center-container">
  <div class="form-box">
    <div class="tab-header">
      <button class="tab-btn active" id="tab-register">Register</button>
      <button class="tab-btn" id="tab-login">LogIn</button>
    </div>

    <!-- Register Form -->
    <form id="form-register" class="active">
      <h2>Get Started Now</h2>
      <p>Create your free account to continue</p>

      <label for="reg-name">Full Name</label>
      <input type="text" id="reg-name" placeholder="Enter your name" required>

      <label for="reg-email">Email Address</label>
      <input type="email" id="reg-email" placeholder="Enter your Email" required>

      <label for="reg-password">Password</label>
      <div class="input-group">
        <input type="password" id="reg-password" placeholder="Enter your Password" class="password-field" required>
        <span class="eye-icon">👁️</span>
      </div>

      <button class="submit-btn" type="submit">Register</button>
    </form>

    <!-- Login Form -->
    <form id="form-login">
      <h2>Welcome Back</h2>
      <p>Log in with your credentials</p>

      <label for="login-email">Email Address</label>
      <input type="email" id="login-email" placeholder="Enter your Email" required>

      <label for="login-password">Password</label>
      <div class="input-group">
        <input type="password" id="login-password" placeholder="Enter your Password" class="password-field" required>
        <span class="eye-icon">👁️</span>
      </div>

      <button class="submit-btn" type="submit">Log In</button>
    </form>
  </div>
</div>

<style>
  .center-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    padding: 20px;
    background: linear-gradient(to right, #e3f2fd, #ffffff);
  }

  .form-box {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 420px;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .tab-header {
    display: flex;
    border-bottom: 1px solid #ddd;
  }

  .tab-btn {
    flex: 1;
    padding: 16px 0;
    font-size: 16px;
    font-weight: 600;
    background: #f9f9f9;
    color: #444;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .tab-btn.active {
    background: #2196f3;
    color: white;
  }

  form {
    display: none;
    flex-direction: column;
    padding: 30px;
    animation: fadeIn 0.3s ease-in-out;
  }

  form.active {
    display: flex;
  }

  form h2 {
    text-align: center;
    font-size: 24px;
    color: #2196f3;
    margin-bottom: 10px;
  }

  form p {
    text-align: center;
    font-size: 14px;
    color: #555;
    margin-bottom: 25px;
  }

  label {
    font-size: 14px;
    margin-bottom: 5px;
    color: #333;
  }

  input {
    padding: 12px 14px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    margin-bottom: 18px;
    transition: border 0.3s;
  }

  input:focus {
    border-color: #2196f3;
    outline: none;
    background-color: #f1f9ff;
  }

  .input-group {
    position: relative;
  }

  .eye-icon {
    position: absolute;
    right: 14px;
    top: 12px;
    font-size: 18px;
    cursor: pointer;
    user-select: none;
    transition: transform 0.2s ease;
  }

  .eye-icon:hover {
    transform: scale(1.1);
  }

  .submit-btn {
    padding: 14px;
    background: #2196f3;
    color: white;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 10px;
    transition: background 0.3s ease;
  }

  .submit-btn:hover {
    background: #1976d2;
  }

  @keyframes fadeIn {
    from {opacity: 0; transform: translateY(10px);}
    to {opacity: 1; transform: translateY(0);}
  }
</style>
<?php 
include "footer.php"; 
?> 

<script>
  // Tab Switch Logic
  const tabRegister = document.getElementById('tab-register');
  const tabLogin = document.getElementById('tab-login');
  const formRegister = document.getElementById('form-register');
  const formLogin = document.getElementById('form-login');

  tabRegister.addEventListener('click', () => {
    tabRegister.classList.add('active');
    tabLogin.classList.remove('active');
    formRegister.classList.add('active');
    formLogin.classList.remove('active');
  });

  tabLogin.addEventListener('click', () => {
    tabLogin.classList.add('active');
    tabRegister.classList.remove('active');
    formLogin.classList.add('active');
    formRegister.classList.remove('active');
  });

  // Toggle Password Visibility
  document.querySelectorAll('.eye-icon').forEach(icon => {
    icon.addEventListener('click', () => {
      const input = icon.previousElementSibling;
      if (input.type === "password") {
        input.type = "text";
        icon.textContent = '🙈';
      } else {
        input.type = "password";
        icon.textContent = '👁️';
      }
    });
  });
</script>


</body>
</html>
