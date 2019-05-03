<?php
// This won't work because of the quotes around specialH5!
echo "<h5 class="specialH5">I love using PHP!</h5>";  

// OK because we escaped the quotes!
echo "<h5 class=\"specialH5\">I love using PHP!</h5>";  

// OK because we used an apostrophe '
echo "<h5 class='specialH5'>I love using PHP!</h5>";  
?>