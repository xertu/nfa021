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





<!-- boutons permettant d'ouvrir les profils -->

<div class="t-titre"><h1 class="titre-section">Notre equipe</h1></div>
<div class="equipes">
  <button type="button" class="button bouton" data-toggle="offCanvasRightSplit1"><p>voir le profil de Remain André<p></button>
    <button type="button" class="button bouton" data-toggle="offCanvasRightSplit2"><p>voir le profil de Burlotte Sylvie</p></button>
    <button type="button" class="button bouton" data-toggle="offCanvasRightSplit3"><p>voir le profil de Abeauvaux Jérôme</p></button>


    <!-- portraits du personnels -->

    <div class="grid-x grid-margin-x">
     <div class="cell small-6">
      <div class="off-canvas-wrapper">
        <div class="off-canvas-absolute position-right" id="offCanvasRightSplit1" data-off-canvas>
          <!-- Your menu or Off-canvas content goes here -->
        </div>
        
        
        <div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>
          <img class="sylvie" src="../images/andre.jpg">
          
          
        </div>
        
      </div>
    </div>
    <div class="cell small-6">
      <div class="off-canvas-wrapper">
        <div class="off-canvas-absolute position-right" id="offCanvasRightSplit2" data-off-canvas>
          <!-- Your menu or Off-canvas content goes here -->
        </div>
        <div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>
          
          <img class="sylvie" src="../images/sylvie.jpg">
        </div>
      </div>
    </div>
    <div class="cell small-6">
      <div class="off-canvas-wrapper">
        <div class="off-canvas-absolute position-right" id="offCanvasRightSplit3" data-off-canvas>
          <!-- Your menu or Off-canvas content goes here -->
        </div>
        <div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>
         
          <img class="sylvie" src="../images/jerome.jpg">
        </div>
      </div>
    </div>
    
    <!-- presentation clinic -->

    <div class="cell small-6">
      <p class="presentation">notre equipe a le plaisir de vous accueillir a la clinic " cat clinic " ou ils feront leurs possible pour garder vos amis dans la meilleur santé possible</p>
    </div>
  </div>
</div>




<!-- section services -->



<div class="t-titre"><h1 id="services" class="titre-section">Les services</h1></div>



<!-- tableau service -->


<div class="tableau_infos_services">
  <ul class="tabs bouton" data-responsive-accordion-tabs="tabs medium-accordion large-tabs" id="infos_services">
    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Radiographie</a></li>
    <li class="tabs-title"><a href="#panel2">Echographie (Abdominale et  échocardiographie)</a></li>
    <li class="tabs-title"><a href="#panel3">Analyses  sanguines :         Biochimie et  hématologie</a></li>
    <li class="tabs-title"><a href="#panel4">Laboratoire et  cytologie</a></li>
    <li class="tabs-title"><a href="#panel5">Dentisterie</a></li>
    <li class="tabs-title"><a href="#panel6">Chirurgie et Hospitalisation</a></li>
    <li class="tabs-title"><a href="#panel7">Service  de  garde 24h/24  - 7j/7</a></li>
  </ul>



  <!-- contenue service -->


  <div class="tabs-content" data-tabs-content="infos_services">
    <div class="tabs-panel is-active" id="panel1">
      <p class="titre-conseils">Comment se réalise une radiographie vétérinaire ?
      </p>
      <p>La plupart des examens radiographiques se font sur animal vigil. Certains examens complexes, nécessitant un positionnement précis ou des examens avec produit de contraste peuvent nécessiter une sédation ou une anesthésie générale.

        En règle générale deux projections orthogonales sont effectuées (ex : face et profil). Un examen dure entre 10 min et 30 minutes.

      L’emploi de produit de contraste est fréquent (ex : marquage oesophagien, marquage de l’appareil urinaire…).</p>
    </div>
    <div class="tabs-panel" id="panel2">
      <p class="titre-conseils">Comment se réalise une échographie</p>
      <p>En médecine vétérinaire, une échographie se réalise la plupart du temps sur animaux vigiles. Il est parfois nécessaire de tranquiliser/sédater l’animal afin d’avoir une bonne contention du patient. Enfin certain sujets nécessitent une anesthésie courte mais générale.
        En revanche lors de  prélèvements échoguidés, il est fréquemment nécessaire d’avoir recours à une tranquillisation, comme pour des cytoponctions, voire une anesthésie pour des biopsies.
        En général lors d’examen abdominal, il est préférable de laisser l’animal à jeun (12 h avant l’examen). L’animal est couché sur le dos. Des coussins de contention peuvent être utilisés pour le confort de l’animal, leur inclinaison permet aussi de faire « descendre » les organes dans la cavité abdominale. L’animal peut être aussi couché sur un coté puis un autre. Lors d’examen thoracique l’animal est debout ou couché sur un des deux cotés.
        Lors d’examen superficiel, la positon est adaptée à la région étudiée, par exemple sur le dos pour le cou, sur le coté pour l’examen d’un membre…
        Lors d’examen oculaire l’animal est debout ou couché sur le coté opposé à celui examiné.
        La région d’intérêt (ex : abdomen) est tondu car le poil gène la pénétration des ultrasons
        L’examen dure en général entre 10 et 30 minutes.
      NB : il est toujours préférable de laisser l’animal à jeun avant tout examen si ce dernier nécessite une tranquillisation ou une anesthésie.</p>
    </div>
    <div class="tabs-panel" id="panel3">
      <p class="titre-conseils">comment se réalise une analyse sanguines</p>
      <p>La prise de sang chez les animaux domestiques est un instrument de diagnostic très important. Elle permet d’effectuer un grand nombre d’analyses. Si l’animal est collaboratif, il est possible de la faire sans anesthésie. Au contraire, s’il est terrorisé ou agressif, il faut le tranquilliser. Dans tous les cas, le sujet doit être à jeûn depuis au moins 8 heures. Le prélèvement est très rapide et ne cause qu’un léger inconfort à l’animal.

        Les analyses effectuées sont souvent les mêmes que l’on peut faire sur le sang humain. La numération formule permet de connaître la quantité et la qualité des globules rouges, des différents types de globules blancs et des plaquettes. Cela permet, par exemple, de diagnostiquer des anémies, des infections bactériennes, virales, parasitaires ou des réactions allergiques. Il existe aussi des test spécifiques pour certaines pathologies.

      Le bilan biochimique permet de mesurer différentes composantes sanguines qui permettent d’évaluer le fonctionnement des différents organes et la quantité de certaines composantes sanguines comme le glucose et les triglycérides (d’où la nécessité du jeune). La plupart de ces composantes fait partie du métabolisme de plusieurs organes. C’est pour cette raison qu’on fait un bilan de plusieurs paramètres plutôt qu’en analyser un seul.</p>
    </div>
    <div class="tabs-panel" id="panel4">
      <p class="titre-conseils"> qu'es ce que la cytologie</p>
      <p>La cytologie est un des moyens les plus fiables et les moins onéreux permettant d'identifier certaines tumeurs au chevet du malade et ainsi d'orienter l'attitude thérapeutique ou chirurgicale.

      La cytologie des liquides biologiques (LCR, synovial, épanchement) permet aussi d'obtenir des éléments diagnostiques clés.</p>
      
    </div>
    <div class="tabs-panel" id="panel5">
      <p class="titre-conseils">comment se réalise un soins dentaire ?</p>
      <p>Pour réaliser des soins dentaires de qualité chez le chien et chat, le vétérinaire utilise le même matériel et les mêmes techniques que le dentiste pour l’Homme :

      il utilise en particulier « une fraise » et de nombreux autres équipements spécifiques de dentisterie qui lui permettent de prodiguer les meilleurs soins.</p>
    </div>
    <div class="tabs-panel" id="panel6">
     
      <ul class="tabs" data-responsive-accordion-tabs="tabs medium-accordion large-tabs" id="infos_services">
        <li class="tabs-title"><a href="#panel6-1">deroulement pre operatoire</a></li>
        <li class="tabs-title"><a href="#panel6-2">deroulement post operatoire</a></li>
      </ul>
      <div class="tabs-panel" id="panel6-1">
       <p class="titre-conseils">déroulement pré operatoire</p>
       <p>Lorsque votre compagnon va subir une intervention chirurgicale, une visite au préalable est fortement recommandée. Elle permettra au vétérinaire de contrôler l'état de santé de votre animal et de s'assurer ainsi que tout risque dû á l'anesthésie est écarté (cœur, respiration).

        Le jour de l'opération, il doit être á jeun environ 12 heures avant la chirurgie; sous l'effet de l'anesthésie, l'animal a le réflexe de régurgiter ses aliments. Il est donc préférable qu'il n'ait rien dans l'estomac. Il doit cependant avoir la possibilité de se désaltérer jusqu'á 3-4 heures avant l'intervention.

        Arrivé au cabinet, le vétérinaire vérifie une dernière fois l'état de santé de l'animal puis lui administre une injection intramusculaire afin de le tranquilliser. L'animal est alors placé en hospitalisation le temps que le produit fasse son effet.



        Lorsque l'animal est tranquillisé, commence la phase de préparation chirurgicale:

        Il reçoit un cathéter veineux qui permet d'avoir la possibilité de lui injecter des produits par voie veineuse, de lui assurer par baxter une bonne hydratation, le maintien de la pression sanguine et de lui apporter certains éléments nutritifs;
        C'est par cette voie intra-veineuse que sera administré l'anesthésique. Ce produit est injecté en faible dose.
        Le vétérinaire insère une sonde endotrachéale dans la gorge de l'animal. Qui permet d'amener l'oxygène et le gaz anesthésique jusqu'aux poumons de l'animal. L'anesthésie gazeuse est la plus sûre pour l'animal et assure le réveil le plus rapide.
        Afin de pouvoir contrôler le rythme cardiaque, la température et la respiration, l'animal est placé sous monitoring. Au cours de l'opération, les organes vitaux de votre animal sont en permanence sous surveillance.
        Après avoir vérifié que l'animal dort profondément et ne risque donc pas de ressentir la douleur, la zone á opérer est tondue, nettoyée et désinfectée, afin d'assurer une meilleure stérilité.
        Pendant que l'assistante prépare l'animal, le vétérinaire procède á un lavage chirurgical afin d'être stérile et limiter ainsi les risques d'infection. Les instruments de chirurgie ont également été stérilisés au préalable.
        Avant l'intervention, l'animal reçoit un antibiotique et un anti-inflammatoire qui couvre le temps opératoire.
      L'opération s'étant déroulée de façon stérile, il ne sera pas nécessaire par la suite de donner des médicaments.</p>
    </div>
    <div class="tabs-panel" id="panel6-2">
      <p class="titre-conseils">deroulement post operatoire</p>

      <p>Suite à l'opération, l'assistante contrôle le réveil de l'animal. Celui-ci est placé en hospitalisation sous lampe chauffante. Durant l'anesthésie, la température corporelle a tendance á diminuer, même si la perfusion est chauffée et que l'animal est placé sur un coussin chauffant. La lampe permet donc un meilleur confort post-opératoire. 
        L'heure à laquelle les maîtres peuvent récupérer leur compagnon dépend de la vitesse de réveil de ce dernier. Votre compagnon vous retrouvera dès qu'il sera en pleine possession de ses moyens. L'animal étant ravi de retrouver ses maîtres, il est plus pratique et facile de lui retirer la perfusion avant leur arrivée.

        De retour á la maison, il pourra recevoir un peu d'eau. S'il ne la régurgite pas et qu'il le demande, il pourra recevoir un peu de nourriture (⅓ de la ration habituelle, maximum). Dès le lendemain, il pourra manger normalement. 
        Un contrôle de plaie aura lieu 5 jours après l'intervention. S'il y a des fils de suture apparents, ceux-ci pourront être retirés après 10 jours. L'animal doit impérativement garder sa collerette en permanence, jusqu'à la cicatrisation de la plaie. Il mettra à peine un ou deux jours à s'y habituer.

      Le propriétaire est chargé de vérifier l'état de la plaie quotidiennement. Celle-ci ne doit être ni enflée, ni être rouge, suinter ou sentir mauvais. Il se peut que l'animal reste calme durant les 2-3 jours qui suivent l'opération. Ce comportement est tout á fait normal et ne nécessite aucune inquiétude. Ensuite, il faudra veiller à ce qu'il reste calme pour ne pas effectuer de tension sur les points de suture. Qu'ils soient visibles ou non, une trop forte tension peut entraîner une rupture des fils.</p>
    </div>
  </div>
  <div class="tabs-panel" id="panel7">
    <p>Nôtre service assure une garde permanente ( 24h/24 7j/7 ), veuillez nous appeler au préalable </p>
  </div> 

</div>

</div>






<!-- section contact -->


<div id="contact" class="grid-x contact-us">
  <div class="cell small-6 contact-us-section-left">
    <div class="t-titre"><h1 class="titre-section">Où nous trouver ?</h1></div>

    <!-- carte -->


    <div class="map">
      <div class="responsive-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5773.3777424055215!2d4.9451829371954865!3d45.33850701768924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f53ab5fdf83913%3A0x4480d6093bfb5d6a!2sRoute+des+Chats+Noirs%2C+38270+Jarcieu!5e0!3m2!1sfr!2sfr!4v1549122568371" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <!-- infos complementaires -->

    <ul class="contact-us-list">
      <li><i class="fi-marker">route  des chats noirs,  38270 Jarcieu</i></li>
      <li> <i class="fi-mail"><a class="mail-cat" href="mailto:aurignac.johann@gmail.com">aurignac.johann@gmail.com</a></i></li>
      <li><i class="fi-mobile">
        04  21  23  06  66
      </i></li>
    </ul>
  </div>



  <div class="cell small-6 contact-us-section-right">
    <div class="t-titre"><h1 class="titre-section">Contactez nous !</h1></div>

    <!-- formulaire de contact -->

    <div class="formulaire">
      <form class="contact-us-form" onsubmit="return verifForm(this)" action="../donnees-contact/recuperation.php" method="post" enctype="multipart/form-data">

        <p>
         <label for="nom"></label>
         <input type="text" id="nom" name="nom">
       </p>
       <p>
         <label for="email"></label>
         <input type="email" id="email" name="email">
       </p>
       <label for="message"></label>
       <textarea name="message" id="" rows="12" placeholder="ecrivez vôtre message"></textarea>
     </p>
     <div class="contact-us-form-actions">
      <input type="submit" class="button bouton" value="envoyez" />

    </div>
  </fieldset>
</form>
</div>
</div>
</div>



<script src="../Js/form.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
