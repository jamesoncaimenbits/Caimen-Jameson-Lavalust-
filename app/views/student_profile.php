<?php
/** @var string $student_id */
/** @var string $name */
/** @var string $course */
/** @var string $year */
/** @var string $section */
/** @var string $email */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
</head>
<body>
    <h1>Student Information</h1>
    <p>Student ID: <?= $student_id ?></p>
    <p>Name: <?= $name ?></p>
    <p>Course: <?= $course ?></p>
    <p>Year Level: <?= $year ?></p>
    <p>Section: <?= $section ?></p>
    <p>Email: <?= $email ?></p>

    <nav>
        <a href="<?= site_url('student') ?>">Home</a> |
        <a href="<?= site_url('student_profile') ?>">Student Profile</a>
    </nav>
</body>
</html>