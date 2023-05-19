<?php
    // check if the form has been submitted
    if (isset($_POST['check'])) {

        // get the selected option from the dropdown
        $search_lastname = $_POST['lastname_php'];
        $search_firstname = $_POST['firstname_php'];
        $search_middlename = $_POST['middlename_php'];
        $search_area = $_POST['area_php'];
        $message_found = "Your printed ePhilID was dispatched or is in process for delivery.";
        $message_none = "Please try again in a few months or reach out to PhilSys Registration Centers near you.";
        $message_invalid = "Please select correct city/municipality. Thank you.";

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
                            // echo $message_found;
                            header("Location: index.php?result=$message_found");
                            $match_found = true;
                        }
                    }
                }
            }
            if(!$match_found) {
                global $message_none;
                // echo $message_none;
                header("Location: index.php?result=$message_none");
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
                // echo $message_invalid;
                header("Location: index.php?result=$message_invalid");
        }
    }
?>