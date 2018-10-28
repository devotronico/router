<?php
// Funzione per convertire le unità di misura 'microtime' in un unità di misura più leggibile
function convert_time($time)
{
    if($time == 0 ){
        return 0;
    }
  
    $unit=array(-4=>'ps', -3=>'ns',-2=>'mcs',-1=>'ms',0=>'s');
   
    $i=min(0,floor(log($time,1000)));

    
    $t = @round($time/pow(1000,$i) , 1);
    return $t.$unit[$i];
}




/*----------------------------------------------------------------------------------------------------
| Funzione 'method_exists'
| Confronto tra il passaggio come primo argomento:
|   [1] istanza di una classe
|   [2] stringa del nome di una classe
|   Risultato [1] più veloce di [2]     
*/
class nome_classe {

  function nome_metodo() {
    // codice funzione
  }
}

$oggetto = new nome_classe;


$start = microtime(true);
echo method_exists("nome_classe", "nome_funzione"); // 1 (true)
$stop = microtime(true);
$time1 = $stop - $start;
 
$start = microtime(true);
echo method_exists($oggetto, "nome_funzione"); // 1 (true)
$stop = microtime(true);
$time2 = $stop - $start;


echo convert_time($time1) . "\n";
echo convert_time($time2) . "\n";
//----------------------------------------------------------------------------------------------------


?>
