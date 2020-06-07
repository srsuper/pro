<?php
//error_reporting(0);
//header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set("Asia/Bangkok");

 $serverName = "localhost:3307";

 $userName = "root";

 $userPassword = "";

 $dbName = "linedb";



 $connect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die ("connect error".mysqli_error($link));

 mysqli_set_charset($connect, "utf8");
 $query ="SELECT
 results_x.id,
 results_x.group_id,
 results_x.roundx_t,
 results_x.text
 FROM
 results_x ";

 $resource = mysqli_query($connect,$query) or  die ("error".mysqli_error($link));

 $count_row = mysqli_num_rows($resource);

if($count_row > 0) {
 while($result =mysqli_fetch_array($resource)){
  $name = $result['group_id'];
  $date =$result['roundx_t'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/message/reply",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{
    "type": "bubble",
    "styles": {
      "header": {
        "backgroundColor": "#ffaaaa"
      },
      "body": {
        "backgroundColor": "#aaffaa"
      },
      "footer": {
        "backgroundColor": "#aaaaff"
      }
    },
    "header": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "header"
        }
      ]
    },
    "hero": {
      "type": "image",
      "url": "https://example.com/flex/images/image.jpg",
      "size": "full",
      "aspectRatio": "2:1"
    },
    "body": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "body"
        }
      ]
    },
    "footer": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "footer"
        }
      ]
    }
  }",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer M9lzosmJ3jWLvleCM/wd/kTeXtFvt+SbFn3FXIIX1ou0/ArZTZOici0dgq3WE0AH6/G7Qg04UDxjzknLGKHtGh3uBF57yLfPhYI/cR+JKLlEgsefQ/t9+4T8baXxYQOJ0gGwtPOFo5tE0xknij3SB5pUdcl/jeq2MDsp33paxx0=",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 71e40b26-87b8-5f38-477c-9bbb4cbffa88"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

 }
 }else{
 //$results = '{"results":null}';
 //echo "today have no ";
}
?>