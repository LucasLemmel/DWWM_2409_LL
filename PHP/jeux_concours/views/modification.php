<?php

// require "../dao/CandidatRepository.php";
// require "../dao/Dbconnect.php";

// $myCandidat = new CandidatRepository();
//  $data= $myCandidat->searchById($_GET["numCandidat"]);
?>
<fieldset>
    <legend>Modification compte candidat</legend>


    <form method="POST" action="index.php?page=modification&num=<?=$_numCandidat; ?>">
        <div class="rows"> <label for="lastname">Nom: </label>
            <input type="text"  name="lastname" size="50" id="lastname" value="<?php   $nom=$data['lastname_user']?? "inconnu"; echo $nom   ?>"  placeholder="votre nom" required>
        </div>


        <div class="rows"> <label for="firstname">Prenom: </label>
            <input type="text" name="firstname" size="50" id="firstname"  value="<?php   $prenom=$data['firstname_user']?? "inconnu"; echo $prenom   ?>" placeholder="votre prénom" required>
        </div>


        <div class="rows"> <label for="mail">email: </label>
            <input type="email" name="mail" id="mail"  value="<?php   $mail=$data['mail_user']?? "inconnu"; echo $mail   ?>" required>
        </div>


        <!-- <div class="rows"> <label for="url">url site: </label>
                    <input type="url" name="url" id="url" required>
                </div>
    <div class="rows">
        <div class="rows"> <label for="color"> couleur</label>
                    <input type="color" name="test" id="test" value="#ff0000" required>
                </div>

  <div class="rows"> <label for="echelle">Durée de rmboursement: </label>
                    <input type="range" min="1" max="25" value="1" id="echelle" required>
                    
                </div>
     <div class="rows"> <label for="tel">Telephone: </label>
                    <input type="tel" id="tel" name="tel"  required > 
                </div>

               <div class="rows"> 
                <label for="inscription">Date d'inscription: </label>
              <input type="date" name="inscription" id="inscription"  required >
                </div>   -->

        <!-- <div class="rows">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required>
        </div>

        
        <div class="rows">
            <label for="confirm">Confirmation du Mot de passe</label>
            <input type="password" name="confirm" id="confirm" required>
        </div> -->



        <select name="dept" id="dept" required>

            <option value="" > Choisissez votre departement</option>

            <?php

            $objTableDept = new Dao\DepartementRepository();

            $tableData = $objTableDept->searchAll();
            $tabNumDept = explode("-",$data["name"]);
            $num = trim($tabNumDept[0]);
            $num1 = intval($num);


            for ($i = 0; $i < count($tableData); $i++)
            {
                echo $tableData[$i]["id_dep"];
                
             
                if ( $tableData[$i]["id_dep"] == $num1)
                {
                    echo "<option value='" . $tableData[$i]["id_dep"] . "'  selected='selected' >" . $tableData[$i]["name_dep"] . "</option>";
                }
                else{
                echo "<option value='" . $tableData[$i]["id_dep"] . "' >" . $tableData[$i]["name_dep"] . "</option>";}
            }

            ?>

        </select>

        <div class="rows">
            <label for="age">age</label>
            <input type="number" min="18" max="110" step="1" id="age" value="<?php   $age=$data['age_user']?? "inconnu"; echo $age   ?>" name="age" required>
        </div>
            <input type="hidden" name="id_candidat" value="<?=$_numCandidat ?>">
  
        <div class="rows">
            <input type="submit" value="modifier" id="modification" name="modification">
        </div>
    </form>

</fieldset>