<?php
session_start();
session_destroy();
echo '<a href="login.html">Login again</a>';
exit;
