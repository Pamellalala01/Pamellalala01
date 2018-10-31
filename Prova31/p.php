<?php

// Verifica se o arquivo já fi adicionado antes
if (file_exists($target_arquivo)) {
	echo "Erro! este arquivo já existe";
	$uploadOk = 0;
}

// Verifica o tamanho do arquivo
if ($_FILES["fileToUpload"]["size"] >  2000) {
	echo "Erro! este arquivo é muito grande. O tamanho máximo é 2000KB";
	$uploadOk = 0;
}
// Verificando os formatos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}
?>
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

