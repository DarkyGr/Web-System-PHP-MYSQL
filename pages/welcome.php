<!-- ============== | head | =================-->
<?php  
session_start();    // Save the session

include "layouts/head.php";     ?>
<!--==========================================-->


<!-- =========== | contenido | ===============-->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
        <?php if (isset($_SESSION["user"])) {
            echo $_SESSION["user"]["name_u"].' '.$_SESSION["user"]["last_name"];
        }?>     
        </div>
    </div>
</div>
<!--==========================================-->

<!-- ========= | scripts robust | ============-->
<?php  include "layouts/main_scripts.php"; ?>
<!--==========================================-->

<!-- ============= | footer | ================-->
<?php  include "layouts/footer.php";      ?>
<!--==========================================-->



