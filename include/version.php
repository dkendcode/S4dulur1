<?php
if (!isset($_SESSION["mikhmon"])) {
    header("Location:../admin.php?id=login");
  } else {
        $_SESSION["v"] = "_rOS_6.45.1 08/07/2019";
        //echo '<span style="display:none" id="ver">315</span>';
    
    }
