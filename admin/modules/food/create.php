<?php
if($id){

	extract($dbobj->fetchOne('food',$id));
	
}
if(isset($_POST['title'])){
	if($_FILES['image']['name']){
		$_POST['image']=time()."_image_".$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"public/images/".$_POST['image']);
		// print_r($_POST);
	}
	// print_r($_POST);
	$dbobj->addEdit('food',$_POST,$id);
	header("location:".BASEURL."food");
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


<form method="post" action="" enctype="multipart/form-data">
	<h1>Our Food</h1>
	<div class="main">
		<div class="one">
			<?php if(isset($image) && $image){ ?>
						Uploaded Image:
					<?php
					if(file_exists("public/images/$image")){
					?>
						<img src="<?php echo BASEURL."public/images/$image";?>" height="50px" width="50px" />
					<?php
					}else{
						echo "Not uploaded Properly";
					}
				}
			?>
		</div>
		<div class="one">
			Image:<input type="file" name="image" ><br/>
		</div>
		<div class="one">
			Title:<input type="text" name="title" value="<?php echo (isset($title))?$title:''; ?>" ><br/>
		</div>
		<div class="one">
				Description:<input type="text" name="description" value="<?php echo (isset($description))?$description:''; ?>">
		</div>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	 </div>
</form>