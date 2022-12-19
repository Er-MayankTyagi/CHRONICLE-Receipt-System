<?php
include 'partials/dbConnect.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>All Students</title>
</head>

<body>
    <div class="container-fluid bg-overlay2">
        <?php include 'partials/nav.php'; ?>
        <div class="container text-center mt-5 ">
            <h1 class=" mt-5">All Students</h1>

            <?php
            include 'config.php';

            $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result) > 0) {
            ?>

            <table id="myTable" class="table">
                <thead class="bg-dark text-light">
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
                            <a href='edit.php?id=<?php echo $row['sid']; ?>' class="btn btn-primary">Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['sid']; ?>' class="btn btn-primary">Delete</a>
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

</body>

</html>