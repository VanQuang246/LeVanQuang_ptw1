<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-1459">
    <div class="container">
        <div class="row">
            <div class="new-incomes">
                <h3 class="new-incomes-title">
                    NEW INCOMES
                </h3>
                <a href="#">
                    <button class="show-more">
                        Show more
                    </button>
                </a>
                <div class="click-slice">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp1.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp2.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>LEATHER SUMMER SHOES</h6>
                            <h7>$150.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp2.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp3.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>BLACK LEATHER BOOT</h6>
                            <h7>$350.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp3.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp4.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>MEDIUM POLYESTER BACKPACK</h6>
                            <strike>$96.00</strike>
                            <h7>$66.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp4.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp5.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>MEDIUM LEATHER BACKPACK</h6>
                            <h7>$250.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp5.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp6.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>SKINNY LEG JEANS</h6>
                            <h7>$95.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp6.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp7.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>SLINGBACK SANDALS</h6>
                            <h7>$120.00</h7>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="imghvr-fade">
                            <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp7.jpg" alt="" />
                            <figcaption>
                                <img class="img-responsive swap-on-hover-front-image" src="http://<?php echo $url_path ?>/images/sp8.jpg" alt="" />
                            </figcaption>
                        </figure>
                        <div class="icon">
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="shopping-bag">
                                
                                <i class="fa fa-shopping-basket"><p>Select option</p></i>
                            </div>
                        </div>
                        
                        <div class="info">
                            <h6>RED SUNGLASSES</h6>
                            <h7>$169.00</h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>