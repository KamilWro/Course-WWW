<?PHP
$katalog = 'upload/';
if(move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name'])){
    echo("Plik zosta³ za³adowany.");
}
else{
    echo("Plik nie zosta³ za³adowany.");
}
?>
