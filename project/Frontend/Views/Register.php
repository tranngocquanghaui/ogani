    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div style="font-size: 30px; border-bottom: 1px solid #ddd; text-align: center;">Đăng kí tài khoản</div>
            <div class="row" style="margin-top: 40px;">

                <div class="col-lg-6 col-md-6" style="border: 1px solid #ddd;">
                <?php if(isset($_GET["mode"])&&$_GET["mode"]=="success"): ?>
                 <div style="font-size: 14px;color: red;">Đăng kí thành công </div>
                <?php else: ?>
                    <div style="font-size: 14px;">Nếu bạn đã chưa có tài khoản, vui lòng đăng kí</div>
                     <?php endif; ?>
                       <?php if(isset($_GET["mode"])&&$_GET["mode"]=="error"): ?>
                 <div class="alert alert-danger">Email đã tồn tại</div>
             <?php endif; ?>
                    <fieldset style=" margin-top: 10px;">
                        <legend style="font-size: 20px;">ĐĂNG KÍ TÀI KHOẢN</legend>
                        <form method="POST" action="index.php?controller=account&action=registerPost">
                            <table cellpadding="5">
                                <tr>
                                    <td>Email:<b class="star">*</b></td>
                                    <td><input type="text" name="email" required="" autofocus=""><b class="star">(*) không được bỏ trống</b></td>
                                </tr>
                                <tr>
                                    <td>Mật khẩu:<b class="star">*</b> </td>
                                    <td><input type="text" name="password" required=""><b class="star">(*) không được bỏ trống</b></td>
                                </tr>
                                   <tr>
                                    <td>Họ, tên<b class="star">*</b> </td>
                                    <td><input type="text" name="name" required=""><b class="star">(*) không được bỏ trống</b></td>
                                </tr>
                                   <tr>
                                    <td>Phone<b class="star">*</b> </td>
                                    <td><input type="text" name="phone" required=""><b class="star">(*) không được bỏ trống</b></td>
                                </tr>
                                   <tr>
                                    <td>Địa chỉ<b class="star">*</b> </td>
                                    <td><input type="text" name="address" required=""><b class="star">(*) không được bỏ trống</b></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" id="submit" value="Đăng kí"></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </div>

                <div class="col-lg-6 col-md-6" style="border: 1px solid #ddd; ">
                    <div>Nếu đã có tài khoản, vui lòng đăng nhập</div>
                    <a href="index.php?controller=account&action=login"><input type="button" value="Đăng nhập" name=""></a>
                </div>
            </div>
        </div>
    </section>
                