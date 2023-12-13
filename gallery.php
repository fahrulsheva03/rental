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
    

    <div id="page_caption" class="withtopbar ">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <h1 class="withtopbar">Gallery</h1>
                    <div class="page_tagline">
                        This is sample of gallery excerpt and you can set it up using gallery option </div>
                </div>
            </div>
        </div>

        <div id="page_content_wrapper" class="">
            <div class="inner">

                <div class="inner_wrapper nopadding">

                    <div id="page_main_content" class="sidebar_content full_width nopadding fixed_column">

                        <div id="portfolio_filter_wrapper" class="gallery four_cols portfolio-content section content clearfix" data-columns="4">

                            <?php
                            $sql = mysqli_query($conn , "SELECT * FROM tbl_mobil");
                            
                            while ($d = mysqli_fetch_array($sql)) {
                            ?>
                            <div class="element grid classic4_cols">

                                <div class="one_fourth gallery4 static filterable gallery_type animated1" data-id="post-1">

                                    <a data-caption="The road to success and the road to failure are almost exactly the same" class="fancy-gallery" href="users/assets/upload/2016-Lexus-RX-350-BM-01.jpg">
                                        <img height="50" width="50" src="admin/assets/img/<?= $d['gambar'] ?>" alt="" />

                                    </a>

                                </div>

                            </div>

                            <?php } ?>


                        </div>
                    </div>

                </div>
            </div>
            <br class="clear" />
        </div>

        <?php 
        
        require 'footer.php'
        
        ?>

</body>
</html>