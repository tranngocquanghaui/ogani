    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
        	<div style="font-size: 30px; border-bottom: 1px solid #ddd; text-align: center;">Đăng nhập tài khoản</div>
            <div class="row" style="margin-top: 40px;">

                <div class="col-lg-6 col-md-6" style="border: 1px solid #ddd;">
                <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
                 <div class="alert alert-danger">Sai mật khẩu hoặc tài khoản </div>
                <?php else: ?>
                    <div style="font-size: 14px;">Nếu bạn đã có tài khoản, vui lòng đăng nhập</div>
                     <?php endif; ?>
                    <fieldset style=" margin-top: 10px;">
                    	<legend style="font-size: 20px;">ĐĂNG NHẬP TÀI KHOẢN</legend>
                    	<form method="POST" action="index.php?controller=account&action=loginPost">
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
	                    			<td><input type="submit" id="submit" value="Đăng nhập"></td>
	                    		</tr>
	                    	</table>
                    	</form>
                    </fieldset>
                </div>

                <div class="col-lg-6 col-md-6" style="border: 1px solid #ddd; ">
                    <div>Nếu chưa có tài khoản, vui lòng đăng kí</div>
                    <a href="index.php?controller=account&action=register"><input type="button" value="Đăng kí" name=""></a>
                </div>
            </div>
        </div>
    </section>
                