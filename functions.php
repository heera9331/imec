<?php
date_default_timezone_set('Asia/Kolkata');
include_once('database.php');

function multiToSingleArray($array)
{
	$newarray = array_reduce($array,'array_merge',array());
	return($newarray);
}
function printr($ar)
{
    echo "<pre>";
    print_r($ar);
    echo "</pre>";
}
function dbqueryoneresult($sql)
{
	global $conn;
	$gloresult = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$glorow = mysqli_fetch_array($gloresult);
	if($glorow != NULL)
		return $glorow[0];
	else
		return (NULL);
}
function dbquery($sql)
{
	global $conn;
	$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function dbqueryresult($sql)
{
	global $conn;
	$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$arr = array();
	while($row = mysqli_fetch_assoc($res))
	{
		$arr[] = $row;
	}
	return $arr;
}

function dumptext($msg)
{
	$file="dump.txt";
	$current = file_get_contents($file);
	$current .= "$msg\r\n";
	file_put_contents($file,$current);
}
function valid_email($email) {
    return !!filter_var($email, FILTER_VALIDATE_EMAIL);
}function checkIfDefaultFees($stid)
{
	$countfeestype = dbqueryoneresult("select count(*) from feestype");
	$countfees = dbqueryoneresult("select count(*) from studentfees where stfstudentid = $stid");
	if($countfeestype == $countfees)
		return(true);
	else
		return(false);
}
function sendactualmail($toemail, $subject, $message)
{
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From: GD Goenka La Petite <mail@school.isonline.in>" . "\r\n";
    return mail($toemail, $subject, $message, $headers);
}
function generateOption($table, $keya, $vala, $condition = "", $selected = "",$orderby = "")
{
	$sql = "select $keya, $vala from $table";
	if(strlen($condition) > 0)
	{
		$sql .= " ";
		$sql .= $condition;
	}
	else if(strlen($orderby) > 0)
	{
		$sql .= " ";
		$sql .= $orderby;
	}
	$result = dbqueryresult($sql);
	
	for($i=0;$i<count($result);$i++)
	{
		$key = $result[$i][$keya];
		$val = $result[$i][$vala];
	
		if(strlen($selected) > 0 && $selected == $key)
			echo '<option value = "' . $key . '" selected>' . $val .'</option>';
		else
			echo '<option value = "' . $key . '">'. $val .' </option>';
			
	}
}

function generateMultiOption($what,$condition = "",$selected = "")
{
	if(strlen($what) > 0):
	
	$sql = "select opvalue from options where opname = '$what'";
	$result = dbqueryresult($sql);
	
	for($i=0;$i<count($result);$i++)
	{
		$val = $result[$i]['opvalue'];
		if(strlen($selected) > 0 && $selected == $val)
			echo "<option value = '$val' selected>$val</option>";
		else
			echo "<option value = '$val'>$val</option>";
	}
	endif;
}
function generateVarOption($what, $selected="")
{
	global $variable;
	if(strlen($what) > 0):

	foreach($variable[$what] as $key=>$val)
	{
		if($key == $selected)
			echo "<option value = '$key' selected>$val</option>";
		else
			echo "<option value = '$key'>$val</option>";
	}

	endif;
}



function getOptionValue($opname)
{
	return(dbqueryoneresult("select opvalue from options where opname = '$opname'"));
}

function getSchoolName($schoolid)
{
	return(dbqueryoneresult("select schoolname from school where schoolid = $schoolid"));
}
function getUserFullName($userid)
{
	return(dbqueryoneresult("select userfullname from users where userid = $userid"));
}


function encrypt($string, $key)
{ 
	$result = ''; 
	for($i=0; $i<strlen($string); $i++)
	{ 
		$char = substr($string, $i, 1); 
		$keychar = substr($key, ($i % strlen($key))-1, 1); 
		$char = chr(ord($char)+ord($keychar)); 
		$result.=$char; 
	}
	return base64_encode($result); 
}


//echo $str = encrypt("25062014-37880-462","ashi");

//echo decrypt($str,"ashi");

function decrypt($string, $key)

{ 

	$result = ''; 

	$string = base64_decode($string);

	for($i=0; $i<strlen($string); $i++)

	{ 

		$char = substr($string, $i, 1); 

		$keychar = substr($key, ($i % strlen($key))-1, 1); 

		$char = chr(ord($char)-ord($keychar)); 

		$result.=$char; 

	}

	return $result; 

}

function tonormaldate($datetoconvert)
{
	$datearray = explode("-",$datetoconvert);
	$dd = $datearray[2];
	$mm = $datearray[1];
	$yy = $datearray[0];
	$finaldate = $dd . "-" . $mm . "-" . $yy;
	return $finaldate;
}

function changedateformat($thisdate)
{
	if(!$thisdate) {
		return "";
	}
	$temp1 = explode(" ",$thisdate);
	$date1 = tonormaldate($temp1[0]);
	$time1 = $temp1[1]; 

	$newdatetime = $date1 . " " . $time1;
	return($newdatetime);
}

function tosqldate($datetoconvert)
{
	$datearray = explode("-",$datetoconvert);
	$dd = $datearray[0];
	$mm = $datearray[1];
	$yy = $datearray[2];
	$finaldate = $yy . "-" . $mm . "-" . $dd;
	return $finaldate;
}

function redirect($url)
{
	echo "<script type='text/javascript'>";
	echo "document.location.href='$url'";
	echo "</script>";
}

function sendsms($msg,$to,$userid,$purpose=NULL)
{
	$uname=urlencode("ashish");
	$API = '7df152da1bdc1d0b24458f59459a618';
	$senderid=urlencode("DWPSSG");
	if(strlen($to) == 10)
		$to=urlencode($to);
	
	$msg1 = $msg;
	$msg=urlencode($msg);
	$myurl = "http://msg.cyberdairy.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=$API&message=$msg&senderId=$senderid&routeId=1&mobileNos=$to&smsContentType=english";
	

	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $myurl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	//curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);
	curl_close($ch);
	//$temp = explode(",",$output);
	//$apiid = $temp[0] . "-" . $temp[1];
	//$apiid = $output;
	$obj = json_decode($output);
	$apiid = $obj->{'response'}  . " " . $obj->{'responseCode'};
	$sql = "INSERT INTO msghistory(mhmsg, mhapiid, mhto, mhpurpose, mhaddedby) VALUES ('$msg1','$apiid','$to','$purpose', $userid)";
	dbquery($sql);
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function get_last_inserted_id($colname, $table )
{
        $sql = "select max($colname) from $table";
		$id = dbqueryoneresult($sql);
		return $id;
}


function getLastRecordID()
{
    global $conn;
    return(mysqli_insert_id($conn));
}



function arrayToJSON($array)
{
	$Jarr = json_encode($array);
	return $Jarr;
}

function JSONtoArray($jsondata)
{
	$jarr = json_decode($jsondata, true);
	return $jarr;
}


// heera singh lodhi

function isStudentProfileCompleted($id) : bool {
	// every field of student table is filled then we can say student profile is completed
	$query = "select * from students where id='$id'";
	$student = dbqueryresult($query);
	if(!$student) {
		return false;
	}
	$student = $student[0];
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

function getStudent($username) {
    global $conn;
    $query = "SELECT * FROM students WHERE enrollment='$username' OR mobile='$username' OR id='$username'";
    $res = mysqli_query($conn, $query);

    if (!$res) {
        // Handle query execution error
        die("Query failed: " . mysqli_error($conn));
    }

    $student = mysqli_fetch_assoc($res);

    // Free the result set
    mysqli_free_result($res);

    return $student;
}



function updateStudent($enrollment, $fullname, $mobile, $dob, $father, $mother, $emailid, $whatsappno, $linkedinid, $address, $course, $branch ) {
	global $conn;
	$query = "
	update students
	set fullname='$fullname', mobile='$mobile', dob='$dob', father='$father', mother='$mother', emailid='$emailid', whatsappno='$whatsappno', linkedinid='$linkedinid', address='$address', course='$course', branch='$branch'
	where enrollment = '$enrollment';
	";    
	return mysqli_query($conn, $query) or die(mysqli_error($conn));
	
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


function containsInterest($query) : bool {
	global $conn;
	 
	$res = dbqueryresult($query);
	 
	if($res[0]['cnt'] > 0) {
		return true;
	}

	return false;
}

?>