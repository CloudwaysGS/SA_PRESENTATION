
<div style="margin:25px 70px" class="listj">
<h4>LISTE DES JUOEURS PAR SCORE</h4>
<table class="tablist">
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Scrore</th>
</tr>

<?php foreach($items as $value):?>
<tr>
<td><?=$value['nom']?></td>
<td><?=$value['prenom']?></td>
<td><?=$value['score']?></td>
</tr>
<?php endforeach?>
</table>

</div>
<div class="btn">
<?php if($page<$totalPages): ?>
<button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.joueur&page=<?=$page+1;?>">Suivant</a></button> 
<?php endif?>
<?php if($page!=1): ?>
<button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.joueur&page=<?=$page-1;?>">Precedent</a> </button>
<?php endif?>

</div>

