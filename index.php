<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  </head>
  <body>
    <div class="login">
      <h1>Logowanie</h1>
      <form method="post">
        <div class="input">
          <input type="text" name="login" placeholder="login" required>
        </div>
        <div class="input">
          <input type="text" name="password" placeholder="hasło" required>
        </div>
        <input type="submit" value="Zaloguj się"> <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($_POST["login"] == "admin" && $_POST["password"] == "test")
            {
                echo "<a>Zalogowano</a>";
            }
            else 
            {
                echo "<a>Błędne dane logowania</a>";
            }
            }
            ?>
      </form>
    </div>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: arial;
        background: linear-gradient(-45deg, #d9d2e9, #9173df, #7957d0, #593ca5);
        background-size: 400% 400%;
        animation: gradient 10s ease infinite;
        height: 100vh;
      }

      @keyframes gradient {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }

      .login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 350px;
        background: #d9d2e9;
        border-radius: 5px;
        text-align: center;
      }

      .login h1 {
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 3px solid silver;
      }

      .login form {
        padding: 0 40px;
        box-sizing: border-box;
      }

      form .input {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
      }

      .input input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
      }

      input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #9f86fd;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        transition: .5s;
      }

      input[type="submit"]:hover {
        background-color: #8e7cc3;
        color: #cec8ef;
        border: solid #674ea7 4px;
        transition: .5s;
        border-radius: 20px;
      }

      form a {
        margin-bottom: 0;
      }
    </style>
  </body>
</html>