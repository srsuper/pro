<?php // callback.php
date_default_timezone_set("Asia/Bangkok");
$date_ = date("Y-m-d");
$time_ = date("H:i:s");
$link = mysqli_connect("localhost:3307", "root", "", "linedb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
require "vendor/autoload.php";
require_once('vendor/LINEBotTiny.php');

$access_token = 'hFcHkq7njlfHTSIAyNbkgTp3FQdbV7ntUr3DNMucqCgM4UYWB4RHblMw1oO7QZNaS8Pb+mbn+PdC01dx5JperIBvSjl58oNCWWLVEgDjhIYEq9lObjhAVfrtX6+6zrBBcfGXxpKthYd4ke17od+iiswh8p6xlupEHSzmJbGEAiwlZrQn+cnjYYg8swHSC/3b';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);

// user define function
function checkSendMessage($arrKeyword, $message)
{
	$isFound =0;
	foreach ($arrKeyword as $keyword) 
        {
		if (strpos($message,$keyword) !== false) 
             {
                $isFound = 1;
             }
         }
	return $isFound;

}

function checkExactMessage($arrKeyword, $message)
{
	$isFound =0;
	foreach ($arrKeyword as $keyword) 
        {
		if ($message == $keyword) 
             {
                $isFound = 1;
             }
         }
	return $isFound;

}
function getDisplayName($id)
{
	$access_token = 'M9lzosmJ3jWLvleCM/wd/kTeXtFvt+SbFn3FXIIX1ou0/ArZTZOici0dgq3WE0AH6/G7Qg04UDxjzknLGKHtGh3uBF57yLfPhYI/cR+JKLlEgsefQ/t9+4T8baXxYQOJ0gGwtPOFo5tE0xknij3SB5pUdcl/jeq2MDsp33paxx0=';

	$url = 'https://api.line.me/v2/bot/profile/'.$id;
	$headers = array('Authorization: Bearer ' . $access_token);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);
	//echo $result
	$profile = json_decode($result, true);
	$displayName =  $profile['displayName'];
	$pictureUrl = $profile['pictureUrl'];
	
	return $displayName;
}

function distance($lat1, $lon1, $lat2, $lon2, $unit) 
{
	
//echo distance(13.709404, 100.611131, 13.7100786, 100.6110613, "K") . " km<br>";
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}

// end function



// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event

			$id = $event['source']['userId'];
			$Info = file_get_contents('http://info.txt);'.$id);
		
			$str_arr = explode (";", $Info);  
					
			$state=$str_arr[0];
			$lastMessage= $str_arr[1];
			$lastMessageDT = $str_arr[2];
			$distance = $str_arr[3];
			
	foreach ($events['events'] as $event) {
		if ($event['type'] == "unfollow") 
		{
			$id = $event['source']['userId'];
			$paymentDetails = file_get_contents('http://info.txt'.$id);
		}
	
		
		if ($event['type'] == "follow") 
		{
 			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			$id = $event['source']['userId'];
			$userName = getDisplayName($text);
			$paymentDetails = file_get_contents('http://info.txt'.$id.'&n='.$userName);
			
			
			
			
			

			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo "Your ID is : ".$result . "\r\n";
		}
				
		if ($event['message']['type'] == 'location')
		{
			$text = $event['source']['userId'];
			$id = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			$lat = $event['message']['latitude'];
			$long = $event['message']['longitude'];
			
			$distance = distance($lat, $long, 13.7100786, 100.6110613, "K");

			$paymentDetails = file_get_contents('http://info.txt'.$id.'&d='.$distance);
			$messages=  [
								'type' => 'text',
								'text' => ''
						];	
						// end message
            
                        
            
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
            curl_close($ch);
            

		}
		
		
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			
			
			// Get text sent
			$text = $event['source']['userId'];
			$id = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			 $sendMessage = $event['message']['text'];
			
			$userName = getDisplayName($text);
			// Build message to reply back
		 
			
			$paymentDetails = file_get_contents('http://info.txt'.$id.'&m='.$sendMessage);

            $isNeedHelp = 0;
			$isMoreMessage = 1;
            $messages = [
                'type' => 'text',
                'text' => ''
            		];	
			
			
		$dataHiReturn = array("111","222","333","444","555","666");
		if (checkExactMessage($dataHiReturn,$sendMessage) == 1)
		{
			$messages=  [
				             'type' => 'text',
				             'text' => ''	
						];	
						$isNeedHelp = 1;
        }	

        $dataT = array("(r)","(p)");
		if (checkSendMessage($dataT,$sendMessage) == 1)
		{                               
            $messages = [
                'type' => 'template', // 訊息類型 (模板)
                        'altText' => 'เปิดรอบ', // 替代文字
                        'template' => array(
                                    'type' => 'buttons', // 類型 (按鈕)
                                'thumbnailImageUrl' => 'https://sv1.picz.in.th/images/2020/06/04/qjYgzD.md.jpg', // 圖片網址 <不一定需要>
                                 'title' => 'กลุ่ม#YEAW', // 標題 <不一定需要>
                                'text' => 'รองรับ 🎲ไฮโล / แทงสูงสุด 3 หู ใน 1 ข้อความ ตัวคั่น หลายแบบ', // 文字
                                'actions' => array(
                                              //  array(
                                                //	'type' => 'postback', // 類型 (回傳)
                                         //       'label' => 'Postback example', // 標籤 1
                                           //     'data' => 'action=buy&itemid=123' // 資料
                                              //    ),
                                               // array(
                                                //	'type' => 'message', // 類型 (訊息)
                                         //       'label' => 'Message example', // 標籤 2
                                           //     'text' => 'Message example' // 用戶發送文字
                                         //     ),
                                               array(
                                                 'type' => 'uri', // 類型 (連結)
                                                 'label' => 'พร้อมแล้วลุย!!', // 標籤 3
                                                 'uri' => 'http://info.txt'.$messages // 連結網址
                                                        )
                                                
                                                        )
                                    )
                                    
                 
                   ];	
                
                               $isNeedHelp = 1;
               }


		$dataThanks = array("(s)","(m)","(=)","(@)");
		
		if (checkSendMessage($dataThanks,$sendMessage) == 1)
		{
			$messages=  [
				             'type' => 'text',
				             'text' => ''                       
                            ];	
                        $isNeedHelp = 1;                    
                        
			   
                             
             
                        }
                                                
        
	//	$dataHello = array("ถั่วออก","ทัก","hi","Hi","HI","สอบถาม","ออกรถ");
		
	//	if (checkSendMessage($dataHello,$sendMessage) == 1)
	//	{
		//	$messages=  [
				        //     'type' => 'text',
				        //     'type' => 'template', // 訊息類型 (模板)
                		//		'altText' => 'ถั่วออก', // 替代文字
                		//		'template' => array(
                    				//		'type' => 'buttons', // 類型 (按鈕)
		                			//	'thumbnailImageUrl' => 'https://okplus.co.th/images/newbike_front.png', // 圖片網址 <不一定需要>
                 					//	'title' => 'ถั่วออก', // 標題 <不一定需要>
		                			//	'text' => 'สวัสดีค่ะ'."\n".'รายการถั่วออกล่าสุด', // 文字
                					//	'actions' => array(
			                      	//				  
			                       	//				 array(
                            		//						'type' => 'message', // 類型 (訊息)
				                 	//			       'label' => 'Scoopy-i', // 標籤 2
				                   	//			     'text' => 'Scoopy' // 用戶發送文字
				                 	//			     ),
			                       // 				   array(
                        		//		 				'type' => 'message', // 類型 (連結)
				                  //       				'label' => 'Wave', // 標籤 3
				                 //        				'text' => 'Wave' // 連結網址
				                //       				         )
			                  //     					   ,
			                //        				   array(
                        	//			 				'type' => 'message', // 類型 (連結)
				           //              				'label' => 'Click', // 標籤 3
				          //               				'text' => 'Click' // 連結網址
				            //           				         )
			            //           					   ,
			            //            				   array(
                       // 				 				'type' => 'message', // 類型 (連結)
				       //                  				'label' => 'PCX', // 標籤 3
				      //                   				'text' => 'PCX' // 連結網址
			//	                       				         )																						 		
		//	                       					   )
		 //               					)			
		//	];	
		//				$isNeedHelp = 1;
		//}
		
		$dataYes = array("ถั่วออก (a)","ใช่ไไม");
		$Round= $_GET['Round'];
    	//$open = $_GET['open'];
		
		
		if (checkSendMessage($dataYes,$sendMessage) == 1)
		{
			$messages=  [ 
				'type' => 'template', // 訊息類型 (模板)
				'altText' => 'เปิดรอบ', // 替代文字
				'template' => array(
							'type' => 'buttons', // 類型 (按鈕)
						'thumbnailImageUrl' => 'https://sv1.picz.in.th/images/2020/06/04/qjYgzD.md.jpg', // 圖片網址 <不一定需要>
						 'title' => 'กลุ่ม#YEAW', // 標題 <不一定需要>
						'text' => 'xxxx', // 文字
						'actions' => array(
									  //  array(
										//	'type' => 'postback', // 類型 (回傳)
								 //       'label' => 'Postback example', // 標籤 1
								   //     'data' => 'action=buy&itemid=123' // 資料
									  //    ),
									    array(
											'type' => 'message', // 類型 (訊息)
								        'label' => 'รอบที่ 1'.$Round, // 標籤 2
								        'text' => 'xxxx' // 用戶發送文字
								      ),
									   array(
										 'type' => 'uri', // 類型 (連結)
										 'label' => 'ตรวจสอบรายการ!!', // 標籤 3
										 'uri' => 'http://info.txt'.$messages // 連結網址
												)
										
												)
							)
							
						  ];	
						$isNeedHelp = 1;
		}
			
		
		$dataDai = array("ได้ไหม","ได้ไไม");
		
		if (checkSendMessage($dataDai,$sendMessage) == 1)
		{
			$messages=  [
				             'type' => 'text',
				             'text' => ''	
						];	
						$isNeedHelp = 1;
		}

		$dataBlackList = array("แบล็คลิสต์","Black","ติดบูโร","เครดิต","bl","BL");
		
		if (checkSendMessage($dataBlackList,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
                			'text' => ''	
						];	
						$isNeedHelp = 1;
		}

		$dataFinance = array("ไฟแนน");
		
		if (checkSendMessage($dataFinance,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
                			'text' => ' '	
						];	
						$isNeedHelp = 1;
		}
            
		$dataAge = array("อายุ 18","อายุ 19");
		
		if (checkSendMessage($dataAge,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
                			'text' => ''	
						];	
						$isNeedHelp = 1;
		}

		$dataColor = array("สี");
		
		if (checkSendMessage($dataColor,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
                			'text' => ''	
						];	
						$isNeedHelp = 1;
		}
			
		$dataDocument = array("เอกสาร","หลักฐาน");
		
		if (checkSendMessage($dataDocument,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
                			'text' => ''	
						];	
						$isNeedHelp = 1;
		}
			
			

		$dataComplete = array("008770");
		
		if (checkSendMessage($dataComplete,$sendMessage) == 1)
		{
			$messages=  [
							'type' => 'text',
               			'text' => ''	
						];	
						$isNeedHelp = 1;
						$help = file_get_contents('https://okpdddlusbot.herokuapp.com/botPushOkplusMotor.php?u=U44e90a4578cb725ccc9ed09d2cdc18e9&m=Done');
						$paymentDetails = file_get_contents('http://okplusssss.ddns.net/okplus/bot/okplusMotorSetState.aspx?u='.$id.'&s=3');
		}

		

		$dataNoSlip= array("ไม่มีสลิป","สลิปไม่มี","สลิปเงินเดือนไม่มี",);

		if (checkSendMessage($dataNoSlip,$sendMessage) == 1)
		{
		
				$messages=  [
								'type' => 'text',
								'text' => ''	
							];	
							$isNeedHelp = 1;
			
		}


		$dataNoProduct= array("ยามา","yama","Yama","Ad","ad","ฟอร","For","za","for");

		if (checkSendMessage($dataNoProduct,$sendMessage) == 1)
		{
		
				$messages=  [
								'type' => 'text',
								'text' => ''	
							];	
							$isNeedHelp = 1;
			
		}


		$dataSlipMonth= array("กี่เดือน");

		if (checkSendMessage($dataSlipMonth,$sendMessage) == 1)
		{
		
				$messages=  [
								'type' => 'text',
								'text' => ''	
							];	
							$isNeedHelp = 1;
			
		}

		$dataSalaryCer= array("รับรองเงินเดือน");
		if (checkSendMessage($dataNoHave,$sendMessage) == 1)
			{
				$messages=  [
								'type' => 'text',
								'text' => ''	
							];	
							$isNeedHelp = 1;
			}
		
		
		$dataGuarantee= array("ค้ำ");
		if (checkSendMessage($dataGuarantee,$sendMessage) == 1)
			{
				$messages=  [
								'type' => 'text',
								'text' => ''	
							];	
							$isNeedHelp = 1;
			}

			
			
		

		$dataOnline = array("สนใจ");
		
		if (checkSendMessage($dataOnline,$sendMessage) == 1)
		{
				$paymentDetails = file_get_contents('info.txt'.$id.'&s=2');
				$isMoreMessage = 0;
				$x_messages = array
									(array
											(
												''
											),
									
										array
												(
										'type' => 'text',
										'text' => ''	
												)
							   );
			
		
							
					
						$isNeedHelp = 1;
		}
			
			
		

							
		}

		
		if (checkSendMessage($dataPayment,$sendMessage) == 1)
		{
			$isNeedHelp = 1;
			$messages	=  	[
								'type' => 'text',
								'text' => ''
						
							];
							
		}

		$dataPayment = array("ผ่อน","ราคา");
		
		if (checkSendMessage($dataPayment,$sendMessage) == 1)
		{
			$isNeedHelp = 1;
			$messages	=  	[
								'type' => 'text',
								'text' => ''
						
							];
							
		}
		$dataShop = array("ไหน","ร้าน","สาขา");
		
		if (checkSendMessage($dataShop,$sendMessage) == 1)
		{
			$isNeedHelp = 1;
			$messages	=  	[
								''
						
							];
							
		}

			$dataLocation = array("lo","Lo");
			if (checkSendMessage($dataLocation,$sendMessage) == 1)
		{
			$isNeedHelp = 1;
				$isMoreMessage=0;
				
			$x_messages = [array(
							'type' => 'text',
							'text' =>'',
							'quickReply' => 
									array(
												'items'=>[array(
																'types'=>'action',
													'action'=>array(
																		'type'=>'location',
																		'label'=>'i am location'
																	)
																)
										  ]
										  
										  )
				)];
				
					
				
				
							
		}
	
	
		if ($isNeedHelp == 0)
		{
			$messageHelp = $userName.":".$sendMessage;
			$help = file_get_contents('info.txt'.$messageHelp);
			
		}

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			
			if ($isMoreMessage ==0)
			{
				$data = [
			 	'replyToken' => $replyToken,
				 'messages' => $x_messages,
			 	];	
				
			}
			else
			{
				$data = [
			 	'replyToken' => $replyToken,
				'messages' => [$messages]
			 	];	
			}
            {
				$name_ =  $userName;
				$user_id = $event['source']['userId'];
                $group_id = $event['source']['groupId'];

				$text = $event['message']['text'];
			   
				$str = (preg_split("/[\n]+/",$text));

                $strs = (preg_split("/[\/|=|*|%|x|@|>|<]/",$str[0]));

                $strm = (preg_split("/[\/|=|*|%|x|@|>|<]/",$str[1]));

                $strl = (preg_split("/[\/|=|*|%|x|@|>|<]/",$str[2]));
				
				
				$sql = "INSERT INTO log (user_id,group_id,name,text,str1,str1_bit,str1_money,str2,str2_bit,str2_money,str3,str3_bit,str3_money,date_time) VALUE 
				('$user_id','$group_id','$name_','$text','$str[0]','$strs[0]','$strs[1]','$str[1]','$strm[0]','$strm[1]','$str[2]','$strl[0]','$strl[1]',now() ) ";
				if(mysqli_query($link, $sql)){
		
			 
				//$paymentDetails = mysqli_real_escape_string ($link, $_REQUEST['paymentDetails']);
		        
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
					
					// Close connection
					mysqli_close($link);
			
               // $userMessage = $events['events'][0]['message']['text'];
			
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo "Reply : " .$result . "\r\n";
		}
	}
}

