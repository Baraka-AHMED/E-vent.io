<h1>Proposition d'évènement</h1>
  <div class="evenementform">
    <form action="index.php?ctrl=annonce&action=Post" method="post">
      <label for="name"> Nom de l'évènement : </label>
      <input type="text" name="name" placeholder="Entrez le nom de l'annonce" /><br/>
      <label for="description_courte"> Description courte de l'évènement : </label>
      <input type="text" name="description_courte" placeholder="Entrez une courte description" /><br/>
      <label for="description">Description : </label> <input id="description" type="text" name="description" placeholder="Entrer la description de l'évènement" /><br/>
      <input id="supplément" type="text" name="supplement" placeholder="Suppléments de l'événements" /><br/>
      <input type="submit" value="Poster !"/>
    </div>
  </form>