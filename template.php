<?php

//require_once('_View\HeaderPage.php');
//require_once('_App\ApplicationController.php');
//require_once('_App\TemplateManager.php');
//require_once ('_App\ScreenSwitcher.php');
//$header = new HeaderPage("Online Store");

/*try {
    $currentScreen = ApplicationController::getCurrentScreen();
    $currentScreen->SetupScreen();
} catch (Exception $e) {
    echo $e;
}*/

?>
<!DOCTYPE HTML>
<html>
    <?php
        //TemplateManager::GetHeader()->DisplayHeader();
    ?>
<body>
    <div class ="container">
    <?php
        //TemplateManager::GetBreadcrumb()->Display();
        //TemplateManager::GetTitleDisplay()->Display();
        //ApplicationController::getCurrentScreen()->Display();
        //echo file_get_contents(ApplicationController::$currentScreen);
        echo "This Works!!";
    ?>
    </div>
</body>
</html>
