<?php

/**
*layout
*ce qui sera toujours affiche
*/

require '../views/header.php';
require '../views/nav.php';

?>
<!-- infos pratiques -->

<div class="grid-x infos">

  <p class="cell auto">Adresse : route des chats noirs,  38270 Jarcieu</p>
  <p class="cell auto">Tel : 04  21  23  06  66</p>
  <p class="cell auto">Du  Lundi au  Vendredi  de  8h30  à 19h30
    Le  Samedi  de  8h30  à 18h00
    Le  Dimanche  de  10h00 à 12h00
  Les Urgences  sont  assurées  24h/24  et  7j/7  après appel téléphonique</p>

</div>


<a href="connexion.php" class="button bouton">admin</a>






<!-- section conseils -->


<div class="t-titre"><h1 id="conseils" class="titre-section">Les conseils</h1></div>

<!-- intro conseils -->

<div class="conseils">
  <div class="bloc-conseils">
    <div class="lisez"><p>Vous vous demandez comment prendre soins de vos felins de compagnies ?<br> Que ce soit un chat, un tigre, un surricate ou autres lisez nos fiches conseils qui sont la pour vous aider !</p></div>



    <!-- boutons modales -->


    <div class="grid-x grid-padding-x align-spaced">
      <div class="maladies">
        <img class="cons-pics" src="../images/vaccin.jpg" data-open="pop_maladie">
        <p><button class="button bouton" data-open="pop_maladie">Maladies et Vaccination</button></p>
      </div>

      <div class="danger">
        <img class="cons-pics" src="../images/danger.jpg" data-open="pop_danger">
        <p><button class="button bouton" data-open="pop_danger">Dangers domestiques</button></p>
      </div>

      <div class="med1">
        <img class="cons-pics" src="../images/medicaments.jpg" data-open="pop_med_1">
        <p><button class="button bouton" data-open="pop_med_1">Administration de medicaments pt1</button></p>
      </div>
      <div class="med2">
        <img class="cons-pics" src="../images/medicaments2" data-open="pop_med_2">
        <p><button class="button bouton" data-open="pop_med_2">Administration de medicaments pt2</button></p>
      </div>
    </div>
  </div>








  <!-- contenue modales -->



  <div class="reveal" id="pop_maladie" data-reveal>

    <h2>Maladies et Vaccination</h2>

    <p>VOTRE CHAT COMPTE SUR VOUS POUR ÊTRE PROTÉGÉ<br>

      L'un des meilleurs moyens de permettre à votre chat de vivre en santé pendant de nombreuses années est de le
      faire vacciner contre les maladies félines les plus répandues. Au cours des premières semaines de son
      existence, votre chat a reçu, par le lait de sa mère, des anticorps qui l'ont immunisé contre certaines maladies.
      Après cette période, c'est à vous qu'il revient de protéger votre compagnon, avec l'aide et les conseils de votre
      vétérinaire.<br>

      COMMENT UN  VACCIN  FONCTIONNE-T-IL ?<br>

      Un vaccin contient une petite quantité de virus, de bactéries ou d'autres organismes causant des maladies. Ceuxci
      ont été soit atténués soit « tués ». Lorsque ces organismes sont administrés à votre chat, ils stimulent son
      système immunitaire qui produit des cellules et des protéines qui combattent la maladie « les anticorps », et
      protègent votre animal contre certaines maladies.<br>

      QUAND DOIS-JE FAIRE VACCINER  MON CHAT  ? <br>

      En général, l'immunité que reçoit un chaton à sa naissance commence à s'estomper après neuf semaines. C'est
      alors le moment, habituellement, de lui administrer ses premiers vaccins. Il doit recevoir un rappel de 3 à 4
      semaines plus tard. Par la suite, votre chat devra se faire vacciner régulièrement toute sa vie. Bien sûr, ce ne
      sont que des lignes directrices. Votre vétérinaire sera en mesure de déterminer le programme de vaccination qui
    répondra parfaitement aux besoins de votre compagnon félin.</p>

    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
</div>






<div class="reveal" id="pop_danger" data-reveal>

 <H2>LES DANGERS DOMESTIQUES </H2>

 <p>Comment  faire de  votre maison  un  endroit sûr pour  vos animaux domestiques
  Tout  comme les parents rendent leur  maison  à l’épreuve de  leurs enfants,  les propriétaires d’animaux 
  domestiques devraient faire de  même  pour  leur  animal  domestique. Nos compagnons  à quatre  pattes  sont  
  comme les bébés et  les bambins :<br> curieux de  nature, ils sont  portés  à explorer  leur  environnement avec  
leurs pattes  et  leurs griffes et  à goûter  à tout.</p>

<button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
</button>

</div>
</div>
</div>




<div class="reveal" id="pop_med_1" data-reveal>
  <h2>Administration des medicaments: Partie 1</h2>


  <p> ADMINISTRATION  DES MEDICAMENTS :<br>

    Tout  comme vous, votre animal  sera  malade  et  il  est probable  que vous  deviez  lui administrer des 
    médicaments prescrits par votre vétérinaire.  L’emploi  d’une bonne méthode facilitera  la  vie de  tout  le  
    monde:<br>

    LES COMPRIMES OU  GELULES<br>

    C'est certainement  le  seul  médicament  qu'on puisse  lui administrer sans  problème. Contrairement à ce  
    qu'on croit,  votre animal  est parfaitement  capable d'avaler  des gros  comprimés<br>

    1re étape<br>

    • Placez  le  comprimé  entre vos doigts.<br>
    • De  l’autre main, tenez sa  tête  par derrière. le  menton  doit  passer  à la  verticale.<br>

    2e  étape<br>

    • Maintenant, ses yeux  fixent  le  plafond,  la  lèvre inférieure  baille  spontanément. <br>
    • Si  votre animal  n’ouvre pas la  gueule, exercez une légère  pression  sur sa  mâchoire  inférieure  à l’aide  de  
    votre majeur.<br>

    3e  étape<br>

    • Laissez votre majeur  sur les petites incisives de  votre animal  afin  que sa  gueule  reste ouverte.<br>
    • Déposez le  comprimé  le  plus  loin  possible  dans  la  gueule.<br>
    • Refermez  la  gueule  <br>
    4e  étape <br>
  • Masser  sa  gorge ou  soufflez  sur son nez pour  l’inciter à déglutir. </p>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
</div>
</div>



<div class="reveal" id="pop_med_2" data-reveal>
  <h2>Administration des medicaments: Partie 2</h2>


  <p> LES LIQUIDES<br>

   Agitez le  flacon    si  cela  est demandé.<br>

   1re étape<br>

   • Tout  d’abord,  remplissez  une seringue  du  médicament. <br>

   2e  étape <br>

   • Le  médicament  liquide doit  être  versé dans  l'espace  entre la  canine  et  les molaires.<br>

   3e  étape<br>

   • Tenez les mâchoires de  votre animal  fermées et  renversez légèrement  sa  tête  vers  l’arrière.<br>

   CONSEILS  PRATIQUES<br>

   Lisez attentivement l'étiquette.<br>
   Demandez  à votre vétérinaire à quel  moment  du  repas   le  médicament  peut  être  donné.
   Cacher  le  comprimé  dans  un  morceau d'aliment appétent  (viande hachée, fromage)  
   Demandez  à un  ami ou  à un  membre  de  la  famille de  vous  aider.
   Lorsque la  taille  de  l'animal  le  permet, il  est plus  facile  d'administrer des médicaments si  l'animal  est placé 
   sur une table.<br>
   Lorsque vous  donnez  un  médicament, demeurez  calme,  car votre animal  peut  sentir  votre nervosité,  ce  
   qui rendra  votre tâche plus  difficile.  Vous  devez toujours  le  féliciter et  le  récompenser avec  une gâterie.<br>
   Pour  éviter  de  mettre  vos doigts  dans  la  gueule  de  votre compagnon,  vous  pouvez  utiliser  une seringue  
   spéciale. Il  s’agit  d’un  tube  en  plastique similaire à une seringue  qui permet  de  déposer le  comprimé  ou  la  
 capsule dans  la  gueule  de  l’animal. </p>


 <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
</button>

</div>
</div>
</div>











<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app2.js"></script>
</body>
</html>
