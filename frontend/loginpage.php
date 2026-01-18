<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login | Morningstar</title>

  <!-- Inter Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <link rel="stylesheet" href="login.css" />
</head>
<body>

  <main class="login-page">
    <section class="login-card" aria-label="Admin Login">
      <div class="card-glow" aria-hidden="true"></div>

      <header class="login-header">
        <p class="badge"><i class="fa-solid fa-shield-halved"></i> Secure Area</p>
        <h1 class="title">ADMIN LOGIN</h1>
        <p class="subtitle">Sign in to manage the school portal</p>
      </header>

      <!-- بعداً راحت action رو می‌دی به PHP -->
      <form class="login-form" action="#" method="POST">
        <label class="field">
          <span class="field-label">Username</span>
          <div class="input-wrap">
            <i class="fa-solid fa-user input-icon" aria-hidden="true"></i>
            <input class="input" type="text" name="username" placeholder="Enter your username" required />
          </div>
        </label>

        <label class="field">
          <span class="field-label">Password</span>
          <div class="input-wrap">
            <i class="fa-solid fa-lock input-icon" aria-hidden="true"></i>
            <input class="input" type="password" name="password" placeholder="Enter your password" required />
          </div>
        </label>

        <div class="row">
          <label class="remember">
            <input type="checkbox" name="remember" />
            <span>Remember me</span>
          </label>

          <a class="link" href="#">Lost password?</a>
        </div>

        <button class="btn" type="submit">
          <span>LOGIN</span>
          <i class="fa-solid fa-arrow-right"></i>
        </button>

        <p class="hint">
          Back to <a class="link" href="homepage.php">Home</a>
        </p>
      </form>
    </section>
  </main>

</body>
</html>