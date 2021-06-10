<?php
print_r($_POST);
if($id){
	$id=$id;

	$msg="Data updated successfully.";
	extract($dbobj->fetchOne('team',$id));
	
}
if(isset($_POST['name'])){
	if($_FILES['photo']['name']){
		$_POST['photo']=time()."_photo_".$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"public/images/".$_POST['photo']);
		// print_r($_POST);
	}
	// print_r($_POST);
	$dbobj->addEdit('team',$_POST,$id);
	header("location:".BASEURL."team");
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
	<h1>TEAM</h1>
	<div class="main">
		<div class="one">
			<?php if(isset($photo) && $photo){ ?>
						Uploaded Image:
					<?php
					if(file_exists("public/images/$photo")){
					?>
						<img src="<?php echo BASEURL."public/images/$photo";?>" height="50px" width="50px" />
					<?php
					}else{
						echo "Not uploaded Properly";
					}
				}
			?>
		</div>
		<div class="one">
			Photo:<input type="file" name="photo"><br/>
		</div>
		<div class="one">
			Name:<input type="text" name="name" value="<?php echo (isset($name))?$name:'';?>"><br/>
		</div>
		<div class="one">
			Title:<input type="text" name="title" value="<?php echo (isset($title))?$title:'';?>"><br/>
		</div>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	 </div>
</form>