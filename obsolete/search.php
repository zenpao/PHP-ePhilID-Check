<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Benguet: Printed ePhilID Check</title>
        <link rel="icon" type="image/x-icon" href="static/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="static/css/styles3.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><i class="fa-solid fa-circle-arrow-left" title="Back"></i> Search another</a>
                <a class="nav-brand" href="#!"  title="Save/Print" onclick="window.print();return false;"><i class="fa-solid fa-file-arrow-down"></i> Save/Print</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#!" target="_blank" title="Online Step 1 Registration"><i class="fa-solid fa-1"></i> Online Step 1 Registration</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#!" target="_blank" title="Online ePhilID Appointment System"><i class="fa-solid fa-calendar-day"></i></a></li>
                        <li class="nav-item active"><a class="nav-link" href="#!" target="_blank" title="PhilSys Check"><i class="fa-regular fa-square-check"></i></a></li>
                        <li class="nav-item active"><a class="nav-link" href="#!" target="_blank" title="PhilSys Official Website"><i class="fa-solid fa-info"></i></a></li>
                        <li class="nav-item active"><a class="nav-link" href="#!" target="_blank" title="Data Privacy Act of 2012"><i class="fa-solid fa-shield-halved"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </nav>
        <!-- Page Content-->
        <section>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <h3 class="mt-5"><span class="badge bg-dark">PERSONAL INFORMATION:</span></h3>

                        <p><strong>Last Name:</strong> <u><span style="text-transform:uppercase;">
                        <?php
                        if(isset($_POST['lastname_php'])) {
                            echo $_POST['lastname_php'];
                        }
                        ?>
                        </span></u></p>

                        <p><strong>First Name/s:</strong> <u><span style="text-transform:uppercase;">
                        <?php
                        if(isset($_POST['firstname_php'])) {
                            echo $_POST['firstname_php'];
                        }
                        ?>
                        </span></u></p>

                        <p><strong>Middle Name:</strong> <u><span style="text-transform:uppercase;">
                        <?php
                        if(isset($_POST['middlename_php'])) {
                            echo $_POST['middlename_php'];
                        }
                        ?>
                        </span></u></p>

                        <p><strong>Suffix:</strong> <u><span style="text-transform:uppercase;">
                        <?php
                        if(isset($_POST['suffix_php'])) {
                            echo $_POST['suffix_php'];
                        }
                        ?>
                        </span></u></p>

                        <p><strong>City/Municipality:</strong> <u>
                        <?php
                        if(isset($_POST['area_php'])) {
                            echo $_POST['area_php'];
                        }
                        ?>
                        </u></p>

                        <p><strong>Barangay:</strong> <u>
                        <?php
                        if(isset($_POST['brgy_php'])) {
                            echo $_POST['brgy_php'];
                        }
                        ?>
                        </u></p>

                    </div>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <h3 class="mt-4"><span class="badge bg-dark">SEARCH RESULTS:</span></h3>
                    <?php
                    // check if the form has been submitted
                    if (isset($_POST['check'])) {

                        // get the selected option from the dropdown
                        $search_lastname = $_POST['lastname_php'];
                        $search_firstname = $_POST['firstname_php'];
                        $search_middlename = $_POST['middlename_php'];
                        $search_area = $_POST['area_php'];

                        function search_csv($file, $search_value, $search_value2, $search_value3) {
                            $rows = array();
                            $handle = fopen($file, "r"); //after passing the file, open it
                            while (($data = fgetcsv($handle)) !== false) { //place each columns of data into the array
                                $rows[] = $data;
                            }
                            fclose($handle); //close the file
                        
                            $match_found = false; //we  check 2nd column (firstname) first since it is required
                            foreach ($rows as $row) { //1st columm: lastname, 2nd column: firstname, 3rd column: middlename
                                if (strtolower($row[1]) == strtolower($search_value) || 
                                    strtolower($row[1]) == strtolower($search_value2) || 
                                    strtolower($row[1]) == strtolower($search_value3)) { //check if the second column of the row matches the second search_value
                                    //echo "Matching value found in column 0: " . $row[0];
                                    $match_found = true;
                                    if (strtolower($row[0]) == strtolower($search_value) || 
                                        strtolower($row[0]) == strtolower($search_value2) || 
                                        strtolower($row[0]) == strtolower($search_value3)) { //if the second column of the row matched a value, proceed to first column of the row
                                        //echo "Matching value found in column 1: " . $row[1];
                                        $match_found = true;
                                        if (strtolower($row[2]) == strtolower($search_value) || 
                                            strtolower($row[2]) == strtolower($search_value2) || 
                                            strtolower($row[2]) == strtolower($search_value3)) { //if the second and second column of the row matched a value, check the third one
                                            //echo "Matching value found in column 2: " . $row[2];
                                            echo '<p><i class="fa-regular fa-address-card" style="font-size:40px;"></i> <i class="fa-regular fa-square-check" style="font-size:40px; color: #00cc66;"></i></p>';
                                            echo '<p><mark>Your printed ePhilID was <strong>dispatched or is in process for delivery</strong>.</mark></p>';
                                            $match_found = true;
                                        }
                                    }
                                }
                            }
                            if(!$match_found) {
                                echo '<p><i class="fa-regular fa-address-card" style="font-size:40px"></i> <i class="fa-regular fa-circle-xmark" style="font-size:40px; color: red;"></i></p>';
                                echo '<p><mark><strong>Please try again in a few months or reach out to PhilSys Registration Centers near you.</strong></mark></p>';
                            }
                        }

                        switch ($search_area){
                            case "CITY OF BAGUIO":
                                $file = 'list/CITY OF BAGUIO/CITY OF BAGUIO.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "ATOK":
                                $file = 'list/ATOK/ATOK.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "BAKUN":
                                $file = 'list/BAKUN/BAKUN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "BOKOD":
                                $file = 'list/BOKOD/BOKOD.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "BUGUIAS":
                                $file = 'list/BUGUIAS/BUGUIAS.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "ITOGON":
                                $file = 'list/ITOGON/ITOGON.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "KABAYAN":
                                $file = 'list/KABAYAN/KABAYAN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "KAPANGAN":
                                $file = 'list/KAPANGAN/KAPANGAN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "KIBUNGAN":
                                $file = 'list/KIBUNGAN/KIBUNGAN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "LA TRINIDAD":
                                $file = 'list/LA TRINIDAD/LA TRINIDAD.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "MANKAYAN":
                                $file = 'list/MANKAYAN/MANKAYAN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "SABLAN":
                                $file = 'list/SABLAN/SABLAN.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "TUBA":
                                $file = 'list/TUBA/TUBA.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            case "TUBLAY":
                                $file = 'list/TUBLAY/TUBLAY.csv';
                                search_csv($file, $search_lastname, $search_firstname, $search_middlename);
                                break;
                            default:
                                echo '<p><i class="fa-regular fa-address-card" style="font-size:40px;"></i> <i class="fa-solid fa-triangle-exclamation" style="font-size:40px; color: red;"></i></p>';
                                echo '<p><mark>Please <strong>select correct city/municipality</strong>. Thank you.</mark></p>';
                        }
                    }
                    ?>
                <p style="font-size:9px;"><i><mark><i class="fa-solid fa-triangle-exclamation" style="color: red"></i> Disclaimer: Empty or "No Search Results" means your printed ePhilID is <u>"not yet available or may have been dispatched last 2022"</u>.</mark></i></p>
                <p style="font-size:9px"><i><mark><i class="fa-regular fa-lightbulb" style="color: green"></i> Advice: Try using the name reflected on TRN Slip or secondary municipality registered in Step 2 <u>as it may yield a different result</u>.</mark></i></p>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="static/js/jquery-3.6.3.slim.min.js"></script>
        <script src="static/js/modal.js"></script>
        <script src="static/js/dropdown.js"></script>
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
