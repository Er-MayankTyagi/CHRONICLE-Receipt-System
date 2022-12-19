<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Student Details</title>
</head>

<body>
    <div class="container-fluid bg-overlay3">
        <?php include 'partials/nav.php'; ?>
        <div class="container mt-5 text-center">
            <h1 class="text-center mt-5">Update Record</h1>

            <?php
            include 'config.php';

            $stu_id = $_GET['id'];

            $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="container text-center col-md-6 mt-5">
                        <form class="post-form" action="updatedata.php" method="post">

                            <div class="form-group row my-2 mx-5">
                                <label class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
                                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row my-2 mx-5">
                                <label class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">

                                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row my-2 mx-5">
                                <label class="col-sm-4 col-form-label">Class</label>
                                <div class="col-sm-8">
                                    <select name="sclass" class="form-control">
                                        <?php
                                        $sql1 = "SELECT * FROM studentclass";
                                        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

                                        if (mysqli_num_rows($result1) > 0) {
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                if ($row['sclass'] == $row1['cid']) {
                                                    $select = "selected";
                                                } else {
                                                    $select = "";
                                                }
                                                echo  "<option {$select} value='{$row1['cid']}' class='form-control'>{$row1['cname']}</option>";
                                            };
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row my-2 mx-5">
                                <label class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" class="form-control" />
                                </div>
                            </div>
                            <input class="submit btn btn-primary col-md-4 mt-4" type="submit" value="Update" />
                        </form>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>


</body>

</html>