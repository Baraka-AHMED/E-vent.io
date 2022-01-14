
<div id="titre-accueil">
      <h1>E-Event . IO !</h1>
      <p><b>Bienvenue sur E-Event.IO! Le meilleur site de gestion d’idéations d’événements.</b></p>
    </div>
    <div class="annonces">
      <!-- <?php var_dump($_SESSION['auth']); ?> -->
      <h3>Propositions d'évènements</h3>
      <div class="compteur">
        <h3> La campagne se termine dans : </h3>
        <img class="countdown" src="http://gen.sendtric.com/countdown/kdlk9ztb5e"/>
      </div>      
      <div class = "slide" >
        <div class="annonce">
          <h5>03 March 2018</h5>
          <p>Premiere annonce</p>
        </div>
        <div class="annonce">
          <h5>04 March 2018</h5>
          <p>Deuxieme annonce</p>
        </div>
        <div class="annonce">
          <h5>05 March 2018</h5>
          <p>Troisième annonce</p>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
      </div>
      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
    </div>
    <div class="idee">
      <?php 
      if(isset($_SESSION['auth']))
        if(($_SESSION['role'] == 'organisateur') || ($_SESSION['role'] == 'admin')): ?>
        <a href="index.php?ctrl=annonce&action=annonce"><button class="btn" type="button">Proposez votre idée !</button></a>
      <?php endif; ?>

      <?php 
      if(isset($_SESSION['auth']))
        if(($_SESSION['role'] == 'admin')): ?>
        <a href="index.php?ctrl=campagne&action=campagne"><button class="btn" type="button">Proposez votre campagne !</button></a>
      <?php endif; ?>

    </div>  
 <script src="/view/js/slider.js"></script>
