<?PHP
$katalog = 'upload/';
if(move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name'])){
    echo("Plik zosta� za�adowany.");
}
else{
    echo("Plik nie zosta� za�adowany.");
}
?>
