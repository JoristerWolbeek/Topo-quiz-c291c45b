<?php
$landen = ["Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"Washington D.C.", "India"=>"New Dehli", "Zuid-Korea"=>"Seoul", "China"=>"Peking", "Nigeria"=>"Abuja", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "UK"=>"London"];
$score = 0;

foreach($landen as $key=>$val) {
    echo("Wat is de hoofdstad van ".$key."? ");
    $ant = readline();
    if($ant == $val){
        $score++;
        echo("Goed!".PHP_EOL);
    }
}
echo("Je score is ".$score." van de totale 10" );

