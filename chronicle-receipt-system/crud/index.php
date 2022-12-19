<!DOCTYPE html>
<html lang="en">

<head>
  <style>

  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


  <?php
  include 'header.php';
  ?>
  <div id="main-content">
    <h2>All Records</h2>
    <!-- <form class="example" action="savedata.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form> -->
    <?php
    include 'config.php';

    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
    ?>
      <table id="datatableid" cellpadding="7px">
        <thead>
          <th>Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Class</th>
          <th>Phone</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['sid']; ?></td>
              <td><?php echo $row['sname']; ?></td>
              <td><?php echo $row['saddress']; ?></td>
              <td><?php echo $row['cname']; ?></td>
              <td><?php echo $row['sphone']; ?></td>
              <td>
                <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else {
      echo "<h2>No Record Found</h2>";
    }
    mysqli_close($conn);
    ?>
  </div>
  </div>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"> </script>
  <script>
    //   $(document).ready(function() {
    //     $('#datatableid').DataTable();
    // } );
    $(document).ready(function() {
      $('#datatableid').DataTable({
        "paging": false,
        "ordering": false,
        "info": false
      });
    });
  </script>
</body>>

</html>