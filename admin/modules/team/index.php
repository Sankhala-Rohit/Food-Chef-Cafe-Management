<?php
// $_SESSION['message']="data saved";
if($id){
	// session_start();
	$dbobj->delete('team',$id);

	$_SESSION['message']="data deleted";
	header("Location:".BASEURL."team");
	exit;
}
	$alldata=$dbobj->fetchAll("select * from team order by id desc");
	
?>
<style type="text/css">
	table{
		font-size: 20px;
	}
</style>



<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Description</th>
		<th>photos</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="5"><a href="<?php echo BASEURL;?>team/create">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['name'] ?></td>
		<td><?php echo $data['title'] ?></td>
		<td>
			<?php if($data['photo']){
							if(file_exists("public/images/$data[photo]")){
							?>
								<img class="one" src="<?php echo BASEURL."public/images/$data[photo]";?>" height="50px" width="50px" />
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
			<a href="<?php echo BASEURL;?>team/create/<?php echo $data['id']; ?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="#" onclick="delclick('<?php echo BASEURL;?>team/index/<?php echo $data['id']; ?>')">Delete</a>
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