<?php

$search = urlencode($_POST['search']);
$table = $_POST['tabela'];

switch ($table) {
case 'intalniri':
    header("Location: cautare_intalnire.php?search=$search");	
    break;
case 'clienti':
    header("Location: cautare_client.php?search=$search");	
    break;
case 'produse':
    header("Location: cautare_produs.php?search=$search");	
    break;

case 'furnizori':
    header("Location: cautare_furnizor.php?search=$search");	
    break;

case 'contacte':
    header("Location: cautare_contact.php?search=$search");	
    break;
};

?>
