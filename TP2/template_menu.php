<!-- <nav class="menu">

            <ul>

            <li><a href="index.php">Accueil</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="hobbies.php">Hobbies</a></li>
            <li><a href="formation.php">Formation</a></li>
            <li><a href="infos_techniques.php">Infos technique</a></li>
            </ul>
            </nav> -->


            <?php


function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array( 'Accueil' ),
        'cv' => array( 'CV' ),
        'formation' => array('Formation'),
        'hobbies' => array('Hobbies'),
        'infos_techniques' => array('Infos technique'),
        'contact' => array('Contact'),
    );


    // echo "<p> currentPageId = $currentPageId</p>";

    echo "<nav>";
    echo "<ul>";

    foreach($mymenu as $pageId => $pageParameters){
        echo "<li><a ";

        if($pageId == $currentPageId){
            echo  'id="currentpage"'; 
        }
        echo 'href="index.php?page='.$pageId.'">'.$pageParameters[0];
        
        echo "</a></li>";
    }
    
    echo "</ul>";
    echo "</nav>";
    }




//     foreach($mymenu as $pageId => $pageParameters){
//         echo "<li>";
//         if($pageId == $currentPageId){
//             echo '<a id="currentpage" href="'.$pageId.'.php">'.$pageParameters[0];
//         }else{
//             echo '<a href="'.$pageId.'.php">'.$pageParameters[0];
//         }
//         echo "</a></li>";
//     }
    
//     echo "</ul>";
//     echo "</nav>";
// }
?>
    
<!-- // 

// foreach($mymenu as $pageId => $pageParameters){
//         echo "<li><a ";
//         if($pageId == $currentPageId){
//             echo  'id="currentpage"'; 
//         }
//         echo 'href="index.php?page='.$pageId.'">'.$pageParameters[0];
        
//         echo "</a></li>";
//     }
//  --> 