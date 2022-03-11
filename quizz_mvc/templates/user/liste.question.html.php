
 <p>Nombre de question/jeu</p>
<div style="margin:25px 70px" class="liste">
    
   
            
        <div class="boxe">
            
           
            
               
                <br><?php foreach($items as $value):?>
                    
                    <tr>
                        <td><label for=""><?=$value['question']?></label></td>
                    </tr>
                    <?php if($value['type']=="MULTIPLE"):?>
                        <?php  foreach($value['reponse'] as $val):?> <br> <br>
                        <tr>
                            <td> <input type="checkbox" name="" id=""><?=$val?></td>
                        </tr>
                        <?php endforeach;?> <br>
                    <?php endif;?>
                    <?php if($value['type']=="SIMPLE"):?>
                        <?php  foreach($value['reponse'] as $val):?> <br> <br>
                        <tr>
                            <td> <input type="radio" name="" id=""><?=$val?></td>
                        </tr>
                        <?php endforeach;?> <br>
                    <?php endif;?>
                    
                    <?php if($value['type']=="TEXTE"):?>
                        <?php  foreach($value['reponse'] as $val):?> <br> <br>
                        <tr>
                            <td> <input type="text" name="" id=""></td>
                        </tr>
                        <?php endforeach;?> <br>
                    <?php endif;?>
                    
                    <br> <br><br> <?php endforeach;?>
                
                

            </table>
            

    

            
                            
            
        </div>
        
    </div>
    <div class="btn">
            <?php if($page<$totalPages): ?>
            <button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.question&page=<?=$page+1;?>">Suivant</a></button> 
            <?php endif?>
            <?php if($page!=1): ?>
            <button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.question&page=<?=$page-1;?>">Precedent</a></button>
            <?php endif?>
</div>
