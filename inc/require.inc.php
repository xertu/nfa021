<?php
/**
 * Fichier d'inclusion des constantes et des fonctions
 * dont à besoin l'application en particulier l'Autoload
 * @author Christian Bonhomme
 * @version 1.0
 * @package EXO-MOOC
 */

// Debuggage
define('DEBUG', false);

// Récupère le chemin absolu du répertoire Inc
// et le transforme pour le répertoire Upload
$path = str_replace('Inc', 'Upload', realpath('../inc')) . '/';

// Répertoire pour le téléchargement
define ('UPLOAD', $path);

// Connexion Base de Données
define('DATABASE', 'mysql:host=localhost;dbname=change_content');
define('LOGIN', 'root');
define('PASSWORD', '');

/**
 * Chargement automatique des class
 * @param string class appelée
 *
 * @return none
 */
function __autoload($class)
{
  switch ($class[0])
  {
    // Inclusion des class de type View
    case 'V' : require_once('../views/conseils/'.$class.'.view.php');
               break;
    // Inclusion des class de type Mod
    case 'M' : require_once('../html/'.$class.'.mod.php');
               break;
    // Inclusion des class de type Class
    case 'C' : require_once('../Class/'.$class.'.class.php');
               break;
  }
    
  return;

} // __autoload($class)

/**
 * Mise en forme d'un fichier pour le téléchargement
 * @param array correspondant au nom du fichier téléchargé
 *
 * @return string fichier mis en forme
 */
function upload($file)
{
  // Découpe $file['name'] en tableau avec comme séparateur le point
  $tab = explode('.', $file['name']);
  
  // Transforme les caractères accentués en entités HTML
  $fichier = htmlentities($tab[0], ENT_NOQUOTES);

  // Remplace les entités HTML pour avoir juste le premier caractères non accentués
  $fichier = preg_replace('#&([A-za-z])(?:acute|grave|circ|uml|tilde|ring|cedil|lig|orn|slash|th|eg);#', '$1', $fichier);
 
  // Elimination des caractères non alphanumériques
  $fichier = preg_replace('#\W#', '', $fichier);

  // Troncation du nom de fichier à 25 caractères
  $fichier = substr($fichier, 0, 25);
  
  // Choix du format d'image
  switch(exif_imagetype($file['tmp_name']))
  {
    case IMAGETYPE_GIF  : $format = '.gif'; break;
    case IMAGETYPE_JPEG : $format = '.jpg'; break;
    case IMAGETYPE_PNG  : $format = '.png'; break;
  }
  
  // Ajout du time devant le fichier pour obtenir un fichier unique
  $fichier = time() . '_' . $fichier . $format;
  
  return $fichier;
    
} // upload($file)

/**
 * Redimensionnement de l'image
 * @param string image à redimensionner
 *
 * @return resource image redimensionnée
 */
function redimensionne($file)
{
  // Définition de la largeur et de la hauteur maximale
  $width_new = 600;
  $height_new = 600;

  // Retourne les dimensions et le mime à partir du fichier image
  $tab = getimagesize($file);
  $width_old = $tab[0];
  $height_old = $tab[1];
  $mime_old = $tab['mime'];
  
  // Ratio pour la mise à l'échelle
  $ratio = $width_old/$height_old;

  // Redimensionnement suivant le ratio
  if ($width_new/$height_new > $ratio)
  {
    $width_new = $height_new*$ratio;
  }
  else
  {
    $height_new = $width_new/$ratio;
  }

  // Nouvelle image redimensionnée
  $image_new = imagecreatetruecolor($width_new, $height_new);

  // Création d'une image à partir du fichier image et suivant le mime
  switch ($mime_old)
  {
    case 'image/png' :  $image_old = imagecreatefrompng($file); break;
    case 'image/jpeg' : $image_old = imagecreatefromjpeg($file); break;
    case 'image/gif' :  $image_old = imagecreatefromgif($file); break;
  }
  
  // Copie et redimensionne l'ancienne image dans la nouvelle
  imagecopyresampled($image_new, $image_old, 0, 0, 0, 0, $width_new, $height_new, $width_old, $height_old);

  // Retourne la nouvelle image redimensionnée (Attention ce n'est pas un fichier mais une image)
  return $image_new;

} // redimensionne($file_image)

// Visualisation des erreurs
if (DEBUG)
{
  // Retourne toutes les erreurs
  error_reporting(E_ALL);
  // Autorise l'affichage des erreurs
  ini_set('display_errors', 1);

  /**
   * Fonction de debug pour les tableaux
   * @param array tableau à débugguer
   *
   * @return none
  */
  function debug($Tab)
  {
    echo '<pre>Tab';
    print_r($Tab);
    echo '</pre>';
    
    return;
         
  } // debug($Tab)
  
  function ErrorSQL($result)
  {
    if (!DEBUG) return;
  
    $error = $result->errorInfo();
  
    debug($error);
  
    return;
  
  } // ErrorSQL($result)
}
?>