<?php
	// ส่วนตั้งค่า เรียกใช้งาน UserService ของ Google
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	global $user,$userdata,$appid;
	$user = UserService::getCurrentUser();
	if($user){
		$uid = $user->getUserId();
		$userfile = "gs://$appid/user_$uid.json";
		$userdata = array();
	if(file_exists($userfile)){
	// จะโหลดข้อมูลในไฟล์ json
		$filedata = file_get_contents($userfile);
		$userdata = json_decode($filedata,true);
	}else{
		$userdata['nick']=$user->getNickname();
	}
		$url = UserService::createLogoutUrl('/login.php');
	// แสดงภาพผู้ใช้ โดยการเรียกฟังก์ชัน userpic จากข้อที่ 1
		echo "<img src='".userpic($uid)."' height='180' width='150'><br>";
		echo $userdata['nick'];
		echo "<br><a href='login.php?p=useredit'>Edit User</a>";
		echo "<br><a href='$url'>Logout</a>";
	}else{
		$url = UserService::createLoginUrl('/login.php');
		echo "<a href='$url'>Login or Register</a>";
	}
?>