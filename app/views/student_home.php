<?php
/** @var string $title */
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Welcome to My Student Page</h1>
    <p>This is the home page of the Student Information System.</p>

    <nav>
        <a href="<?= site_url('student') ?>">Home</a> |
        <a href="<?= site_url('student_profile') ?>">Student Profile</a>
    </nav>
</body>
</html>