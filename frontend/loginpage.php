<?php
session_start();
// t

require __DIR__ . "/includes/db.php"; 

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "" || $password === "") {
        $error = "Please fill in all fields.";
    } elseif ($password !== "Qwerty12345") {
        // پسورد مشترک
        $error = "Invalid username or password.";
    } else {
        try {
            $stmt = $pdo->prepare("
                SELECT User_ID, AD_Username, First_Name, Last_Name, Role, IsActive
                FROM user
                WHERE AD_Username = ?
                LIMIT 1
            ");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                $error = "Invalid username or password.";
            } elseif ((int)$user["IsActive"] !== 1) {
                $error = "Your account is disabled.";
            } else {
                // ✅ لاگین موفق
                $_SESSION["user_id"] = $user["User_ID"];
                $_SESSION["username"] = $user["AD_Username"];
                $_SESSION["role"] = $user["Role"];
                $_SESSION["full_name"] = $user["First_Name"] . " " . $user["Last_Name"];

                header("Location: studentportal.php");
                exit;
            }
        } catch (Throwable $e) {
            // برای دیباگ؛ بعداً می‌تونی خاموشش کنی
            $error = "SERVER ERROR: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login | Morningstar</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="login.css" />
</head>
<body>

  <main class="login-page">
    <section class="login-card" aria-label="Admin Login">
      <div class="card-glow" aria-hidden="true"></div>

      <header class="login-header">
        <?php if ($error): ?>
          <p style="color:#ff6b6b; text-align:center; margin-bottom:12px;">
            <?= htmlspecialchars($error) ?>
          </p>
        <?php endif; ?>

        <p class="badge"><i class="fa-solid fa-shield-halved"></i> Secure Area</p>
        <h1 class="title">ADMIN LOGIN</h1>
        <p class="subtitle">Sign in to manage the school portal</p>
      </header>

      <form class="login-form" method="POST">
        <label class="field">
          <span class="field-label">Username</span>
          <div class="input-wrap">
            <i class="fa-solid fa-user input-icon" aria-hidden="true"></i>
            <input class="input" type="text" name="username" placeholder="e.g. kevin.bosman@morningstar.local" required />
          </div>
        </label>

        <label class="field">
          <span class="field-label">Password</span>
          <div class="input-wrap">
            <i class="fa-solid fa-lock input-icon" aria-hidden="true"></i>
            <input class="input" type="password" name="password" placeholder="Common password" required />
          </div>
        </label>

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