<div class="titulo">Upload</div>
<?php
error_reporting(E_ERROR);
print_r($_FILES);
echo '<br>';
$validarArquivoImg = $_FILES['arquivo']['type'];


if (strpos($validarArquivoImg, 'image')!==false) {
    if ($_FILES && $_FILES['arquivo']) {
        $pastaUpload = 'C:/pasta de estudos/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if (move_uploaded_file($tmp, $arquivo)) {// pegue o arquivo dessa pasta e jogue nessa basicamente é isso
            echo "<br>Arquivo válido e enviado com sucesso.";
        } else {
            echo "Erro no upload de arquivo!";
        }
    }
}else{
    echo "Por favor envie um documento de imagem!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" multiple accept="image/*" required>
    <button>Enviar</button>


</form>
