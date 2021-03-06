<?php $user = $this->session->userdata('login');?>
<div id="leftSide" style="padding-top:30px;">
    <!-- Account panel -->
    <div class="sideProfile">
        <a href="#" title="" class="profileFace">
            <img width="40" src="<?php echo ($user->Image == NULL)?"public/admin/images/user.png": account_img_url($user->Image)?>"/></a>
        <span><strong><?php echo $user->Name?></strong></span>
       <span><?php if($user->RoleID==1) echo 'Quản lý';
       else echo 'Nhân viên'?></span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>		    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="home">
            <a href="<?php echo admin_url('home');?>" class="active" id="current">
                <span>Bảng điều khiển</span>
                <strong></strong>
            </a>
        </li>
        <li class="tran">
            <a href="admin/tran.html" class=" exp" >
                <span>Quản lý bán hàng</span>
                <strong>2</strong>
            </a>
            <ul class="sub">
                <li >
                    <a href="admin/tran.html">
                        Giao dịch		
                    </a>
                </li>
                <li >
                    <a href="admin/product_order.html">
                        Đơn hàng sản phẩm
                    </a>
                </li>
            </ul>
        </li>
        <li class="product">
            <a href="" class=" exp" >
                <span>Sản phẩm</span>
                <strong>3</strong>
            </a>

            <ul class="sub">
                <li >
                    <a href="admin/product">
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo admin_url('category')?>">
                        Danh mục sản phẩm	
                    </a>
                </li>
                <li >
                    <a href="admin/comment.html">
                        Phản hồi
                    </a>
                </li>
            </ul>

        </li>
        <?php if($user->RoleID==1):?>
        <li class="account">

            <a href="<?php echo admin_url('account')?>" class=" exp" >
                <span>Tài khoản</span>
                <strong>3</strong>
            </a>

            <ul class="sub">
                <li >
                    <a href="<?php echo admin_url('account/admin')?>">
                        Quản trị
                    </a>
                </li>
                <li >
                    <a href="<?php echo admin_url('account/user')?>">
                        Nhân viên
                    </a>
                </li>
                <li >
                    <a href="<?php echo admin_url('account/permission')?>">
                        Quyền	
                    </a>
                </li>
            </ul>

        </li>
        <?php endif;?>
        <li class="support">

            <a href="admin/support.html" class=" exp" >
                <span>Hỗ trợ và liên hệ</span>
                <strong>2</strong>
            </a>

            <ul class="sub">
                <li >
                    <a href="admin/support.html">
                        Hỗ trợ		
                    </a>
                </li>
                <li >
                    <a href="admin/contact.html">
                        Liên hệ		
                    </a>
                </li>
            </ul>

        </li>
        <li class="content">

            <a href="admin/content.html" class=" exp" >
                <span>Nội dung</span>
                <strong>4</strong>
            </a>

            <ul class="sub">
                <li >
                    <a href="admin/slide.html">
                        Slide		
                    </a>
                </li>
                <li >
                    <a href="admin/news.html">
                        Tin tức		
                    </a>
                </li>
                <li >
                    <a href="admin/info.html">
                        Trang thông tin	
                    </a>
                </li>
                <li >
                    <a href="admin/video.html">
                        Video		
                    </a>
                </li>
            </ul>

        </li>

    </ul>

</div>
<div class="clear"></div>
