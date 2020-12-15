<div class="latest-prdouct__slider__item">
	<?php foreach($products as $rows): ?>
    <a style="border: 1px solid #ddd; font-size: 10px; " href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>" class="latest-product__item">
        <div class="latest-product__item__pic">
            <img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>">
        </div>
        <div class="latest-product__item__text">
            <h6><?php echo $rows->name; ?></h6>
            <span><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>VNĐ</span>
        </div>
    </a>
    <?php endforeach; ?>
</div>