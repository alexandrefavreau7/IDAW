<?php


    $langue_def = 'fr';
    if(isset($_GET['lang'])) {
        $langue_def = $_GET['lang'];
        }

    require_once($langue_def."/template_header.php");
    require_once($langue_def."/template_menu.php");

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
        }
    
    

        
    
?>

<header class="bandeau_haut">
<h3 class="titre">Alexandre Favreau</h1>
</header>

<?php       
    renderMenuToHTML($currentPageId,$langue_def);
?>
    

<section class="corps">
<?php
    $pageToInclude =  $langue_def. "/" .$currentPageId . ".php";
    if(is_readable($pageToInclude))
    require_once($pageToInclude);
    else
    require_once($langue_def."error.php");
?>
</section>


<?php
    require_once($langue_def.'/template_footer.php');
?>
