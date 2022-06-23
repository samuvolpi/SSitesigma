<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
<h2>Promoçao</h2>   
<div class="row mt-5">


    <?php
    for ($i=0; $i < 10 ; $i++){
    ?>
        
    <div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos [$i]['nome'];?></h5>
    <p class="card-text"><?php echo $produtos [$i]['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $i?>&tipo=promocao" class="btn btn-primary">Visitar</a>
  </div>
</div>

<?php
}
?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>