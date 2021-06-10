<?php

if(isset($_POST['title'])){
	if($_FILES['image']['name']){
		$_POST['image']=time()."_Photo_gallary_".$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"public/images/".$_POST['image']);
		// print_r($_POST);
	}
	// print_r($_POST);
	$dbobj->addEdit('photo_gallary',$_POST,$id);
	header("location:".BASEURL."photo_gallary");
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
	div.one textarea{
		margin-left: 10px;
		height: 45px;
		width: 150px;
	}
</style>


<form method="post" action="" enctype="multipart/form-data">
	<h1>PHOTO GALLARY</h1>
	<div class="main">
		<div class="one">
			Image:<input type="file" name="image"><br/>
		</div>
		<div class="one">
			Title:<input type="text" name="title"><br/>
		</div>
		<div class="one">
				Date:<input type="date" name="datee">
		</div>
		<div class="one">
			Group:<textarea name="groupp"></textarea>
				<br/>
		</div>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	 </div>
</form>