<?php
/**
 * Contrôleur
 * @author Christian Bonhomme
 * @version 1.0
 * @package EXO-MOOC
 */
 
// Inclusion des constantes et des fonctions de l'application
// en particulier l'Autoload
require('../inc/require.inc.php');

// variable de contrôle
$EX = isset($_REQUEST['EX']) ? $_REQUEST['EX'] : 'home';

// Contrôleur
switch($EX)
{
  case 'home'       : home();            break;
  case 'calcul'     : calcul();          break;
  case 'peintres'   : peintres();        break;
  case 'admin'      : peintres('admin'); break;
  case 'res_calcul' : res_calcul();      exit;
  case 'select'     : select();          exit;
  case 'insert'     : modify('insert');  exit;
  case 'update'     : modify('update');  exit;
  case 'delete'     : modify('delete');  exit;
  case 'fichesconseils'     : fichesconseils();     break;
  case 'page'         : page();         exit;
  case 'change'       : change();       exit;

  default : home();
}

// Mise en page
require('../views/conseils/layout.view.php');

/**
 * Affichage de la page d'accueil
 *
 * @return none
 */
function home()
{
  global $content;
  
  $content['title'] = 'Accueil';
  $content['class'] = 'VHtml';
  $content['method'] = 'showHtml';
  $content['arg'] = '../Html/home.html';
  
  return;

} // home()


function peintres($type = null)
{
  // Récupère les données des peintres
  $mpeintres = new MPeintres();
  $data_peintres = $mpeintres->SelectAll();

  global $content;
  $content['title'] = ($type == 'admin') ? 'Administration Peintres' : 'Peintres';
  $content['class'] = 'VPeintres';
  $content['method'] = ($type == 'admin') ? 'showAdminPeintres' : 'showPeintres';
  $content['arg'] = $data_peintres;
  
  return;

} // peintres($type = null)


/**
 * Récupère un tuple de la table PEINTRES
 * et renvoie les données au format JSON
 *
 * @return none
 */
function select()
{
  // Instancie l'objet $mpeintres avec l'identifiant de ligne
  $mpeintres = new MPeintres($_POST['ID_PEINTRE']);
  // Récupère les données de la ligne
  $value = $mpeintres->Select();

  // Renvoie les données du tableau $value_peintre au format JSON
  echo json_encode($value);
  
  return;

} // peintres()

/**
 * Modifie les données dans la table PEINTRES
 * et renvoie les données au format JSON
 * @param string type de modification : insert, update ou delete
 *
 * @return none
 */
function modify($type)
{
  // Instancie l'objet $mpeintres avec l'identifiant de ligne
  $mpeintres = new MPeintres($_POST['ID_PEINTRE']);
  
  // Instancie le tableau $value_peintre
  $value_peintre = $_POST;
  
  // Teste si $type ne vaut pas insert
  if ($type != 'insert')
  {
    $value = $mpeintres->Select();
  
    $value_peintre['PHOTO'] = $value['PHOTO'];
  
    if ('delete' == $type || ('update' == $type && $_FILES['PHOTO']['tmp_name']))
    {
      $file_old = UPLOAD . $value['PHOTO'];
  
      if (is_file($file_old)) unlink($file_old);
    }
  }
  
  // Teste s'il y a téléchargement d'une image
  if (isset($_FILES['PHOTO']) && $_FILES['PHOTO']['tmp_name'])
  {
    // Récupère le nom du fichier :
    // en supprimant les caractères non alphanumériques
    // en remplaçant les caractères accentués par ceux non accentués
    // en limitant le nom du fichier à 25 caractères
    // en ajoutant le time machine afin de rendre le fichier unique
    $file_new = upload($_FILES['PHOTO']);
    
    // Redimensionne l'image
    $image_new = redimensionne($_FILES['PHOTO']['tmp_name']);
    
    // Génère l'image $image_new vers le fichier $file_new suivant le mime
    switch ($_FILES['PHOTO']['type'])
    {
      case 'image/png'  : imagepng($image_new, UPLOAD . $file_new, 0);  break;
      case 'image/jpeg' : imagejpeg($image_new, UPLOAD . $file_new, 100); break;
      case 'image/gif'  : imagegif($image_new, UPLOAD . $file_new);  break;
    }
    
    // Ajoute au tableau $value_peintre la clef PHOTO avec le nom du fichier
    $value_peintre['PHOTO'] = $file_new;
  }
  
  // Si $type différent de delete
  // instancie le membre $value avec le tableau $value_peintre 
  if ($type != 'delete') $mpeintres->SetValue($value_peintre);
  // Modifie les données dans la table PEINTRES
  $value = $mpeintres->Modify($type);

  // Renvoie les données du tableau $value au format JSON
  echo json_encode($value);
  
  return;
  
} // modify($type)

function fichesconseils()
{
  global $content;
  
  $content['title'] = 'Conseils';
  $content['class'] = 'VHtml';
  $content['method'] = 'showHtml';
  $content['arg'] = 'fichesconseils.php';
  
  return;


} // home()


function page()
{
  // Aiguille suivant le numéro de page
  switch($_POST['ID_PAGE'])
  {
    case 1 : $html = '../upload/premiere.html';
             break;
    case 2 : $html = '../upload/seconde.html';
             break;
    case 3 : $html = '../upload/troisieme.html';
             break;
  }
  
  // Affiche la page
  $vhtml = new VHtml();
  $vhtml->showHtml($html);
  
  return;
  
} // page()

/**
 * Modification du texte dans la page
 * 
 * @return none
 */
function change()
{
  // Aiguille suivant le numéro de page
  switch($_POST['ID_PAGE'])
  {
    case 1 : $html = '../upload/premiere.html';
             break;
    case 2 : $html = '../upload/seconde.html';
             break;
    case 3 : $html = '../upload/troisieme.html';
             break;
  }
  
  // Appelle la classe MPages avec le fichier
  $mpages = new MPages($html);
  // Instancie le membre $value avec les valeurs des paramètres
  $mpages->SetValue($_POST);
  
  // Aiguillage suivant le tag
  switch ($_POST['TAG'])
  {
    case 'H1' : // Modifie le titre dans le fichier
              $mpages->UpdateTitre();
              // Récupère le texte modifié
              $value['TEXT'] = $_POST['TITRE'];
              break;
    case 'H2' : // Modifie le titre dans le fichier
              $mpages->UpdateSousTitre();
              // Récupère le texte modifié
              $value['TEXT'] = $_POST['SOUS_TITRE'];
              break;
    case 'P'  : // Modifie le titre dans le fichier
                $mpages->UpdateParagraphe();
                // Récupère le texte modifié
                $value['TEXT'] = $_POST['PARAGRAPHE'];
                break;
  }
     
  // Retourne le texte modifié 
  echo json_encode($value);
  
  return;
  
} // change()


?>
