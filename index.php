<?php
    echo M_PI.'<br />';
    echo M_E.'<br />';
    
    $x = -3;
    echo abs($x).'<br />';
    
    $x = 12.3932923;
    echo round($x).'<br />';
    echo round($x, 2).'<br />';
    echo round($x, -1).'<br />';
    
    echo floor($x).'<br />';
    echo ceil($x).'<br />';
    
    echo mt_rand(1, 5).'<br />';
    $arr = [];
    for ($i = 0; $i < 10; $i++) $arr[] = mt_rand(1, 100);
    
    print_r($arr);
    
    echo '<br />';
    echo min(5, 7, -3, 0, 10, 12, 3);
    echo '<br />';
    echo max(5, 7, -3, 0, 10, 12, 3);
    
    echo '<br />';
    echo base_convert("100", 2, 10);
    
    echo '<br />';
    echo sin($x).'<br />';
    echo cos($x).'<br />';
    echo tan($x).'<br />';
    echo (1 / tan($x)).'<br />';
    
    $x = 0.5;
    echo asin($x).'<br />';
    echo acos($x).'<br />';
    echo atan($x).'<br />';
    echo (M_PI / 2 - atan($x)).'<br />';
    
    echo rad2deg(asin($x)).'<br />';
    echo deg2rad(30).'<br />';
?>