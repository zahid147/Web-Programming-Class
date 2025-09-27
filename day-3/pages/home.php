<table border="1" align="center" width="800">
    <tr>
        <th>Course Code</th>
        <th>Course name</th>
        <th>Grade</th>
    </tr>
    <?php foreach ($students as $student) { ?>
    <tr>
        <td><?php echo $student['course_code']; ?></td>
        <td><?php echo $student['course_name']; ?></td>
        <td><?php echo $student['grade']; ?></td>
    </tr>
    <?php } ?>
