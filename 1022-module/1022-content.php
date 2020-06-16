<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="col-md-12">
    <div class="mini-cart">
        <button class="icon-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
        <div class="content-mini-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    <img width="100" height="100" class="image-responsive" src="http://<?php echo $url_path ?>/images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-7">
                        <span class="product-name">Laether Summer Shoes</span>
                        <span class="size">Shoes size: 10.5</span><br>
                        <span class="qty-price">2 x 1,500$</span>
                    </div>
                </div>
            </div>
            <div class="container subtotal">
                <div class="row ">
                    <div class="col-md-12">
                    <span class="total">Subtotal: 3000$ </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <button class="viewcart">View cart</button>
                    </div>
                    <div class="col-md-7">
                        <button class="checkout">Check out</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>