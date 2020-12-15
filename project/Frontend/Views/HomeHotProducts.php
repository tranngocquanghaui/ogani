 <div class="col-lg-4 col-md-6">
    <div class="latest-product__text">
        <h4>Sản phẩm Hot</h4>
        <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
                <?php foreach($products as $rows): ?>
                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>" class="latest-product__item" style="border: 1px solid #ddd;">
                    <div class="latest-product__item__pic">
                        <img src="../Assets/Upload/Products/<?php echo $rows->photo ?>" alt="">
                    </div>
                    <div class="latest-product__item__text">
                        <h6><?php echo $rows->name; ?></h6>
                        <span><?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?>VNĐ</span>
                    </div>
                </a>
                <?php endforeach; ?>
 </div>
            