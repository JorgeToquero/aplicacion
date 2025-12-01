<?php
session_cache_limiter('nocache,private');
session_name('admin');
session_start();
session_destroy();
header("location:index.php");





?>