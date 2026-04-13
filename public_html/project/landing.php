<?php
require(__DIR__."/../../partials/nav.php");
?>
<h1>Landing Page</h1>
<?php
error_log("Session: ". var_export($_SESSION, true));
if (is_logged_in()) {
    // Note, we don't need to use 'se()' here sinse 'get user_email()' uses it intertnally
    echo "Welcome, " . get_user_email();
} else {
    echo "Your'e not logged in";
}
?>