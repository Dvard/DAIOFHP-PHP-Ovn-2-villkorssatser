<?php
$i = 5;
$kalle = 'kock';
$kalle_message_prefix = 'Kalle är ';

# Uppgift 2 & 3
# Metod 1
$kalle_message_1 = 'Vet inte vad Kalle gör';
$professions = array('kodare', 'kock', 'svetsare');
if (in_array($kalle, $professions)) {
    $kalle_message_1 = $kalle_message_prefix . $kalle;
}

# Metod 2
$kalle_message = '';
switch ($kalle) {
    case 'kodare':
        $kalle_message = $kalle_message_prefix . 'kodare';
        break;
    case 'svetsare':
        $kalle_message = $kalle_message_prefix . 'svetsare';
        break;
    case 'kock':
        $kalle_message = $kalle_message_prefix . 'kock';
        break;
    default:
        $kalle_message = 'Vet inte vad Kalle gör';
        break;
}

$today = date('D');
$date_message = 'ogiltigt värde';
if ($today == 'Mon') {
    $date_message = 'Idag är det måndag';
} elseif ($today == 'Tue') {
    $date_message = 'Tisdag är det idag!';
} elseif ($today == 'Wed') {
    $date_message = 'Onsdag är det idag';
} elseif ($today == 'Thu') {
    $date_message = 'Torsdag.';
} elseif ($today == 'Fri') {
    $date_message = 'Fredag :)';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Övning - 2</title>
    </head>
    <body>
        <!-- Upg 1 -->
        <?php if ($i >= 2) {?>
            <p><?php echo $i . ' är större än 2'?></p>
        <?php }?>

        <!-- Upg 2 & Upg 3 -->
        <p><?php echo $kalle_message_1?></p>
        <p><?php echo $kalle_message?></p>

        <!-- Upg 4 -->
        <!-- Skriver ut namnet på veckodagen (förkortat) -->
        <p><?php echo date('D')?></p>

        <!-- Upg 5 -->
        <p><?php echo $date_message?></p>
    </body>
</html>
