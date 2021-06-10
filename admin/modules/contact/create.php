<?php
if($id){

	extract($dbobj->fetchOne('contact',$id));
	
}
if(isset($_POST['name'])){
	
	// print_r($_POST);
	$dbobj->addEdit('contact',$_POST,$id);
	header("location:".BASEURL."contact");
}

?>
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">
	form{
		padding: 20px;
		background-color:#fff;
		/*border: 2px solid;*/
		width: 60%;
		margin: 0 auto;

		box-shadow: 5px 5px 15px;
	}
	form h1{
		text-align: center;
		color: #83FFE3;
		margin: 0;
	}
	div.main{
		padding: 5px;

	}
	form div.one{
		padding: 12px;
		/*border: 1px solid;*/
		margin: 0 auto;
		width: 100%;
	

	}
	form div.one button{
		margin: 0 auto;
	}
	div.one input{
		margin: 10px;
	}
	div.one textarea{
		margin-left: 10px;
		height: 45px;
		width: 150px;
	}
</style>


<form method="post" action="" >
	<h1>CONTACT</h1>
	<div class="main">
		<div class="one">
			Name:<input type="text" name="name" value="<?php echo (isset($name))?$name:'';?>"><br/>
		</div>
		<div class="one">
			E-Mail:<input type="text" name="email" value="<?php echo (isset($email))?$email:'';?>"><br/>
		</div>
		<div class="one">
			Mobile No.:<input type="text" name="mobileno" value="<?php echo (isset($mobileno))?$mobileno:'';?>"><br/>
		</div>
		<div class="one">
			Message:<input type="text" name="msg" value="<?php echo (isset($msg))?$msg:'';?>"><br/>
		</div>
		
		<div class="one">
			<button type="submit">save</button>
	 	</div>
 	</div>
</form>