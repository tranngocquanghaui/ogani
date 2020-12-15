<?php 
	include '../Application/Connection.php';
	$conn=Connection::getInstance();
	$key=isset($_GET['key'])? $_GET['key']: "";
	$query=$conn->query("select id, name, photo from products where name like '%$key%' limit 4");
	$record=$query->fetchAll();

 ?>
<?php foreach($record as $rows): ?>
	<li><a style="color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id ?>&name=<?php echo $rows->name; ?>"><img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>"><?php echo $rows->name;?></a></li>
<!-- 	<style type="text/css">
		a:hover{
			color: red;
		}
		li:hover{
			background: #ddd;
			width: 100%;
		}
	</style> -->
<?php endforeach;?>