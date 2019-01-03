<?php

    //$action = '';
    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'UpdateDeps':
        $dataReq = $_POST['uni'];
        UpdateDeps($dataReq);
        break;
    case 'UpdateCourses':
        $selUni = $_POST['uni'];
        $selDep = $_POST['dep'];
        $selSem = $_POST['sem'];
        UpdateCourses($selUni, $selDep, $selSem);
        break;
    default:
        // unknown / missing action
    }

    function UpdateDeps($chosenUni) {
        //include("login.php");
        $conn = OpenCon();
        //debug_to_console("reach");
        $depQuery = "SELECT DISTINCT(uniDepartment) FROM `Course` WHERE uniName = '$chosenUni'";

        $depResults = mysqli_query($conn, $depQuery);

        $optionsString = "";
        if (mysqli_num_rows($depResults) > 0) {
            while($row = mysqli_fetch_assoc($depResults)) {
                $optionsString .= '<option onclick="chooseDep(this.value)" value="' . htmlspecialchars($row['uniDepartment']) . '">' 
                . htmlspecialchars($row['uniDepartment']) 
                . '</option>'; 
                //debug_to_console($row['uniDepartment']);
            }
            
        }
        else {
            debug_to_console("NO DEPS");
        }
        CloseCon($conn);
        //debug_to_console($optionsString);
        echo $optionsString;
        return $optionsString;
    }
    
    function UpdateCourses($chosenUni, $chosenDep, $chosenSem) {
        $conn = OpenCon();
        //debug_to_console("reach");
        $courseQuery = "SELECT * FROM `Course` WHERE uniName = '$chosenUni' AND uniDepartment='$chosenDep' AND semester = $chosenSem";

        $courseResults = mysqli_query($conn, $courseQuery);

        $optionsString = "";
        if (mysqli_num_rows($courseResults) > 0) {
            while($row = mysqli_fetch_assoc($depResults)) {
                $optionsString .= '<option onclick="chooseCourse(this.value)" value="' . htmlspecialchars($row['courseId']) . '">' 
                . htmlspecialchars($row['courseName']) 
                . '</option>'; 
                //debug_to_console($row['uniDepartment']);
            }
            
        }
        else {
            debug_to_console("NO COURSES");
        }
        CloseCon($conn);
        //debug_to_console($optionsString);
        echo $optionsString;
        return $optionsString;
    }

?>