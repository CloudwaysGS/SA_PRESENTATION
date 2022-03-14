
<div style="margin:25px 70px" class="listjou">
<div class="tope">
<h5>Nbre de question/Jeu <input type="texte"><button class="o">OK</button></h5>
</div>

<table class="tableist">

<br><?php $a=1; foreach($items as $value):?>
<br><?php echo $a ; ?>.
<label for=""><?= $value['question']?></label>
<?php if($value['type']=="MULTIPLE"):?>
<br><?php foreach($value['reponse'] as $val):?> 
<input type="checkbox" name="" id=""><?=$val?><br>
<?php endforeach;?>
<?php endif;?>

<?php if($value['type']=="SIMPLE"):?>
<?php foreach($value['reponse'] as $val):?> <br> 
<input type="radio" name="" id=""><?=$val?>
<?php endforeach;?> 
<?php endif;?>
<?php if($value['type']=="TEXTE"):?>
<?php foreach($value['reponse'] as $val):?> 
<input class="textes" type="text" name="" id="">
<?php endforeach;?> 
<?php endif;?>

<?php $a=$a+1; ?> 

<?php endforeach;?>
</table>

</div>

<div class="btn">
<?php if($page<$totalPages): ?>
<button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.question&page=<?=$page+1;?>">Suivant</a></button> 
<?php endif?>
<?php if($page!=1): ?>
<button type="submit" name="btn_suiv" id="suiv" ><a href="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/?controller=user&action=liste.question&page=<?=$page-1;?>">Precedent</a></button>
<?php endif?>
</div>

