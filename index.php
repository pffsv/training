<?php
$limit_login_my_error_shown = false; /* have we shown our stuff? */
$limit_login_just_lockedout = false; /* started this pageload??? */
$limit_login_nonempty_credentials = false; /* user and pwd nonempty */
global $limit_login_my_error_shown;
$limit_login_my_error_shown = true;
if (!empty($_COOKIE[LOGGED_IN_COOKIE])) {
$_COOKIE[LOGGED_IN_COOKIE] = '';
}
?>