<table border="1" align="center" width="800">
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    <?php foreach ($students as $student) { ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['mobile']['personal'].' '.$student['mobile']['guardian']; ?></td>
        <td><?php echo $student['email']; ?></td>
    </tr>
    <?php } ?>
