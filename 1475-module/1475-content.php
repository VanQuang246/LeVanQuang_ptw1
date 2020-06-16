<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="col-lg-3 col-md-3 col-sx-3">
    <div class="container">
        <div class="row">
        <span class="recent">RECENTLY VIEWED PRODUCTS</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sx-4">
            <img width="100" height="100" class="image-responsive" src="http://<?php echo $url_path ?>/images/11.jpg" alt="" />
            </div>
            <div class="col-lg-8 col-md-8 col-sx-8">
                <span class="product-title">Medium polyester backpack</span><br>
                <span class="old-price"><strike>$99.9</strike></span>
                <u><span class="sale-price">$66.6</span></u>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sx-4">
            <img width="100" height="100" class="image-responsive" src="http://<?php echo $url_path ?>/images/12.jpg" alt="" />
            </div>
            <div class="col-lg-8 col-md-8 col-sx-8">
                <span class="product-title">Medium polyester backpack</span><br>
                <span class="old-price"><strike>$99.9</strike></span>
                <u><span class="sale-price">$6.6</span></u>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sx-4">
            <img width="100" height="100" class="image-responsive" src="http://<?php echo $url_path ?>/images/13.jpg" alt="" />
            </div>
            <div class="col-lg-8 col-md-8 col-sx-8">
                <span class="product-title">Medium polyester backpack</span><br>
                <span class="old-price"><strike>$99.9</strike></span>
                <u><span class="sale-price">$66.6</span></u>
            </div>
        </div>
    </div>
</div>
                    
                    