
	<?php
	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	// SSL USE
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	//POST
	curl_setopt( $chOne, CURLOPT_POST, 1);
	// Message
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=0001000");
	//ถ้าต้องการใส่รุป ให้ใส่ 2 parameter imageThumbnail และimageFullsize
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=เลข 1 เต็มแล้วครับ&imageThumbnail=https://www.img.in.th/images/5fd925b97e806801e74f4773a4da3f5b.png&imageFullsize=https://www.img.in.th/images/5fd925b97e806801e74f4773a4da3f5b.png");
	// follow redirects
	curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
	//ADD header array
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer GYXxcyARiPZjZUQss9lvp41L5p7OR63d2Fu3mRGL452', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	//RETURN
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );
	//Check error
	if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); }
	else { $result_ = json_decode($result, true);
	echo "status : ".$result_['status']; echo "message : ". $result_['message']; }
	//Close connect
	curl_close( $chOne ); ?>
