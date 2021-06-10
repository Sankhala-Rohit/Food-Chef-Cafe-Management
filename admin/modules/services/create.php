<?php
// print_r($_GET);
if($id){
	extract($dbobj->fetchOne('services',$id));
}
if(isset($_POST['icon'])){
	// print_r($_POST);echo "hello";exit;
	$dbobj->addEdit('services',$_POST,$id);
	header("location:".BASEURL."services");
}

?>
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
	
</style>


<form method="post" action="">
	<h1>SERVICES</h1>
	<div class="main">
		<div class="one">
			Icons:<input type="text" name="icon" value="<?php echo (isset($icon))?stripcslashes($icon):'';?>"><br/>
		</div>
		<div class="one">
			Description:<input type="text" name="description" value="<?php echo (isset($description))?$description:'';?>"> <br/>
		</div>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	</div>
</form>