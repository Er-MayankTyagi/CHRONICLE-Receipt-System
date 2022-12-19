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
            <h1 class="text-center mt-5">Add Student</h1>
            <div class="container text-center col-md-6 mt-5">
                <form class="post-form" action="savedata.php" method="post">
                    <div class="form-group row my-2 mx-5">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="sname" required class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row my-2 mx-5">
                        <label class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="saddress" required class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row my-2 mx-5">
                        <label class="col-sm-4 col-form-label">Class</label>
                        <div class="col-sm-8">
                            <select name="class" class="form-control" required>
                                <option value="" selected disabled>Select Class</option>
                                <?php
                                include 'config.php';

                                $sql = "SELECT * FROM studentclass";
                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option class="form-control" value="<?php echo $row['cid']; ?>">
                                        <?php echo $row['cname']; ?> ></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row my-2 mx-5">
                        <label class="col-sm-4 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" name="sphone" required class="form-control" />
                        </div>
                    </div>
                    <input class="submit btn btn-primary col-md-4 mt-4" type="submit" value="Save" />
                </form>
            </div>
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