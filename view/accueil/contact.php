
<strong><h1> CONTACT</h1></strong>

  <div class = "contact">
    <form>
      <input type="text" placeholder="Nom*"><br>
      <input type="text" placeholder="Prénom*" ><br>
      <input type="text" placeholder="E-mail*"><br>

     <input type="radio" id="dmd" name="choix" onclick="choice()">Demande de compte
     <input type="radio" id="pblm" name="choix" onclick="choice()">Probème technique<br/>
            
      <div id="compte" style="display: none;">
        <select>
        <option value="mtf">--Choisissez un role--</option>
        <option value="cpt">Organisateur</option>
        <option value="pb">Donateur</option>
      </select>
      <br>
      </div>
    <div id="probleme" style="display= none;">
      <input type="text"  placeholder="message"><br>
      </div>
      
      <input type="submit" value="Envoyer">
    </form>
    <div>
      <img src="view/img/image_contact.png" id="imagee">
    </div>
  </div>