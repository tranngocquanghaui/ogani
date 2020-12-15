<ul class="list-unstyled level1" style="position: absolute; z-index: 15; background: white; width: 262px; ">
	<?php $category=$this->modelListCategory(); ?>
	<?php foreach($category as $rows): ?>
		<li style="font-weight: bold; "><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
		   <?php 
		   //goi cap con
		   $categorySub=$this->modelListCategorySub($rows->id);

		    ?>
		    <?php foreach($categorySub as $rowsSub): ?>
		    	<li style="padding-left: 20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>">-<?php echo $rowsSub->name; ?></a></li>
		    <?php endforeach; ?>
	     <?php endforeach; ?>
	</ul>