<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<?php

require 'koneksi.php';
require 'header.php';

if(!isset($_SESSION['login'])){
    echo "
    <script>
    alert('anda belum login')
    location = 'index.php'
    </script>
    ";
}

$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tbl_mobil WHERE id = $id ");
$d = mysqli_fetch_assoc($sql);

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


        <div id="page_caption" class="hasbg  withtopbar " style="background-image:url(admin/assets/img/<?= $d['gambar'] ?>);">


            <div class="single_car_header_content">
                <div class="standard_wrapper">
                    <div class="single_car_header_price">
                        <span id="single_car_price"><span class="single_car_currency">Rp</span><span class="single_car_price"><?= number_format($d['harga'])  ?></span></span>
                        <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner_wrapper">

                    <div class="sidebar_content">

                        <h1><?=  $d['nama'] ?></h1>
                        <div class="car_attribute_wrapper">
                            <div class="car_attribute_rating">
                            </div>
                        </div>
                        <div class="single_car_attribute_wrapper themeborder">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    2&nbsp;Passengers </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    1&nbsp;Luggage </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    Auto </div>
                            </div>

                            <div class="one_fourth last">
                                <div class="car_attribute_icon ti-car"></div>
                                <div class="car_attribute_content">
                                    2&nbsp; Doors </div>
                            </div>
                        </div>
                        <br class="clear" />
                        <div class="single_car_content">
                            <h4 class="p1">Refueling</h4>
                            <p class="p2">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                            <h4 class="p1">Car Wash</h4>
                            <p class="p2">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                            <h4 class="p1">No Smoking</h4>
                            <p class="p2">See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                        </div>


                        <div class="fullwidth_comment_wrapper sidebar">

                            

                            <div>
                                <a name="comments"></a>

                                <div class="comment" id="comment-52">
                                    <div class="gravatar">
                                        <img src="upload/author1-100x100.jpg" width="60" height="60" alt="Jack Dawson" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                                    <div class="right ">


                                        <a rel='nofollow' class='comment-reply-link' href='#'  aria-label='Reply to Jack Dawson'>Reply</a>
                                        <div class="comment_text" />
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear" />
                            </li>
                            <!-- #comment-## -->

                            <div class="comment" id="comment-53">
                                <div class="gravatar">
                                    <img src="upload/me-100x100.jpg" width="60" height="60" alt="Anna Kornikova" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                                <div class="right ">

                                    <h7>Anna Kornikova</h7>

                                    <div class="comment_date">January 18, 2017 at 8:12 am</div>
                                    <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Anna Kornikova'>Reply</a>
                                    <div class="comment_text" />
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth,</p>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Driving</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Interior Layout</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Space &amp; Practicality</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Overall</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br class="clear" />
                        </li>
                        <!-- #comment-## -->

                        <div class="comment" id="comment-54">
                            <div class="gravatar">
                                <img src="upload/avatar-100x100.png" width="60" height="60" alt="Marie Argeris" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                            <div class="right ">

                                <h7>Marie Argeris</h7>

                                <div class="comment_date">January 18, 2017 at 8:12 am</div>
                                <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Marie Argeris'>Reply</a>
                                <div class="comment_text" />
                                <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                    </li>
                    <!-- #comment-## -->

                    <div class="comment" id="comment-55">
                        <div class="gravatar">
                            <img src="upload/author2-100x100.jpg" width="60" height="60" alt="Jessica Medina" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                        <div class="right ">

                            <h7>Jessica Medina</h7>

                            <div class="comment_date">January 18, 2017 at 8:12 am</div>
                            <a rel='nofollow' class='comment-reply-link' href='#' onclick='return addComment.moveForm( "comment-55", "55", "respond", "155" )' aria-label='Reply to Jessica Medina'>Reply</a>
                            <div class="comment_text" />
                            <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                </li>
                <!-- #comment-## -->
            </div>

            <!-- End of thread -->
            <div style="height:10px"></div>

            <div id="respond" class="comment-respond">
               
                </div><!-- #respond -->

            </div>

        </div>

        <div class="sidebar_wrapper">

            <div class="sidebar_top"></div>

            <div class="sidebar">

                <div class="content">

                    <div class="single_car_header_price">
                        <span id="single_car_price_scroll"><span class="single_car_currency">sp</span><span class="single_car_price"><?=  number_format($d['harga'])  ?></span></span>
                        <span id="single_car_price_per_unit_change_scroll" class="single_car_price_per_unit">
                            <span id="single_car_unit_scroll">Per Day</span>
                        <span class="ti-angle-down"></span>

                        <ul id="price_per_unit_select_scroll">
                            <li class="icon arrow"></li>
                            <li class="active">
                                <a class="active" href="javascript:;" data-filter="car_price_day" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;1810&lt;/span&gt;">Per Day</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_hour" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;30&lt;/span&gt;">Per Hour</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_airport" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;170&lt;/span&gt;">Airport Transfer</a>
                            </li>
                        </ul>
                        </span>
                        <hr/>
            </div>

            <div class="single_car_booking_wrapper themeborder book_instantly">
                <div role="form" class="wpcf7" id="wpcf7-f161-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="proses.php" method="post" class="wpcf7-form" novalidate="novalidate">

                        <p>
                            <input type="text" name="id" hidden value="<?= $id ?>"  >
                            <label> Tanggal Pinjam
                                <br />
                                <span class="wpcf7-form-control-wrap your-name"><input type="date" name="pinjam" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="John Doe" /></span> </label>
                        </p>
                        <p>
                            <label> Sampai Tanggal
                                <br />
                                <span class="wpcf7-form-control-wrap your-email"><input type="date" name="sampai" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="sample@yourcompany.com" /></span> </label>
                        </p>
                            <input type="submit" value="Request for Booking" class="wpcf7-form-control wpcf7-submit" />
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
                <div class="single_car_booking_divider">
                </div>
                <div class="single_car_booking_woocommerce_wrapper">
                </div>
                <div class="single_car_view_wrapper themeborder">

                </div>
            </div>


            <div class="single_car_users_online_wrapper themeborder">
                <div class="single_car_users_online_icon">
                    <span class="ti-info-alt"></span>
                </div>
                <div class="single_car_users_online_content">
                    <strong>231</strong> traveler(s) are considering our cars right now! </div>
            </div>

        </div>

    </div>
    <br class="clear" />

    <div class="sidebar_bottom"></div>
    </div>

    </div>
    <!-- End main content -->

    <br class="clear" />
    <div class="car_related">
        <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
            
        </div>
    </div>

    </div>
    </div>





        <div id="footer" class=" r">

            <ul class="sidebar_widget three">
                <li id="text-2" class="widget widget_text">
                    <h2 class="widgettitle">About Us</h2>
                    <div class="textwidget">
                        <p>Getting dressed up and traveling with good friends makes for a shared, unforgettable experience. </p>
                        <p><img src="images/logo@2x_white.png" alt="" width="175" height="24"></p>
                    </div>
                </li>
                <li id="text-3" class="widget widget_text">
                    <h2 class="widgettitle">Contact Info</h2>
                    <div class="textwidget">
                        <p><span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227</p>
                        <p><span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007</p>
                        <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00 Sunday CLOSED</p>
                        <div style="margin-top:20px;">
                            <div class="social_wrapper shortcode dark ">
                                <ul>
                                    <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="mc4wp_form_widget-5" class="widget widget_mc4wp_form_widget">
                    <h2 class="widgettitle">Newsletter</h2>

                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-27" method="post" data-id="27" data-name="Newsletter">
                        <div class="mc4wp-form-fields">Don't miss a thing! Sign up to receive daily deals

                            <input type="email" name="EMAIL" placeholder="Your Email Address" required />
                            <br/>
                            <input type="submit" value="Subscribe" />
                        </div>
                        <label style="display: none !important;">Leave this field empty if you're human:
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                        </label>

                        <div class="mc4wp-response"></div>
                    </form>
                </li>
            </ul>
        </div>

        <div class="footer_bar  ppb_wrapper ">

            <div class="footer_bar_wrapper ">
                <div class="menu-footer-menu-container">
                    <ul id="footer_menu" class="footer_nav">
                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                        <li class="menu-item"><a href="home-4-limousine-service.html">Limousine</a></li>
                        <li class="menu-item"><a href="our-services.html">Services</a></li>
                        <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div id="copyright">© Copyright Grand Car Rental HTML Template - Template by Max Themes</div>
                <br class="clear" />
            </div>
        </div>
    </div>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
    </div>

 

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/grandcarrental-custom-post/js/jquery.barrating.js'></script>
    <script type='text/javascript' src='js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='js/plugins/ui/core.min.js'></script>
    <script type='text/javascript' src='js/plugins/ui/datepicker.min.js'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript' src='js/plugins/jquery.requestAnimationFrame.js'></script>
    <script type='text/javascript' src='js/plugins/ilightbox.packed.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='js/plugins/waypoints.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.isotope.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.masory.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.sticky-kit.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.stellar.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>
    <script type='text/javascript' src='js/plugins/custom_plugins.js'></script>
    <script type='text/javascript' src='js/plugins/custom.js'></script>
    <script type='text/javascript' src='js/plugins/custom_onepage.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script>
        jQuery(function() {
            jQuery("#driving_rating, #interior_rating, #space_rating, #overall_rating").barrating({
                theme: "fontawesome-stars-o",
                emptyValue: 0,
                allowEmpty: true
            });

            jQuery("#driving_rating, #interior_rating, #space_rating, #overall_rating").barrating("set", 0);
        });
    </script>
</body>
</html>

