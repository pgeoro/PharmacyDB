<?php
$Tab = $_POST['Tabel'];


switch ($Tab) {
    case "producatori":
        $Acti = $_POST['Actiune'];
        switch ($Acti) {
            case "Afisare":
                include("AP.php");
                break;
            case "Stergere":
                include("stergereProducator.php");
                break;
            case "Update":
                include("UpdateProducator.php");
                break;
            case "Inserare":
                include("adaugareproducator.php");
                break;
            default:
        echo "Neimplementat Inca";
        }
      break;

    case "substanteactive":
        $Acti = $_POST['Actiune'];
        switch ($Acti) {
            case "Afisare":
                include("ASA.php");
                break;
            case "Stergere":
                include("stergereSA.php");
                break;
            case "Update":
                include("UpdateSA.php");
                break;
            case "Inserare":
                include("AdaugareSA.php");
                break;
            default:
        echo "Neimplementat Inca";
        }
     break;
    default:
        echo "Neimplementat Inca";
}
?>
