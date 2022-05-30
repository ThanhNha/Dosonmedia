 <!-- footer Start -->
 <?php 
 $phone = get_field('phone', 'option');
 $location = get_field('location', 'option');
 $email_footer = get_field('email', 'option');
 $link_map = get_field('link_map', 'option');
global $post;
$post_slug = $post->post_name;
 ?>
 <footer id="footer" class="footer" style="
 <?php if($post_slug == 'about'){echo 'background: #fed8a8';}
 if($post_slug == 'service'){echo 'background: #f6f7f8';}
 
 ?>">

     <div class="bg-img">
         <?php
                    $image = get_field('background_footer', 'option');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid logo-dark"));
                    } ?>
     </div>
     <div class="img-animation">
         <?php
                    $image = get_field('footer_image_animation', 'option');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid"));
                    } ?>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-12 "></div>
             <div class="col-md-8 col-12">
                 <div class="footer-logo mb-4 magnetic">
                     <a href="<?php echo home_url(); ?>">
                         <?php
                    $image = get_field('footer_logo', 'option');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid"));
                    } ?>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-3 mr-auto col-12">
             </div>
             <div class="col-lg-4 col-md-6 col-12">
                 <div class="widget mb-md-5 mb-2 mb-lg-0 pr-md-5">
                     <div class="divider mx-md-auto mb-4"></div>
                     <ul class="list-unstyled footer-menu">
                         <li>
                             <a href="#">
                                 <i class="icofont-location-pin"></i>
                                 <span> <?php echo $location;?></span>
                             </a>
                         </li>
                         <li>
                             <a href="tel:<?php echo $phone;?>">
                                 <i class="icofont-phone-circle"></i>
                                 <span> <?php echo $phone;?></span>
                             </a>
                         </li>
                         <li>
                             <a href="mailto: <?php echo $email_footer;?>" target="_blank">
                                 <i class="icofont-email"></i>
                                 <span><?php echo $email_footer;?></span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-5 col-md-6 col-12">
                 <h4 class="uppercase text-white font-semiboild">Đăng ký Email</h4>
                 <p class="text-white">Chúng tối sẽ liên hệ với bạn thông qua Email này.</p>
                 <div class="mt-4">
                     <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                         <!-- <form action="#" class="subscribe">
                             <input type="text" class="form-control" placeholder="Your Email address">
                             <a href="#" class="btn magnetic main-btn btn-round-full">Subscribe</a>
                         </form> -->
                         <?php 
                            echo do_shortcode('[formidable id=2 title=false description=false]');
                         ?>
                     </div>
                     <ul class="list-inline footer-socials mt-4">
                         <li class="list-inline-item"><a href="https://www.facebook.com/doson"><i
                                     class="icofont-facebook"></i></a></li>
                         <li class="list-inline-item"><a href="https://www.pinterest.com/doson/"><i
                                     class="icofont-instagram"></i></a></li>
                         <li class="list-inline-item"><a href="https://www.pinterest.com/doson/"><svg
                                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22"
                                     viewBox="0 0 50 50" style=" fill:#e3e5e5;">
                                     <path
                                         d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z">
                                     </path>
                                 </svg></a></li>
                         <li class="list-inline-item"><a href="https://www.pinterest.com/doson/"><i
                                     class="icofont-youtube-play"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-btm py-4 mt-md-5 mt-2">
         <div class="row align-items-center justify-content-between">
             <div class="col-12">
                 <div class="copyright">
                     &copy; Copyright Reserved to Doson
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-4">
                 <a class="backtop js-scroll-trigger" href="#top">
                     <i class="icofont-scroll-long-up"></i>
                 </a>
             </div>
         </div>
     </div>

 </footer>