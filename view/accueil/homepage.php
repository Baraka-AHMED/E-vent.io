<?php include 'controller/Annoncecontroller.php'; ?>
<?php include 'controller/Campagnecontroller.php'; ?>

  <div id="titre-accueil">
      <h1>E-Event . IO !</h1>
      <p><b>Bienvenue sur E-Event.IO! Le meilleur site de gestion d’idéations d’événements.</b></p>
  </div>

    <div class="annonces">
      <h3>Propositions d'évènements</h3>
      
      <div class="compteur">
        <?php
          $campagne= new Campagnecontroller(); 
          $date = $campagne->getDateAction();
        ?>
      
        <h2> La campagne se termine le : <?php echo " $date"; ?> </h2>
      
      </div>      
      <div class = "slide">
      
        <?php 
        $annonce = new Annoncecontroller();
        $getarticle = $annonce->getAnnonceAction();
        $getarticleseuil = $annonce->getAnnonceseuilAction();
        if($_SESSION['role'] == 'jury')
          $artShow = $getarticleseuil;
        else
          $artShow = $getarticle;
        
          foreach ($artShow as $article):?>
          <div class="annonce">
            <h5><?= $article->name;?></h5>
            <p><?= $article->author;?></p>
            <p><?= $article->date;?></p>
            <p><?= $article->description_courte;?></p>
            <p><?= "Points : " .  $article->points;?></p>
            <?php $id = $article->id;
            echo '<a href="index.php?ctrl=annonce&action=goEvenement&id=' . $id . '"><button class="btn" type="button"> Voir l\'évènement !</button></a>'; ?>
          
          <?php $campagne = new campagnecontroller();
          $currentdate = date("d-m-Y");
          
          if(($_SESSION['role'] == 'jury')){
            echo '<a href="index.php?ctrl=annonce&action=vote&id=' . $id . '"><button class="btn" type="button">Votez pour cet évenement !</button></a>';}?>
         </div>
          <?php endforeach; ?>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a> 
       
        <div class="dot-container">
          <?php 
            foreach ($artShow as $article){ 
            $compteur += 1;
            echo '<span class="dot" onclick="currentSlide(' .  $compteur . ')"></span>'; 
            }
          ?>
        </div>
       
      </div>
    </div>
    
    <div class = "win">
      <?php 
        
        if ($date==$currentdate) : ?>
          <h2> Les idées qui vont être mis en oeuvre sont : </h2>
          <?php $getArticleWin = $annonce -> getAnnonceWinAction();
                foreach ($getArticleWin as $article): ?>
                 <div class="annoncewin">
                   <h4><?= $article->name;?></h4>
                   <h4><?= $article->author;?></h4>
                   <h4><?= $article->description;?></h4>
          <? endforeach; ?>
        <? endif; ?>
    </div>
                    
    <div class="idee">
      <?php  $user = new Usercontroller();
      $nbevent = $user->canpostAction();
      
         
          
      if(isset($_SESSION['auth'])){
        if(((($_SESSION['role'] == 'organisateur') || ($_SESSION['role'] == 'admin')) && $nbevent == 'ok')){
          echo '<a href="index.php?ctrl=annonce&action=annonce"><button class="btn" type="button">Proposez votre idée !</button></a>';
        }
      }
      
      ?>

      <?php 
      if(isset($_SESSION['auth']))
        if(($_SESSION['role'] == 'admin')): ?>
        <a href="index.php?ctrl=campagne&action=campagne"><button class="btn" type="button">Proposez votre campagne !</button></a>
      <?php endif; ?>

    </div>  
 <script src="/view/js/slider.js"></script>