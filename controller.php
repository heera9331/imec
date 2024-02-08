
<?php 
    include_once("../database.php");

    // username is student enrollment or mobile no
    function getStudent($username) {
        global $conn;
        $query = "select * from student where enrollment='$username' or mobile='$username'";
        $res = mysqli_query($conn, $query);
        $student = "";
        while($row = mysqli_fetch_assoc($res)) {
            $student = $row;
        }
        return $student;
    }

    function registerStudent($sql) {
        try {
            global $conn;
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if($res == 1) {
                return true;
            }
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }

    function getStudentByUserAndPassword($username, $pwd) {
        // this function return student array
        global $conn;
        $query = "select * from student where enrollment='$username' and password='$pwd' ";
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $student = "";
        while($row = mysqli_fetch_assoc($res)) {
            $student = $row;
        }
        if($student!="") {
            return $student;
        }

        return false;
    }

    function isStudentProfileCompleted($student) : bool {
        // every field of student table is filled then we can say student profile is completed
        
        
        foreach ($student as $key => $value) {
            // optional fiels are skipped
            if($key == 'photo' || $key=='status') {
                continue;
            }
            else if (strlen($value)==0) {
                return false;
            }
        }
        
        return true;
    }

    function updateStudent($enrollment, $fullname, $mobile, $dob, $father, $mother, $emailid, $whatsappno, $linkedinid, $address, $course, $branch ) {
        global $conn;
        $query = "
        update student
        set fullname='$fullname', mobile='$mobile', dob='$dob', father='$father', mother='$mother', emailid='$emailid', whatsappno='$whatsappno', linkedinid='$linkedinid', address='$address', course=$course, branch=$branch
        where enrollment = '$enrollment';
        ";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        
    }
    
    
?>
