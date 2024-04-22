<?php 
include "topo.php";

?>
<div class="mala">
<?php
    if (isset($_GET['p'])){
        $p = $_GET['p'];
        switch($p){
            case 1:
                include "meio.php";
                    $css = "meio.css";
                break;
            case 2: 
                include "notebooks.php";
                break;
            case 3:
                include "servicos.php";
                break;
            case 4:
                include "faleconosco.php";
                break;
            case 5:
                include "cadastro.php";
                break;
            case 6:
                include "login.php";
                break;        
            default: include "meio.php";
            break;
        }
    }
    else{
        include "meio.php"; //pagina default
    }
?>
</div>
<div class="absoluta">
    <?php
        include "rodape.php";
    ?>
</div>