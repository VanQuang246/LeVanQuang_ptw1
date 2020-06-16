<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <div class="col-md-4 " id="left-menu">
        <div class="menu-link active">
            About Us
        </div>
        <div class="menu-link">
            FAQ
        </div>
        <div class="menu-link">
            Payment
        </div>
        <div class="menu-link">
            Shipping
        </div>
        <div class="menu-link">
            Oder tracking
        </div>
        <div class="menu-link">
            Returns and refunds
        </div>
        <div class="menu-link">
            Privacy Policy
        </div>
        <div class="menu-link">
            Contact
        </div>
    </div>
</div>

<script>
    var header = document.getElementById("left-menu");
    var btns = header.getElementsByClassName("menu-link");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }
</script>
                    
                    