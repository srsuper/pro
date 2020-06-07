<?php
$serverName = "localhost:3307";
$userName = "root";
$userPassword = "";
$dbName = "linedb";
$myradio = $_POST['myradio'];
$myselect = $_POST['myselect'];
$myopen = $_POST['myopen'];
$mydesc = $_POST['mydesc'];
$myradioR = $_POST['myradioR'];

$message = 'รอบที่:'.$myselect.'╔══════════════┓
╠ 🔱🔱 '.'เปิดที่ : '.$myopen.' 🔱🔱
╚══════════════┛ " '.$mydesc.' ' ;

//'imageThumbnail' => 'https://www.img.in.th/images/3d417e800699f5f8639f4e64becb8947.png', // max size 240x240px JPEG
//'imageFullsize'  => 'https://www.img.in.th/images/3506f48bf7cd6339c2291ae701b56d76.png',; //max size 1024x1024px JPEG
if($myselect<>"" || $myopen <> "" ) {


	sendlinemesg();

	header('Content-Type: text/html; charset=utf-8');
	$res = notify_message($message);

	echo "<center>l;ส่งข้อความเรียบร้อยแล้ว</center>";
} else {
	echo "<center>Error: เอาใหม่ กรอกข้อมูลให้ครบถ้วน</center>";
}

function sendlinemesg() {
  define('LINE_API',"https://notify-api.line.me/api/notify");
  	define('LINE_TOKEN','');

  	function notify_message($message){

  		$queryData = array(
        'imageThumbnail' => 'https://www.img.in.th/images/3506f48bf7cd6339c2291ae701b56d76.png', // max size 240x240px JPEG
        'imageFullsize'  => 'https://www.img.in.th/images/3506f48bf7cd6339c2291ae701b56d76.png', //max size 1024x1024px JPEG
        'message' => $message);
  		$queryData = http_build_query($queryData,'','&');
  		$headerOptions = array(

  			'http'=>array(
  				'method'=>'POST',
  				'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
  						."Authorization: Bearer ".LINE_TOKEN."\r\n"
  						."Content-Length: ".strlen($queryData)."\r\n",
  				'content' => $queryData
  			)
  		);
  		$context = stream_context_create($headerOptions);
  		$result = file_get_contents(LINE_API,FALSE,$context);
  		$res = json_decode($result);
  		return $res;

  	}

  }

  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost:3307", "root", "", "linedb");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Escape user inputs for security
  $myradio = mysqli_real_escape_string($link, $_REQUEST['myradio']);
  $myselect = mysqli_real_escape_string($link, $_REQUEST['myselect']);
  $myopen = mysqli_real_escape_string($link, $_REQUEST['myopen']);
  $mydesc = mysqli_real_escape_string($link, $_REQUEST['mydesc']);
  $myradioR = mysqli_real_escape_string($link, $_REQUEST['myradioR']);

  // Attempt insert query execution
  $sql = "INSERT INTO start_round (start_round, start_open,on_off,vat,message) VALUES ('$myselect', '$myopen','$myradioR' ,'$myradio','$mydesc')";
  if(mysqli_query($link, $sql)){
      echo "Records added successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // Close connection
  mysqli_close($link);
  ?>
  ?>
