                       
    <div class="joueurs">
    <div class="tl"><h5>LISTE DES JOUEURS PAR SCORES</h5></div>

    <div style="margin:50px 70px">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Scores</th>
            </tr>
            <?php foreach($data as $value) :?>    
            <tr>
                <td><?=$value['nom']?></td>
                <td><?=$value['prenom']?></td>
                <td><?=$value['score']?></td>   
            </tr>
            <?php endforeach?> 
        </table>
        
    </div>
    <div class="btn"><button>Suivant</button></div>
 