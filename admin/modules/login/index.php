<?php 
if(isset($_POST['username'])){
	$_POST['password']=md5($_POST['password']);
	$qry="select id from login where username='$_POST[username]' and password='$_POST[password]'";	
	if($dbobj->fetchRow($qry)){
		$data=$dbobj->loginFetchOne($qry);
		$_SESSION['logindtl']=$data;
		header("location:".BASEURL);
	}
}
?>
<form method="post">
	<table class="table table-bordered table-striped">
		<tr>
			<th colspan="2" style="text-align: center;">Login Form</th>
		</tr>
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" value="submit" class="btn btn-primary"></td>
		</tr>
	</table>
</form>