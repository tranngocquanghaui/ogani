   <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                         
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap" onclick="">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white"onclick="location.href='index.php?controller=search&action=searchParameter&color=white'">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gold
                                    <input type="radio" id="gray"onclick="location.href='index.php?controller=search&action=searchParameter&color=gold'">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red"onclick="location.href='index.php?controller=search&action=searchParameter&color=red'">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black"onclick="location.href='index.php?controller=search&action=searchParameter&color=black'">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue"onclick="location.href='index.php?controller=search&action=searchParameter&color=blue'">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green"onclick="location.href='index.php?controller=search&action=searchParameter&color=green'">
                                </label>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Sản phẩm mới nhất</h4>
                                <div class="latest-product__slider owl-carousel">
                                   
                                     <?php 
                                    include_once 'Controllers/HomeController.php';
                                    $obj= new HomeController();
                                    $obj->newCategoryProducts();

                                 ?>
                                <?php 
                                    include_once 'Controllers/HomeController.php';
                                    $obj= new HomeController();
                                    $obj->newtCategoryProducts();

                                 ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="col-lg-9 col-md-7">
    <div class="product__discount">
        <div class="section-title product__discount__title" style="display: flex;">
            <h2 style="font-size: 20px;">

             Kết quả tìm kiếm:&nbsp; 
             </h2><h2 style="font-size: 20px; font-style: italic; color: blue;  "><?php echo isset($_GET['key'])? $_GET['key']: ""; ?></h2>
        </div>
    </div>
    <div class="filter__item">
        <div class="row">
            
            <div class="col-lg-4 col-md-4">
                <div class="filter__found">
                    <h6><span><?php echo $this->totalRecordSearch(); ?></span> Products found</h6>
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="filter__option">
                    <span class="icon_grid-2x2"></span>
                    <span class="icon_ul"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<?php foreach($listRecord as $rows): ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" >
                	<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>"><img  src="../Assets/Upload/Products/<?php echo $rows->photo; ?>"></a>
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id;?>"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&name=<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h6>
                    <h5 style="text-decoration: line-through; color: #ddd;"><?php echo number_format($rows->price);?>VNĐ</h5>
                    <h5 style="color: red;"><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>VNĐ</h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="product__pagination">
			<?php for($i=1;$i<=$numPage;$i++): ?>
        <a href="index.php?controller=products&action=search&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i;?></a>
       
        
    <?php endfor; ?>
    <a href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>"><i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>