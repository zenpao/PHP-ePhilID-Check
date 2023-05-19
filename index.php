<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Benguet: Printed ePhilID Check</title>

        <link rel="icon" type="image/x-icon" href="static/assets/img/favicon.ico" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="static/css/styles.css" rel="stylesheet" />
        <link href="static/css/styles2.css" rel="stylesheet" />
        <link href="static/css/invalidinput.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Background Video -->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="static/assets/mp4/bg.mp4" type="video/mp4" /></video>


        <div id="myModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-shield-halved"></i> DATA PRIVACY</h5>
                </div>
                <div class="modal-body">
                    <?php
                    echo '<p><strong>I give my full consent to PSA to collect, record, organize, update, or modify, retrieve, consult, use, consolidate, block, erase or destruct, my personal data as part of my information. Further, I hereby affirm my right to be informed, object to processing, access and rectify, suspend or withdraw my personal data, and be indemnified in case of damages pursuant to the provisions of the Republic Act No. 10173 of the Philippines, Data Privacy Act of 2012 and its corresponding Implementing Rules and Regulations.</strong></p>';
                    ?>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Display message once.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">I agree</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Masthead -->    
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <p class="mb-1" style="font-size:small">Page visits <span class="badge bg-warning text-dark"> 
                    <?php
                        // Check if the counter file exists
                        if(!file_exists("counter.txt")){
                            // If the counter file doesn't exist, create it and set the counter to 0
                            $f = fopen("counter.txt", "w");
                            fwrite($f, "0");
                            fclose($f);
                        }

                        // Read the current value of the counter
                        $f = fopen("counter.txt", "r");
                        $counter = (int)fread($f, filesize("counter.txt"));
                        fclose($f);

                        // Increment the counter
                        $counter++;

                        // Save the new value of the counter
                        $f = fopen("counter.txt", "w");
                        fwrite($f, $counter);
                        fclose($f);

                        // Output the counter
                        echo $counter;
                        ?>
                    </span></p>
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="This system is solely for identifying Printed ePhilID availability & delivery for 2023. Press &quot;Check&quot; to proceed.">
                    <h1 class="fst-italic lh-1 mb-1" style="font-size:45px">Printed ePhilID Check</h1>
                    </span>
                    <p class="mb-1" style="font-size:small">Enter your details to identify your printed ePhilID availability for claiming.</p>
                    <p class="mb-1" style="font-size:small">By using this website, you agree to <a href="#" class="link-info" data-bs-toggle="modal" data-bs-target="#myModal">Data Privacy</a>.</p>
                    <hr>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                    <form method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <div class="mb-2">
                          <!-- <label for="InputLastname" class="form-label">Last Name</label> -->
                          <input type="text" class="form-control" id="InputLastname" name="lastname_php" placeholder="Last Name" style="text-transform:uppercase" pattern="^([^0-9]*)$" autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <!-- <label for="InputFirstname" class="form-label">First Names</label> -->
                            <input type="text" class="form-control" id="InputFirstname" name="firstname_php" placeholder="FIRST NAME" style="text-transform:uppercase" pattern="^([^0-9]*)$" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <!-- <label for="InputMiddlename" class="form-label">Middle Name</label> -->
                            <input type="text" class="form-control" id="InputMiddlename" name="middlename_php" placeholder="MIDDLE NAME" style="text-transform:uppercase" pattern="^([^0-9]*)$" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="InputSuffix" class="form-label">Suffix</label> -->
                            <input type="text" class="form-control" id="InputSuffix" name="suffix_php" placeholder="SUFFIX" style="text-transform:uppercase; width:150px" pattern="^([^0-9]*)$" autocomplete="off">
                        </div>

                        <!-- Dropdown for City/Municipality --> 
                        <div class="mb-2">
                            <label for="firstDropdown" class="form-label">CITY/MUNICIPALITY</label>
                            <select class="form-select" id="firstDropdown" name="area_php" style="font-size:small">
                                <option value="Please select city/municipality" selected="selected" class="dropdown-item">Please select city/municipality</option>
                                <option value="CITY OF BAGUIO" class="dropdown-item">CITY OF BAGUIO</option>
                                <option value="ATOK" class="dropdown-item">ATOK</option>
                                <option value="BAKUN" class="dropdown-item">BAKUN</option>
                                <option value="BOKOD" class="dropdown-item">BOKOD</option>
                                <option value="BUGUIAS" class="dropdown-item">BUGUIAS</option>
                                <option value="ITOGON" class="dropdown-item">ITOGON</option>
                                <option value="KABAYAN" class="dropdown-item">KABAYAN</option>
                                <option value="KAPANGAN" class="dropdown-item">KAPANGAN</option>
                                <option value="KIBUNGAN" class="dropdown-item">KIBUNGAN</option>
                                <option value="LA TRINIDAD" class="dropdown-item">LA TRINIDAD</option>
                                <option value="MANKAYAN" class="dropdown-item">MANKAYAN</option>
                                <option value="SABLAN" class="dropdown-item">SABLAN</option>
                                <option value="TUBA" class="dropdown-item">TUBA</option>
                                <option value="TUBLAY" class="dropdown-item">TUBLAY</option>
                            </select>
                       </div>

                       <!-- Dropdown for Barangay -->
                        <div class="mb-3" hidden>
                            <label for="secondDropdown" class="form-label">BARANGAY</label>
                            <select class="form-select" id="secondDropdown" name="brgy_php" style="font-size:small">
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="myBtn" name="check" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Check</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end show" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <small class="offcanvas-title" id="offcanvasExampleLabel"><img src="static/assets/img/notification.gif" width="30" height="30" alt="" class="d-inline-block align-center">
                <?php
                    date_default_timezone_set('Asia/Manila');
                    $today = date("d F Y");
                    echo $today;
                ?>
            </small>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
            <?php
                // check if the form has been submitted
                if (isset($_POST['check'])) {

                    // get the selected option from the dropdown
                    $search_lastname = $_POST['lastname_php'];
                    $search_firstname = $_POST['firstname_php'];
                    $search_middlename = $_POST['middlename_php'];
                    $search_suffix = $_POST['suffix_php'];
                    $search_area = $_POST['area_php'];
                    $search_brgy = $_POST['brgy_php'];

                    $message_found = "✅ Your printed ePhilID was dispatched or is in process for delivery. We ask for your patience.";
                    $message_none = "❌ Please try again in a few months or reach out to PhilSys Registration Centers near you.";
                    $message_invalid = "❌ Please select correct city/municipality.";

                    // echo '<h5 class="offcanvas-title" id="offcanvasExampleLabel"><i class="fa-regular fa-circle-user"></i> PERSONAL DETAILS</h5>';
                    // echo '<p style="text-transform:uppercase;"><strong>NAME: </strong><u>';
                    // echo "$search_lastname, $search_firstname $search_suffix $search_middlename";
                    // echo '</u></p>';
                    // echo '<hr>';
                    // echo '<p style="text-transform:uppercase;"><strong>AREA: </strong><u>';
                    // echo "$search_brgy, $search_area";
                    // echo '</u></p>';

                    // $header_lastname = ucfirst(substr($search_lastname, 0, 1));
                    // $header_firstname = strtoupper($search_firstname);
                    // $header_middlename = ucfirst(substr($search_middlename, 0, 1));

                    $header_lastname = strtoupper($search_lastname);
                    $header_firstname = strtoupper($search_firstname);
                    $header_middlename = strtoupper($search_middlename);

                    $header_suffix = strtoupper($search_suffix);
                    $header_area = $search_area;
                    $header_brgy = $search_brgy;

                    //MAKE CODE TO MAKE header area and brgy to - when chosen Please select city/municipality
                    if ($header_area == "Please select city/municipality"){
                        $header_area = "area undefined";
                        $header_brgy = "area undefined";
                    }


                    echo '<h5 class="offcanvas-title" id="offcanvasExampleLabel"><i class="fa-solid fa-magnifying-glass"></i> See result below for: <br><a href="#" onclick="window.print();return false;"><i class="fa-regular fa-user"></i></a> <u>';
                    // echo "$header_lastname*, $header_firstname $header_suffix $header_middlename. ($header_brgy, $header_area)";
                    echo "$header_lastname, $header_firstname $header_suffix $header_middlename";
                    echo '</u><br><a href="#" onclick="window.print();return false;"><i class="fa-regular fa-map"></i></a> <u>';
                    echo "($header_area)";
                    echo '</u></h5>';
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
                                        global $message_found;
                                        echo "<p><mark>$message_found</mark></p>";
                                        $match_found = true;
                                    }
                                }
                            }
                        }
                        if(!$match_found) {
                            global $message_none;
                            echo "<p><mark>$message_none</mark></p>";
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
                            global $message_invalid;
                            echo "<p><mark>$message_invalid</mark></p>";
                    }
                }
            ?>

                <figure class="text-center">
                <blockquote class="blockquote">
                <img src="static/assets/img/disclaimer.jpg" width="120" height="120" alt="" class="d-inline-block align-center">
                </blockquote>
                <figcaption class="blockquote-footer" style="font-size:9.5px;">
                <strong>Disclaimers:</strong> "No Results or ❌" means your printed ePhilID is <u>"not yet available or may have been dispatched last 2022"</u>. Try using details reflected on TRN Slip or secondary municipality in Step 2 Registration. You may present your TRN Slip and/or share this result and visit the nearest Registration Center in your area for assistance and inquiries. Thank you for your continuous patience and support.
                </figcaption>
                </figure>
                
                <figure class="text-center">
                <blockquote class="blockquote">
                <a href="#" style="font-size:9px;" data-bs-dismiss="offcanvas" class="text-decoration-none"><i>(close to go back to the form)</i></a>
                </blockquote>
                </figure>
                
            </div>
        </div>
        </div>

        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="https://www.privacy.gov.ph/data-privacy-act/" target="_blank" title="RA: 10173 - Data Privacy Act of 2012"><i class="fa-solid fa-shield-heart"></i></a>
                <a class="btn btn-dark m-3" href="https://trn-verifier.philsys.gov.ph/" target="_blank" title="Online ePhilID Appointment System"><i class="fa-solid fa-calendar-day"></i></a>
                <a class="btn btn-dark m-3" href="https://ephilid.philsys.gov.ph/" target="_blank" title="Download My ePhilID"><i class="fa-solid fa-file-export"></i></a>
                <a class="btn btn-dark m-3" href="https://verify.philsys.gov.ph/" target="_blank" title="PhilSys Check"><i class="fa-regular fa-square-check"></i></a>
                <a class="btn btn-dark m-3" href="https://www.philsys.gov.ph/" target="_blank" title="PhilSys Official Website"><i class="fa-solid fa-info"></i></a>
            </div>
        </div>

        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="static/js/modal-auto.js"></script>
        <script src="static/js/popover.js"></script>
        <script src="static/js/dropdown.js"></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    </body>
</html>
