<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
$id = $_GET['id'];
?>
 <h1>Home</h1>
<?php
for ($i=0; $i < 3; $i++) (
echo $produtos [$id]['nome'];
echo $produtos [$id]['preco'];
echo $produtos [$id]['imagem'];
echo '<img src="' .$produtos[$i]['imagem'].'">'
echo '<hr>';
)
?>


<img sec="<?php echo $produtos[$id]['imagem'];?>">


<?php
include_once '.includes/_footer.php';
?>