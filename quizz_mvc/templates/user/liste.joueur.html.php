
    
    <div style="margin:25px 70px" class="listj">
            
            <table class="tablist">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Scrore</th>
                    </tr>

                <?php foreach($data as $value):?>
                    <tr>
                        <td><?=$value['nom']?></td>
                        <td><?=$value['prenom']?></td>
                        <td><?=$value['score']?></td>
                    </tr>

                <?php endforeach?>
                
            </table>
            

    </div>
    <div class="btn">
        <input type="submit" name="btn_suiv" id="suiv" value="Suivant">
    </div>

<?php
    //Inclusion du fichier footer
    require_once(PATH_VIEW."include/footer.inc.html.php");
?>