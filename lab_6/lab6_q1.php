<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        // My details
        $name = "Muayad Ahmed Mohsen Al-Samawi";
        $matricNo = "AI240213";
        $course = "Bachelor of Computer Science (Software Engineering) with Honours";
        $yearOfStudy = "Year 3";
        $address = "Parit Raja, 86400 Batu Pahat, Johor";
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNo"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>

</body>
</html>
