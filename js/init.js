/**
 * Initialisation des écouteurs
 * @author Christian Bonhomme
 * @version 1.0
 * @package EXO-MOOC
 */
 
/**
 * Fonction générique de déclenchement des listeners
 * @param HTMLElement element à écouter
 * @param array tableau des objets de type événement
 * @param function fonction déclenchée par l'écouteur
 *
 * @return none
 */
function Listener(elem ,event, fnct) 
{
  if (elem)
  {
    // Teste si la méhode addEventListener existe (Non IE)
    if (elem.addEventListener)
    {
      // Associe à  l'événement click la fonction (Non IE)
      elem.addEventListener(event , fnct, false);
    }
    else
    {
      // Associe à  l'événement onclick la fonction  (IE)
      elem.attachEvent('on' + event, fnct);
    }
		
    // Si l'événement est un click on change le curseur de souris
    if ('click' == event) 
    { 
      elem.style.cursor = 'pointer';
    }
  }
  
  return;
    
} // Listener(elem ,event, fnct)

/**
 * Gestion des événements sur le formulaire de calcul id="calcul"
 */
// Récupère l'élément <form id="calcul">
var form_calcul = document.getElementById('calcul');
Listener(form_calcul, 'submit', resultatCalcul);

// Teste si l'élémént form_calcul existe
if (form_calcul)
{
  // Gestion de l'événement submit sur le formulaire id="calcul"
  // Récupère l'élément <select id="operation">
  var change_operation = document.getElementById('operation');
  Listener(change_operation, 'change', resultatCalcul);
  
  // Récupère les éléments <input id="num1"> et <input id="num2">
  var keypress_num1 = document.getElementById('num1');
  Listener(keypress_num1, 'keypress', isInteger);
  var keypress_num2 = document.getElementById('num2');
  Listener(keypress_num2, 'keypress', isInteger);
}

/**
 * Gestion des événements sur les peintres
 */
// Récupère l'élément <form id="peintre">
var form_peintre = document.getElementById('peintre');
//Teste si l'élément <form id="peintre"> n'existe pas
if (!form_peintre)
{
  // Récupère les éléments <th> d'entêtes de tableau
  var click_th = document.getElementsByTagName('th');
  // Nombre d'éléments <th>
  var nb_click_th = click_th.length;
  // Boucle sur les éléments <th>
  for (var i = 0; i < nb_click_th; ++i)
  {
    Listener(click_th[i], 'click', triCol);
  }
}
else
{
  Listener(form_peintre, 'submit', insertData);
  
  // Récupère l'élément <input id="photo">
  var change_file_image = document.getElementById('photo');
  Listener(change_file_image, 'change', selectImage);
	
  //Récupère les éléments <button class="modify">
  var click_modify = document.getElementsByClassName('modify');
  //Nombre d'éléments <button class="modify">
  var nb_click_modify = click_modify.length;
  //Boucle sur les éléments <button class="modify">
  for (var i = 0; i < nb_click_modify; ++i)
  {
    Listener(click_modify[i], 'click', selectData);
  }

  //Récupère les éléments <button class="trash">
  var click_trash = document.getElementsByClassName('trash');
  //Nombre d'éléments  <button class="trash">
  var nb_click_trash = click_trash.length;
  //Boucle sur les éléments  <button class="trash">
  for (var i = 0; i < nb_click_trash; ++i)
  {
    Listener(click_trash[i], 'click', confirmDeleteData);
  }
}

// Récupère les éléments <a> du corps du tableau
var elem_a = document.querySelectorAll('tbody a');
var nb_elem_a = elem_a.length;
// Boucle sur les éléments <a>
for (var i = 0; i < nb_elem_a; ++i)
{
  //Initialise l'écouteur sur l'élément <a>
  initClickAnchor(elem_a[i]);
}

/**
 * Fonction d'initialisation de l'écouteur sur l'élément <a>
 * @param HTMLAnchorElement
 *
 * @return none
 */
function initClickAnchor(anchor)
{
  Listener(anchor, 'click', showPicture);
  
  return;
}

//Récupère l'élément <div id="drop_photo">
var drop_photo = document.getElementById('drop_photo');
Listener(drop_photo, 'dragenter', dragenter);
Listener(drop_photo, 'dragover', dragover);
Listener(drop_photo, 'drop', drop);

/**
 * Fonction d'arrêt de la propagation d'un événement dans la phase de bouillonnement
 * @param event événement
 *
 * return none;
 */
function stopEvent(event)
{
  // Teste si la méthode stopPropagation existe (Non IE)
  if (event.stopPropagation)
  {
    // Stoppe la propagation de l'événement (pas de bouillonnement)
    event.stopPropagation();
    // Remet l'événement à false
    event.preventDefault();
  }
  else
  {
    // Stoppe la propagation de l'événement (pas de bouillonnement)
    event.cancelBubble = true;
    // Remet l'événement à false
    event.returnValue = false;
  }
  
  return;

} // stopEvent(event)
