<?php 
/**
 * @author Sajith.M.R
 * contact me: admin@sajithmr.com
 *
 * Translated by gsimard
 */
	
$dossierDestination = "../televersement/";

$dossierDestination = $dossierDestination . basename( $_FILES['filefieldname']['name']);

if(move_uploaded_file($_FILES['filefieldname']['tmp_name'], $dossierDestination))
{
	$nomFichier = basename( $_FILES['uploadedfile']['name']);
    echo "Le fichier $nomFichier a ÚtÚ tÚlÚversÚ";
} 
else
{
    echo "Une erreur est survenue lors du tÚlÚversement";
}
?>

<script>
<?php $nomFichier = $_FILES['filefieldname']['name']; ?>
var chemin = '<br><a href="televersement/<?php echo $nomFichier ?>"><?php echo $nomFichier ?></a>';
parent.document.getElementById('uploadedfile').innerHTML += chemin;
</script>
