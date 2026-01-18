<?php
// این صفحه فعلاً فقط UI هست.
// بعداً این فرم رو به save_student.php وصل می‌کنی و دیتابیس رو می‌زنی.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Student</title>

  <!-- Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <link rel="stylesheet" href="add_more.css" />
</head>
<body>

  <main class="page">
    <section class="card">

      <header class="head">
        <div class="title">
          <i class="fa-solid fa-user-plus"></i>
          <h1>Add Student</h1>
        </div>

        <a class="back" href="students.php">
          <i class="fa-solid fa-arrow-left"></i>
          Back
        </a>
      </header>

      <form class="form" action="save_student.php" method="POST" enctype="multipart/form-data">
        <!-- Upload -->
        <div class="upload">
          <div class="avatar-preview" aria-hidden="true">
            <i class="fa-regular fa-image"></i>
          </div>

          <div class="upload-meta">
            <p class="upload-title">Student photo</p>
            <p class="upload-sub">PNG/JPG • max 2MB</p>

            <label class="upload-btn">
              <input type="file" name="photo" accept="image/*" />
              <i class="fa-solid fa-upload"></i>
              Upload photo
            </label>
          </div>
        </div>

        <!-- Fields -->
        <div class="grid">
          <label class="field">
            <span>Student Name</span>
            <input type="text" name="student_name" placeholder="e.g. Ella Parker" required>
          </label>

          <label class="field">
            <span>Class</span>
            <input type="text" name="class" placeholder="e.g. A1" required>
          </label>

          <label class="field full">
            <span>Address</span>
            <input type="text" name="address" placeholder="e.g. 1234 AA" required>
          </label>

          <label class="field">
            <span>Parent Name</span>
            <input type="text" name="parent_name" placeholder="e.g. John Parker" required>
          </label>

          <label class="field">
            <span>Parent Phone</span>
            <input type="tel" name="parent_phone" placeholder="e.g. 0612345678" required>
          </label>
        </div>

        <!-- Actions -->
        <div class="actions">
          <button class="btn primary" type="submit">
            <i class="fa-solid fa-floppy-disk"></i>
            Save Student
          </button>

          <a class="btn ghost" href="students.php">
            Cancel
          </a>
        </div>
      </form>

    </section>
  </main>

</body>
</html>