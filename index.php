<?php
include "rec_con.php";
$rec = $obj->query("select * from stu_form");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Record Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Table of Records</h2>
  <a href="stu_rec.php"><button class="btn btn-success" style="float: right;">ADD</button></a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Enrollmemt No.</th>
        <th>Course</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
      while($row = $rec->fetch_object()){
    ?>
    <tbody>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->contact; ?></td>
        <td><?php echo $row->enrollment; ?></td>
        <td><?php echo $row->course; ?></td>
        <td><?php echo $row->gender; ?></td>
        <td colspan="2" align="center">
          <a href="edit.php?ed_id=<?php echo $row->id; ?>"><button class="btn btn-primary">Edit</button></a>
          <a href="delete.php?d_id=<?php echo $row->id; ?>"><button class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>

</body>
</html>
