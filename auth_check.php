<?php

if(!isset($_SESSION['userid'])){
    header("Location: loginform.php");
}
