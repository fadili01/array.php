<?php
// for ($i = 0; $i <= 50; $i++) {
//     echo $i . "\n";
// }

// $namen = ["ahmed", 'mohamed','mustapha','yassine','anwar', 'abdorrahim','noura','kawtar','fadoua','imane'];

// $aantal = count($namen);
// for ($i = 0; $i < $aantal; $i++) {
//  echo $namen[$i]. '<br>';
// }



// $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

// for ($i = 0; $i < count($maanden); $i++) {
//     echo 'Maand '.($i + 1).' is '.$maanden[$i].'.<br />';
// }



$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

foreach ($maanden as $index => $maand) {
    echo 'Maand '.($index + 1).' is '.$maand.'. <br />';
}




?>
