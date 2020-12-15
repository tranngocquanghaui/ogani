 <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm đang khuyến mãi</h2>
                    </div>
                <!--     <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".oranges">Cam</li>
                            <li data-filter=".fresh-meat">Thịt tươi sống</li>
                            <li data-filter=".vegetables">Rau quả</li>
                            <li data-filter=".fastfood">Đồ ăn nhanh</li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="row featured__filter">
                   <?php foreach($products as $rows): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="">
                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>"><img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>"></a>
                            <ul class="featured__item__pic__hover">
                                <li><a ><i id="click" style="cursor: pointer;" class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h6>
                            <h5 style="text-decoration: line-through;"><?php echo number_format($rows->price);?>VNĐ</h5>
                            <div style="color: red;font-weight: bold;font-size: 18px;"><?php echo number_format($rows->price -($rows->price*$rows->discount)/100); ?>VNĐ</div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <script type="text/javascript" >
 
    </script>