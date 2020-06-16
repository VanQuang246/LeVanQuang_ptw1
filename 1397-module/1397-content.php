<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<footer>
    <div class="col-md-12">
        <div class="row folow">
            <div class="col-md-3">
                <div class="fashionstore">
                <img src="https://the7.io/fashion-store/wp-content/uploads/sites/73/2020/05/store-logo-bottom.png" alt="fs" class="img-reponsive">
                <br>
                <a class=bg-icon><i class="fab fa-facebook"></i></a>
                <a class=bg-icon><i class="fab fa-twitter"></i></a>
                <a class=bg-icon><i class="fab fa-youtube"></i></a>
                <a class=bg-icon><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
        <div class="col-md-2" style="font-size: 14px; line-height: 1.3em; color: #666;">
            <ul>
                <li><a href="#" class="elementor-item ">About us</a></li>                   
                <li><a href="#" class="elementor-item ">Blog</a></li>
                <li><a href="#" class="elementor-item ">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-2" style="font-size: 14px; line-height: 1.3em; color: #666;">
            <ul>
                <li><a href="#" class="elementor-item ">Privacy Policy</a></li>                   
                <li><a href="#" class="elementor-item ">FAQs</a></li>
                <li><a href="#" class="elementor-item ">Oder tracking</a></li>
            </ul>
        </div>
        <div class="col-md-2" style="font-size: 14px; line-height: 1.3em; color: #666;">
            <ul>
                <li><a href="#" class="elementor-item ">Payment</a></li>                   
                <li><a href="#" class="elementor-item ">Shipping</a></li>
                <li><a href="#" class="elementor-item ">Return and refunds</a></li>
            </ul>
        </div>
        <div class="col-md-3 clo-3">
            <div class="button-ser">
                <input type="text" name="mc_email" class="mail" value="" placeholder="Enter your email" required="required">
                <button type="submit" name="submit" class="sub">Subscribe </button>  
            </div>
			<div class="subs">
				<span class="zn-uppercase" >Subscribe now and get 10% off new collection garments!</span>
			</div>
        </div>

    </div>
</div>
</div>
</footer>