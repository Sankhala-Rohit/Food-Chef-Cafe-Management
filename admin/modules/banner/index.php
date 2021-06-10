<?php
// $_SESSION['message']="data saved";
if($id){
	// session_start();
	$dbobj->delete('banner',$id);

	$_SESSION['message']="data deleted";
	header("Location:".BASEURL."banner");
	exit;
}
	$alldata=$dbobj->fetchAll("select * from banner order by id desc");


?>
<style type="text/css">
	table{
		
		font-size: 18px;
	}
</style>


<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Title</th>
		<th>Description</th>
		<th>Images</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="5"><a href="<?php echo BASEURL;?>banner/create">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['title'] ?></td>
		<td><?php echo $data['description'] ?></td>
		<td>
			<?php if($data['image']){
							if(file_exists("public/images/$data[image]")){
							?>
								<img class="one" src="<?php echo BASEURL."public/images/$data[image]";?>" height="50px" width="50px" />
							<?php

							}else{
								echo "Not uploaded Properly";
							}

						}else{
							echo "not uploaded";
						}				
			?>
		</td>
		<td>
			<a href="<?php echo BASEURL;?>banner/create/<?php echo $data['id']; ?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="#" onclick="delclick('<?php echo BASEURL;?>banner/index/<?php echo $data['id']; ?>')">Delete</a>
		</td>
	</tr>
	<?php } ?>
	
</table>
<script type="text/javascript">
	function delclick(path)
	{
		if(confirm("do you want to delete this record")){
			location.href=path;
		}
	}
</script>