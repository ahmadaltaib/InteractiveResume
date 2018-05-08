<?php
/**
 * Created by PhpStorm.
 * User: altayeb
 * Date: 5/5/18
 * Time: 6:51 PM
 */

header("Content-disposition: attachment; filename=Ahmad_Ali_CV.pdf");
header("Content-type: application/pdf");
readfile("cv/Ahmad_Ali_CV.pdf");

?>

