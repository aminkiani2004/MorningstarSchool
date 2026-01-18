<?php
// ===== Demo data (بعداً از دیتابیس میاد) =====
$students = [
  ["name"=>"Ella Parker",   "id"=>"98738", "class"=>"A1", "parent"=>"John Parker",   "phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Ethan Davis",   "id"=>"45683", "class"=>"A2", "parent"=>"Mia Davis",     "phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Noah Peterson", "id"=>"56765", "class"=>"A2", "parent"=>"Liam Peterson", "phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Ava Mitchell",  "id"=>"85833", "class"=>"A1", "parent"=>"Emma Mitchell", "phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Liam Carter",   "id"=>"45842", "class"=>"A1", "parent"=>"Noah Carter",   "phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Emma Collins",  "id"=>"23947", "class"=>"A3", "parent"=>"Olivia Collins","phone"=>"0612345678", "avatar"=>""],
  ["name"=>"Lucas Warren",  "id"=>"34567", "class"=>"A2", "parent"=>"Sophia Warren", "phone"=>"0612345678", "avatar"=>""],
];

// ===== Search (name or id) ===== 
$q = isset($_GET['q']) ? trim($_GET['q']) : "";
if ($q !== "") {
  $students = array_values(array_filter($students, function($s) use ($q){
    $hay = strtolower($s["name"]." ".$s["id"]);
    return str_contains($hay, strtolower($q));
  }));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Students Portal</title>

  <!-- Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <link rel="stylesheet" href="students.css" />
</head>
<body>

<div class="layout">

  <!-- ===== Sidebar ===== -->
  <aside class="sidebar">
    <div class="side-top">
      <div class="side-logo">SMS</div>
      <div class="side-sub">Private page</div>
    </div>

    <nav class="side-nav">
      <a class="side-link" href="studentportal.php"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
      <a class="side-link is-active" href="#"><i class="fa-solid fa-book-open"></i><span>Students</span></a>
      <a class="side-link" href="#"><i class="fa-solid fa-chalkboard-user"></i><span>Teachers</span></a>
      <a class="side-link" href="#"><i class="fa-solid fa-people-group"></i><span>Staffs</span></a>
      <a class="side-link" href="#"><i class="fa-solid fa-sack-dollar"></i><span>Payments</span></a>
      <a class="side-link" href="#"><i class="fa-solid fa-share-nodes"></i><span>Class</span></a>
    </nav>

    <a class="side-back" href="studentportal.php"><i class="fa-solid fa-arrow-left"></i> Back</a>
  </aside>

  <!-- ===== Main ===== -->
  <main class="main">

    <!-- Top header bar -->
    <header class="page-head">
      <div class="page-title">
        <i class="fa-solid fa-book-open"></i>
        <h1>Students Portal</h1>
      </div>

      <div class="page-actions">
        <a class="btn-add" href="add_more.php">
          <span>Add more</span>
          <i class="fa-solid fa-plus"></i>
        </a>

        <form class="search" method="GET" action="">
          <input type="text" name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Search by name or ID" />
          <button type="submit" aria-label="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>
    </header>

    <!-- Table card -->
    <section class="card">
      <div class="table-wrap">
        <table class="table">
          <thead>
            <tr>
              <th>Student</th>
              <th>ID</th>
              <th>Class</th>
              <th>Parent Name</th>
              <th>Parent Phone</th>
              <th class="th-actions">Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if (count($students) === 0): ?>
            <tr><td class="empty" colspan="6">No students found.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($students as $s): ?>
              <tr class="row">
                <td class="student-cell">
                  <div class="avatar" aria-hidden="true"></div>
                  <div class="student-meta">
                    <div class="student-name"><?= htmlspecialchars($s["name"]) ?></div>
                  </div>
                </td>

                <td class="mono"><?= htmlspecialchars($s["id"]) ?></td>
                <td><span class="pill"><?= htmlspecialchars($s["class"]) ?></span></td>
                <td><?= htmlspecialchars($s["parent"]) ?></td>
                <td class="mono"><?= htmlspecialchars($s["phone"]) ?></td>

                <td class="actions">
                  <!-- این لینک‌ها بعداً می‌رن به PHP واقعی برای DB -->
                  <a class="icon-btn edit" href="student_edit.php?id=<?= urlencode($s["id"]) ?>" aria-label="Edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <a class="icon-btn del" href="student_delete.php?id=<?= urlencode($s["id"]) ?>" aria-label="Delete">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
          </tbody>

        </table>
      </div>
    </section>

    <!-- Pagination (فقط ظاهر) -->
    <nav class="pagination" aria-label="Pagination">
      <a class="page" href="#">‹</a>
      <a class="page is-current" href="#">1</a>
      <a class="page" href="#">2</a>
      <a class="page" href="#">3</a>
      <span class="dots">…</span>
      <a class="page" href="#">8</a>
      <a class="page" href="#">›</a>
    </nav>

  </main>
</div>

</body>
</html>