<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>School Management System | Portal</title>

  <!-- Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <link rel="stylesheet" href="portal.css" />
</head>
<body>

  <!-- ===== Top Bar ===== -->
  <header class="topbar">
    <div class="wrap topbar-inner">
      <a class="home" href="homepage.php" aria-label="Home">
        <i class="fa-solid fa-house"></i>
      </a>
      <h1 class="top-title">School Management System</h1>
    </div>
  </header>

  <main class="wrap">

    <!-- ===== Stats ===== -->
    <section class="stats" aria-label="Statistics">
      <article class="stat-card">
        <div class="stat-left">
          <p class="stat-number">73</p>
          <p class="stat-label"><i class="fa-solid fa-user-graduate"></i> Total Student</p>
        </div>
      </article>

      <article class="stat-card">
        <div class="stat-left">
          <p class="stat-number">12</p>
          <p class="stat-label"><i class="fa-solid fa-chalkboard-user"></i> Total Teachers</p>
        </div>
      </article>

      <article class="stat-card">
        <div class="stat-left">
          <p class="stat-number">6</p>
          <p class="stat-label"><i class="fa-solid fa-users"></i> Total Staffs</p>
        </div>
      </article>
    </section>

    <!-- ===== Modules Grid ===== -->
    <section class="modules" aria-label="Portal Modules">

      <!-- ردیف 1 -->
      <a class="module" href="students.php">
        <i class="fa-solid fa-book-open module-icon"></i>
        <span class="module-text">Students</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-chalkboard-user module-icon"></i>
        <span class="module-text">Teachers</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-people-group module-icon"></i>
        <span class="module-text">Staffs</span>
      </a>

      <a class="module" href="#">
        <i class="fa-regular fa-file-lines module-icon"></i>
        <span class="module-text">Files</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-sack-dollar module-icon"></i>
        <span class="module-text">Payments</span>
      </a>

      <!-- ردیف 2 -->
      <a class="module" href="#">
        <i class="fa-solid fa-bus module-icon"></i>
        <span class="module-text">Transportation</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-clipboard-check module-icon"></i>
        <span class="module-text">Attendance</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-books module-icon"></i>
        <span class="module-text">Library</span>
      </a>

      <a class="module" href="#">
        <i class="fa-regular fa-star module-icon"></i>
        <span class="module-text">Exams Marks</span>
      </a>

      <a class="module" href="#">
        <i class="fa-solid fa-share-nodes module-icon"></i>
        <span class="module-text">Class</span>
      </a>

      <!-- ردیف 3 -->
      <a class="module" href="#">
        <i class="fa-regular fa-clipboard module-icon"></i>
        <span class="module-text">Subjects</span>
      </a>

    </section>

  </main>

</body>
</html>