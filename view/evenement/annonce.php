<h1>Proposition d'évènement</h1>
  
  <form action="index.php?ctrl=annonce&action=Post" method="post">
    <label for="name"> Nom de l'annonce : </label>
    <input type="text" name="name" placeholder="Entrez le nom de l'annonce" /><br/>
    <label for="description">Description : </label> <input id="description" type="text" name="description" placeholder="Entrer la description de l'évènement" /><br/>
    <input type="submit" value="Poster !"/>
  </form>