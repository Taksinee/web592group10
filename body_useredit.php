<?php
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	global $appid,$user,$userdata;
	if(!$user) return;
		if($_POST["nick"]){
			$uid = $user->getUserId();
			$userdata['nick']=$_POST['nick'];
			$userdata['fname']=$_POST['fname'];
			$userdata['lname']=$_POST['lname'];
			$userdata['Date']=$_POST['Date'];
			$userdata['Tel']=$_POST['Tel'];
			$userdata['color']=$_POST['color'];
			if($_FILES['pic']['tmp_name']!=''){
				$userpic = "gs://$appid/{$uid}.jpg";
				move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
			}
			$json = json_encode($userdata, JSON_PRETTY_PRINT);
			$userfile = "gs://$appid/user_$uid.json";
			file_put_contents($userfile,$json);
			echo "<br>บันทึกเรียบร้อย <a href='login.php?p=edituser'>ตกลง</a>";
			return;
		}
?>
<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group col-md-12" >
			<label for="nick">Nick Name</label>
			<input class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="fname">First Name</label>
			<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
		</div>
		<div class="form-group col-md-6">
			<label for="lname">Last Name</label>
			<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
		</div>
		<div class="form-group col-md-6">
			<label for="Date">Birthday</label>
			<input class="form-control" type='text' name='Date' value="<?=$userdata["Date"]?>">
		</div>
		<div class="form-group col-md-6">
			<label for="Tel">เบอร์โทรศัพท์</label>
			<input class="form-control" type='text' name='Tel' value="<?=$userdata["Tel"]?>">
		</div>
		<div class="form-group col-md-6">
			<label for="color">สีที่ชอบ</label>
			<input class="form-control" type='color' name='color' value="<?=$userdata["color"]?>">
		</div>
		<div class="form-group col-md-6">
			<label for="file">Picture</label>
			<input class="form-control" type='file' name='pic'>
		</div>
		<button class="btn btn-primary"> Save </button>
</form>