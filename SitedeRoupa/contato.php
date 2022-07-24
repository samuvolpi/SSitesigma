<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$validado = FALSE;
if( isset( $_POST['txtNome'])){
    $txtnome = strtoupper( $_POST['txtNome']);
    $validado = TRUE;
}
if( isset( $_POST['txtEmail'])){
    $email = strtoupper( $_POST['txtEmail']);
    $validado = TRUE;
}
if( isset( $_POST['txtTelefone'])){
    $telefone = strtoupper( $_POST['txtTelefone']);
    $validado = TRUE;
}
if( isset( $_POST['txtMensagem'])){
    $mensagem = strtoupper( $_POST['txtMensagem']);
    $validado = TRUE;
}
if( $validado === TRUE){
    echo $txtnome.'<br>';
    echo $email.'<br>';
    echo $telefone.'<br>';
    echo $mensagem.'<br>';
}
?>

<h1>Contato</h1>

<div id="area">
    <form id="formulario" autocomplete="off">
      <fieldset>
        <legend>Formulário</legend>
        <label>Nome:</label><input class="campo_nome" type="text"><br>
        <label>Email:</label><input class="campo_email" type="password"><br>
        <label>Mensagem:</label><br><textarea class="msg" cols="35" rows="8"></textarea><br>
        <input class="btn_submit" type="submit" value="Enviar">
      </fieldset>
    </form>
  </div>

<?php
// include do footer
include_once './includes/_footer.php';
?>