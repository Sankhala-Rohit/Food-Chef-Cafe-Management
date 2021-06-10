<?php

	extract($dbobj->fetchOne('about',1));
	
if(isset($_POST['description'])){
	// print_r($_POST);
	$dbobj->addEdit('about',$_POST,$id);
	header("location:".BASEURL."about");
}

?>
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
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


<form method="post" action="">
	<h1>About</h1>
	<div class="main">
		<textarea name="description" id="editor"><?php echo (isset($description))?$description:'';?></textarea>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	 </div>
</form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>