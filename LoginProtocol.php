<?php
	require_once("hhb_.inc.php");
	require_once("hhb_datatypes.inc.php");
	hhb_init();
	$ip="46.28.204.197";
	$port=800;
	
	
	
	$ret=pro_decode_string(hex2bin("377D2F7D307D2F5D0C0B"));
	var_dump($ret);
	function pro_encode_string($inputstr){
		//CS8vdGhlIGRpY3Rpb25hcnkgaXMgY29uZmlybWVkLg0KCS8vIHRoZSBhbGdvcml0aG0gaXMgYmVzdCBndWVzcy4NCi8qCQkkZGljdGlvbmFyeT1hcnJheSgNCgkJJ2EnPT4nYCcsLy8weDYxLT4weDYwDQoJCSdiJz0+J2MnLC8vMHg2Mi0+MHg2Mw0KCQknYyc9PidiJywvLzB4NjMtPjB4NjINCgkJJ2QnPT4nZScsLy8weDY0LT4weDY1DQoJCSdlJz0+J2QnLC8vMHg2NA0KCQknZic9PidnJywvLzB4NjcNCgkJJ2cnPT4nZicsLy8weDY2DQoJCSdoJz0+J2knLC8vMHg2OQ0KCQkpOyovDQo=
		$ret="";
		$i=0;
		for($i=0;$i<strlen($inputstr);++$i){
			$num=ord($inputstr[$i]);
			if(is_even($num)){
				++$num;
				} else {
				--$num;
			}
			$ret.=chr($num);
		}
		return $ret;
	}
	function pro_decode_string($inputstr){
		return pro_encode_string($inputstr);//its the same algorithm.
	}
	function pro_login($username,$password,$ip,$port){
		$LoginPacket1=hex2bin("4D4E467D2F7D");
		$LoginPacket1.=pro_encode_string($username);
		
	}	
	function is_even($number){
		if(!is_numeric($number)){
			throw new InvalidArgumentException('this base64 is not considered numeric:'.base64_encode($number));
		}
		return ($number % 2 ==0);
	}
