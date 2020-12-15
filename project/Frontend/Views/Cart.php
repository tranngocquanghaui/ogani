 <section class="breadcrumb-section set-bg" data-setbg="../Assets/Frontend/img/breadcrumb.jpg" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php?controller=cart&action=read">Giỏ Hàng</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
   <form action="index.php?controller=cart&action=update" method="post">
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['cart'])): ?>
                                <?php foreach ($_SESSION['cart'] as $product): ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="../Assets/Upload/Products/<?php echo $product['photo']; ?>" alt="">
                                        <h5><a style="color:black;" class="detail" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h5>
                                       
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo number_format($product['price']); ?>VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                               <input type="number"min="1" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                         <?php echo number_format($product["number"]*$product["price"]); ?>VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a class="delete" href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>">Xóa</a>
                                    </td>
                                       <style type="text/css">
                            .delete{
                                width: 30px;
                                color: red; 
                                margin-left: 10px;
                                border: 1px solid #ddd;
                            }
                            .delete:hover{
                                color: red;
                            }
                        </style>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">Tiếp tục mua</a>
                        <a href=""><input type="submit" class="button pull-right" value="Cập nhật">
                        </a>
                    </div>
                </div>
               <!--  <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Tổng đơn hàng</h5>
                        <ul>
                           
                            <li>Thành tiền<span> <?php echo number_format($this->cartTotal()); ?>VNĐ</span></li>
                        </ul>
                        <?php if(isset($_SESSION['customer_email'])): ?>
                        <a href="index.php?controller=cart&action=checkout" class="primary-btn">Thanh toán</a>
                        <?php else: ?>
                           <h5>Vui lòng đăng nhập để tiến hành thanh toán.</h5>
                           <a href="index.php?controller=account&action=login" ><input type="button" name="" value="Đăng nhập"></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
