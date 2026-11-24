<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        // Student information
        $name = "Muhammad Aqil Syafiq Bin Zainal";
        $matric = "DI240007";
        $course = "Bachelor of Computer Science (Information Security)";
        $year = "Year 3";
        $address = "Pulasan 40, Taman Kota Masai,Pasir Gudang, Johor";
    ?>

    <h2>Student Information</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><td>Name</td><td><?php echo htmlspecialchars($name); ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo htmlspecialchars($matric); ?></td></tr>
        <tr><td>Course</td><td><?php echo htmlspecialchars($course); ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo htmlspecialchars($year); ?></td></tr>
        <tr><td>Address</td><td><?php echo htmlspecialchars($address); ?></td></tr>
    </table>
</body>
</html>
