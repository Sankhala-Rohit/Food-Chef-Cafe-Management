<?php
if($id){	
	$dbobj->delete('services',$id);
	header("Location:".BASEURL."services");
	exit;
}
	$alldata=$dbobj->fetchAll("select * from services order by id desc");

?>
<style type="text/css">
	table{
		font-size: 20px;
	}
</style>



<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Icon</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="4"><a href="<?php echo BASEURL;?>services/create">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['icon'] ?></td>
		<td><?php echo $data['description'] ?></td>
		<td>
			<a href="<?php echo BASEURL;?>services/create/<?php echo $data['id']; ?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="#" onclick="delclick('<?php echo BASEURL;?>services/index/<?php echo $data['id']; ?>')">Delete</a>
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