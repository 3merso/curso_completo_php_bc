<?php

$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$upLoadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// verifica se o arquivo de imagem e real
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

    if ($check !== false) {
        echo "O arquivo é uma imagem - " . $check['mime'] . "<br>";
    } else {
        echo "O arquivo não é uma imagem";
        $upLoadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Desculpe, já existe";
    $upLoadOk = 0;
}

if ($_FILES['fileToUpload']['size'] > 500000) {
    echo "Arquivo muito grande";
    $upLoadOk = 0;
}

if ($imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'png' && $imageFileType != 'gif') {
    echo "Formato do arquivo inválido";
    $upLoadOk = 0;
}

if ($upLoadOk === 0) {
    echo "O arquivo não pôde ser enviado ao servidor";
} else {
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "O arquivo " . basename($_FILES['fileToUpload']['name']) . " foi enviado com sucesso!";
    } else {
        echo "Erro ao enviar arquivo para o servidor";
    }


}
