<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Fee-School Name</title>

    <link rel="stylesheet" href="index_button.css">
    <style>
    <?php include "index_button.css"?>
    </style>
</head>

<body>
    <?php
    include 'partials/dbConnect.php';
    ?>

    <body>
        <div class="container-fluid bg-overlay_print text-center">
            <?php include 'partials/nav.php'; ?>
            <div class="container text-center col-md-6">

                <h3 class="text-center mt-5">CHRONICLE FEES SYSTEM</h3>
                <form method="post" action="print_bill.php">
                    <div class="row text-center">
                        <div class="my-3 col-md-6">
                            <label for="name" class="my-2">Student Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="my-3 col-md-6">
                            <label for="reg_num" class="my-2">Registration Number</label>
                            <input type="number" name="reg_num" id="reg_num" class="form-control" required>
                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="my-3 col-md-6">
                            <label for="class" class="my-2">Class</label>
                            <select name="class" class="form-select" id="class">
                                <option selected>--Class--</option>
                                <option value="nursery">Nursery</option>
                                <option value="lkg">L.K.G.</option>
                                <option value="ukg">U.K.G.</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                            </select>
                        </div>
                        <div class="my-3 col-md-6">
                            <label for="depositer" class="my-2">Deposit By : </label>
                            <input type="text" name="depositer" id="depositer" class="form-control" required>
                        </div>
                        <div class="my-3 col-md-12">
                            <label for="date" class="my-2">Date</label>
                            <input type="text" name="date" id="date" value="<?php echo date("d-m-Y"); ?>"
                                class="form-control">
                        </div>


                    </div>
                    <div class="row text-center mt-4">
                        <legend name="Particulars">Particulars</legend>
                        <hr>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="admission" name="admission"
                                    value="admission">
                                <label class="form-check-label" for="admission">
                                    New Admission
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="yearly" name="yearly"
                                    value="yearly">
                                <label class="form-check-label" for="yearly">
                                    Yearly
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="diary" name="diary" value="diary">
                                <label class="form-check-label" for="diary">
                                    Diary
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tie" name="tie" value="tie">
                                <label class="form-check-label" for="tie">
                                    Tie
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="belt" name="belt" value="belt">
                                <label class="form-check-label" for="belt">
                                    Belt
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Ad form" name="adform"
                                    value="Ad form">
                                <label class="form-check-label" for="Ad form">
                                    Ad form
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="icard" value="icard">
                                <label class="form-check-label" for="icard">
                                    ID card
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row text-center mt-4">
                        <legend name="Particulars">Tuition Fees</legend>
                        <hr>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="admission" name="jan" value="jan">
                                <label class="form-check-label" for="admission">
                                    Jan
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="yearly" name="feb" value="feb">
                                <label class="form-check-label" for="yearly">
                                    Feb
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="diary" name="mar" value="mar">
                                <label class="form-check-label" for="diary">
                                    March
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tie" name="apr" value="apr">
                                <label class="form-check-label" for="tie">
                                    April
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="belt" name="may" value="may">
                                <label class="form-check-label" for="belt">
                                    May
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Ad form" name="jun" value="jun">
                                <label class="form-check-label" for="Ad form">
                                    Jun
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="jul" value="jul">
                                <label class="form-check-label" for="icard">
                                    July
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="aug" value="aug">
                                <label class="form-check-label" for="icard">
                                    Aug
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="sep" value="sep">
                                <label class="form-check-label" for="icard">
                                    Sept
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="oct" value="oct">
                                <label class="form-check-label" for="icard">
                                    Oct
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="nov" value="nov">
                                <label class="form-check-label" for="icard">
                                    Nov
                                </label>
                            </div>
                        </div>
                        <div class="my-3 col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="icard" name="dec" value="dec">
                                <label class="form-check-label" for="icard">
                                    Dec
                                </label>
                            </div>
                        </div>

                    </div><br>
                    <input type="submit" name="print" value="Print Bill" class="btn btn-primary col-md-4 mb-5">

                </form>
            </div>

    </body>

</html>