<?php
// $_SESSION['message']="data saved";
if($id){
	// session_start();
	$dbobj->delete('contact',$id);

	// $_SESSION['message']="data deleted";
	header("Location:".BASEURL."contact");
	exit;
}
	$alldata=$dbobj->fetchAll("select * from contact order by id desc");


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
		<th>E-Mail</th>
		<th>Mobile No.</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="6"><a href="<?php echo BASEURL;?>contact/create">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['name'] ?></td>
		<td><?php echo $data['email'] ?></td>
		<td><?php echo $data['mobileno'] ?></td>
		<td><?php echo $data['msg'] ?></td>
		<td>
			<a href="<?php echo BASEURL;?>contact/create/<?php echo $data['id']; ?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="#" onclick="delclick('<?php echo BASEURL;?>contact/index/<?php echo $data['id']; ?>')">Delete</a>
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