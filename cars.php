<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<?php
require 'koneksi.php';
    require 'header.php';
    ?>
<body class="home page-template-default page page-id-3075 woocommerce-no-js ppb_enable">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="http://themes.themegoods.com/grandcarrental/demo/wp-content/themes/grandcarrental/images/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="0" />
    <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="" />
    <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="" />
    <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="" />
    <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black" />
    <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal" />
    <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1" />
    <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8" />
    <input type="hidden" id="tg_cart_url" name="tg_cart_url" value="http://themes.themegoods.com/grandcarrental/demo/cart/" />
    <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0" />
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3" />

    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>

    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">

    <?php
    require 'navbar.php';
    ?>

<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(users/assets/images/hero1.jpg);">

</div>

<!-- Begin content -->
<div id="page_content_wrapper" class="hasbg withtopbar ">
    
<!-- Begin content -->

<div class="inner">

    <div class="inner_wrapper nopadding">

        <div id="page_main_content" class="sidebar_content full_width fixed_column">

            <div class="standard_wrapper">

                <div id="portfolio_filter_wrapper" class="gallery grid three_cols portfolio-content section content clearfix" data-columns="3">

                            <?php
                            $sql = mysqli_query($conn , "SELECT * FROM tbl_mobil");
                            
                            while ($d = mysqli_fetch_array($sql)) {
                            ?>
                    <div class="element grid classic2_cols animated2">


                        <div class="one_half gallery2 grid static filterable portfolio_type themeborder" data-id="post-2" style="background-image:url(admin/assets/img/<?= $d['gambar'] ?>);">
                            <a class="car_image" href="detail.php?id=<?= $d['id'] ?>"></a>
                            <div class="portfolio_info_wrapper">
                                <div class="car_attribute_wrapper">
                                    <h4><?= $d['nama'] ?></h4>

                                    <div class="car_attribute_wrapper_icon">
                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                4 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-briefcase"></div>
                                            <div class="car_attribute_content">
                                                2 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-panel"></div>
                                            <div class="car_attribute_content">
                                                Auto </div>
                                        </div>

                                    </div>
                                    <br class="clear" />
                                </div>
                                <div class="car_attribute_price">
                                    <div class="car_attribute_price_day two_cols">
                                        <span class="single_car_currency">Rp</span><span class="single_car_price"><?= number_format($d['harga'])  ?></span> <span class="car_unit_day">Per Day</span>
                                    </div>
                                </div>
                                <br class="clear" />
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    

                </div>

            </div>
        </div>

    </div>
</div>
</div>

<?php 

require 'footer.php';

?>

</body>
</html>