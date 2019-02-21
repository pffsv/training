
<p>Please enter your name:</p>

<form action="post.php" method="post">
	<input type="text" name="name123" />
	<input type="submit" />
</form>

<?php

$name_is_empty = $_GET['name_is_empty'];
if ($name_is_empty) {
	echo '<p style="color: red;">Name is required</p>';
}