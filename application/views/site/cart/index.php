<?php $user = $this->session->userdata('user_login'); ?>
<div class="columns-container">
    <div id="columns" class="container">
        <div class="row">
            <div id="center_column" class="center_column">
                <div class="row">
                    <div id="left_column" class="column col-sm-12 col-md-12">
                        <?php if (!isset($user)): ?>
                            <div class="col-md-6 log-reg-v3">
                                <form id="sky-form1" class="log-reg-block sky-form"  action="gio-hang.html" method="post">
                                    <h2>Đăng nhập</h2>

                                    <div class="row">
                                        <label class="col-lg-4" for="param_username">Tên đăng nhập</label>
                                        <div class="input login-input col-lg-6">
                                            <input id ="param_username" type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                                            <div class="clear error" name="username_error"><?php echo form_error('username') ?></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-4" for="param_password">Mật khẩu</label>
                                        <div class="input login-input col-lg-8">
                                            <input id="param_password" type="password"  name="password" class="form-control" value="<?php echo set_value('password') ?>">
                                            <div class="clear error" name="password_error"><?php echo form_error('password') ?></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-4"></label>
                                        <div class="col-lg-8">
                                            <a href=""> Quên mật khẩu </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-4"></label>
                                        <div class="col-lg-8">
                                            <div style="color:red"><?php echo form_error('login') ?></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-lg-4"></label>
                                        <div class="col-lg-6">
                                            <button class="btn-u btn-u-sea-shop margin-bottom-20" type="submit">Đăng nhập</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="margin-bottom-20"></div>
                                <p class="text-center">Không có tài khoản? Hãy <a href=""><strong>Đăng kí</strong></a> ngay</p>
                            </div>
                        <?php else: ?>
                            <form class="form-horizontal" action="cart/send/<?php echo $user->CustomerID;?>" method="post" id="myForm">
                                <div class="col-sm-6 col-md-6">
                                    <div class="detail_ct">
                                        <legend>Thông tin liên hệ</legend>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Họ và tên *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="name" id="fullname" class="form-control input-sm field" style="width:300px;" value="<?php echo $user->Name; ?>"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Email *</label>
                                            <div class="col-lg-8">
                                                <input type="text" placeholder="" class="form-control input-sm field" name="email" id="email" style="width:300px;" value="<?php echo $user->Email; ?>"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Số điện thoại *</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control input-sm field" id="phone" name="phone" style="width:300px;" value="<?php echo $user->Phone; ?>"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Địa chỉ *</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control input-sm field" name="address" id="address" style="width:300px;" value="<?php echo $user->Address; ?>"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Ghi chú</label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control input-sm field" name="note" rows="3" style="height:100px;width:300px"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-sm-6 col-md-6">
                                <div class="detail_ct" style="height:auto; min-height:inherit;">
                                    <legend>Giỏ hàng của bạn</legend>
                                    <table class="table" style="background:#FFF; font-size:12px;" id="table_cart">
                                        <thead>
                                            <tr>
                                                <th>Hình</th>
                                                <th>Thông tin sản phẩm</th>
                                                <th style="width:30px;">SL</th>
                                                <th style="width:70px;">Đơn giá</th>
                                                <th style="width:70px;">Tổng</th>
                                                <th style="width:50px;">Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cart as $item): ?>
                                                <tr id="row_129719" style="border-top:1px solid #999;">
                                                    <td rowspan="1"> 
                                                        <img src="<?php echo product_img_url($item['option']['image']); ?>" width="48"> 
                                                    </td>
                                                    <td> 
                                                        <strong>
                                                            <a href="<?php echo product_detail_link($item['id'], $item['name']); ?>" target="_blank">
                                                                <?php echo $item['name']; ?>
                                                            </a>
                                                        </strong> 
                                                        <!--</td>-->
                                                    <td align="right">
                                                        <input class="form-control quantity input-sm" name="number" id="<?php echo "sl-{$item['id']}" ?>" option="0" style="width:60px; text-align:center;" type="number"  value="<?php echo $item['qty']; ?>"
                                                               onchange="updateitem(<?php echo "{$item['id']},{$item['price']}" ?>)"> 

                                                    </td>
                                                    <td align="right" id=""> <?php echo format_price($item['price']) ?> </td>
                                                    <td align="right" id="carttotal-<?php echo $item['id']; ?>"><?php echo format_price($item['price'] * $item['qty']); ?> </td>
                                                    <td align="center">
                                                        <a href="<?php echo 'cart/delete/' . $item['id']; ?>" class="btn btn-default btn-sm btnDelete">
                                                            Xóa
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <script>
                                            function updateitem(id, price) {
                                                $.ajax({
                                                    url: "cart/update_ajax/",
                                                    type: "post",
                                                    dataType: "text",
                                                    data: {
                                                        qty: $('#sl-' + id).val(),
                                                        id: id,
                                                        price: price
                                                    },
                                                    success: function (result) {
                                                        $('#carttotal-' + id).html(result);
                                                    }

                                                });
                                                $('#tongtien').load('cart/load_cart_total');
                                            }
                                        </script>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6"> <a class="btn btn-default hidden-xs" style="float:right;" href="index.php">Quay về</a>
                                                    <div class="clr"></div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>
                                    <legend style="float:left;width: 200px; border-bottom: none; margin-left: 20px" id="">Tổng tiền</legend>
                                    <legend style="float:right;width: 200px;border-bottom: none;text-align: right" id="tongtien"><?php echo format_price($total); ?></legend>  
                                    <div style="clear:both"></div>
                                    <fieldset style="text-align: right">

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label"></label>
                                            <div class="col-lg-8">
                                                <input type="submit" style="width:auto;" name="submit_step1" class="btn btn-danger btn-buynow" value="Gửi đơn hàng"> </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="clr"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>