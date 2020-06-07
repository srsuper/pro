<?php
   $accessToken = "M9lzosmJ3jWLvleCM/wd/kTeXtFvt+SbFn3FXIIX1ou0/ArZTZOici0dgq3WE0AH6/G7Qg04UDxjzknLGKHtGh3uBF57yLfPhYI/cR+JKLlEgsefQ/t9+4T8baXxYQOJ0gGwtPOFo5tE0xknij3SB5pUdcl/jeq2MDsp33paxx0=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   
   	//รับ id ของผู้ใช้
  	// $id = "U44e90a4578cb725ccc9ed09d2cdc18e9";
    $Round= $_GET['Round'];
    	$open = $_GET['open'];
       echo($id);
       echo($text);
			//$paymentDetails = file_get_contents('http://okpl123us.ddns.net/okplus/bot/getPaymentList.aspx?u='.$id);
			//		$paymentDetails = "1,430:Big C:14 เมษายน 2563:ชำระค่างวดรถจักรยานยนต์:ราณี สายใจ:8กร 2513:62RC-06200:62/0147:621478";
					$str_arr = explode (":", $text);  
					
					$amount=$str_arr[0];
					$channel = $str_arr[1];
					$dt = $str_arr[2];
					$detail = $str_arr[3];
					$name = $str_arr[4];
					$plate = $str_arr[5];
					$receiptId = $str_arr[6];
					$contractId = $str_arr[7];
					$reference = $str_arr[8];
					
					
					

					
				
					// Build message to reply back
          $messages = [
					
            "type" => "flex",
                  
          
            
           "altText" => "ใบเสร็จรับเงิน",
           "contents" => [
           "type" => "bubble",
           "direction" => "ltr",
           "header" => [
             "type" => "box",
             "layout" => "vertical",
             "contents" => [
             [
               "type" => "text",
               "text" => "ใบสรุปรอบ",
               "size" => "lg",
               "align" => "start",
               "weight" => "bold",
               "color" => "#009813"
             ],
             [
               "type" => "text",
               "text" => "฿".$amount,
               "size" => "3xl",
               "weight" => "bold",
               "color" => "#000000"
             ],
             [
               "type" => "text",
               "text" => $name,
               "size" => "lg",
               "weight" => "bold",
               "color" => "#000000"
             ],
             [
               "type" => "text",
               "text" => $dt,
               "size" => "xs",
               "color" => "#B2B2B2"
             ],
             [
               "type" => "text",
               "text" => $detail,
               "margin" => "lg",
               "size" => "lg",
               "color" => "#000000"
             ]
             ]
           ],
           "body" => [
             "type" => "box",
             "layout" => "vertical",
             "contents" => [
             [
               "type" => "separator",
               "color" => "#C3C3C3"
             ],
             [
               "type" => "box",
               "layout" => "baseline",
               "margin" => "lg",
               "contents" => [
               [
                 "type" => "text",
                 "text" => "เลขที่ใบเสร็จรับเงิน",
                 "align" => "start",
                 "color" => "#C3C3C3"
               ],
               [
                 "type" => "text",
                 "text" => $receiptId,
                 "align" => "end",
                 "color" => "#000000"
               ]
               ]
             ],
             [
               "type" => "box",
               "layout" => "baseline",
               "margin" => "lg",
               "contents" => [
               [
                 "type" => "text",
                 "text" => "สัญญาเลขที่",
                 "color" => "#C3C3C3"
               ],
               [
                 "type" => "text",
                 "text" => $contractId,
                 "align" => "end"
               ]
               ]
             ],
             
             
            [
               "type" => "box",
               "layout" => "baseline",
               "margin" => "lg",
               "contents" => [
               [
                 "type" => "text",
                 "text" => "sub",
                 "color" => "#C3C3C3"
               ],
               [
                 "type" => "text",
                 "text" => $reference,
                 "align" => "end"
               ]
               ]
             ],
            [
               "type" => "box",
               "layout" => "baseline",
               "margin" => "lg",
               "contents" => [
               [
                 "type" => "text",
                 "text" => "รวม ",
                 "color" => "#C3C3C3"
               ],
               [
                 "type" => "text",
                 "text" => $channel,
                 "align" => "end"
               ]
               ]
             ],
             
            [
               "type" => "box",
               "layout" => "baseline",
               "margin" => "lg",
               "contents" => [
               [
                 "type" => "text",
                 "text" => "ชำระได้ที่ เลขบัญชี",
                 "color" => "#C3C3C3"
               ],
               [
                 "type" => "text",
                 "text" => $plate,
                 "align" => "end"
               ]
               ]
             ],
             
             
             
             [
               "type" => "separator",
               "margin" => "lg",
               "color" => "#C3C3C3"
             ]
             ]
           ],
           "footer" => [
             "type" => "box",
             "layout" => "horizontal",
             "contents" => [
             [
               "type" => "text",
               "text" => "- เงินทองกินกัน ความสัมพันธ์ เหมือนเดิม -",
               "size" => "lg",
               "align" => "start",
               "color" => "#0084B6",
               "action" => [
               "type" => "uri",
               "label" => "View Details",
               "uri" => "www.Pnck@SKT.com"
               ]
             ]
             ]
           ]
           ]
          
                   
                     ];	
                 
                    
        
                  
                	
					
					
					    
					










      
	$data = [
				'to' => $id,
				'messages' => [$messages],
			];
			$post = $data;
   
      //$arrayPostData['to'] = $id;
      //$arrayPostData['messages'][0]['type'] = "text";
      //$arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
      //$arrayPostData['messages'][1]['type'] = "sticker";
      //$arrayPostData['messages'][1]['packageId'] = "2";
      //$arrayPostData['messages'][1]['stickerId'] = "34";
      pushMsg($arrayHeader,$post);
   
   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;
?>