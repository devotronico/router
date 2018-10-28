<?php
//declare(strict_types=1);
/*
function View($device, $view, array $files=[], array $data=[]):string{
   
  extract($data); // estraiamo tutti i dati sui post per inserirli nel template
  ob_start(); // catturiamo tutto nel buffer
  foreach ( $files as $file ) {require 'app/views/'.$device.'/view-'.$view.'/'.$file.'.tpl.php';}// i post andranno in questo file di template
  $output = ob_get_contents(); // qui verrà catturato tutto il contenuto del file 'post.tpl.php'
  ob_end_clean(); // liberiamo la memoria | meglio disattivare altrimenti non ritorna $data
  //var_dump($output);
  return $output; // ritorniamo il tutto per farlo recuperare nel metodo 'Process'
}
*/





function _view(string $page, $data=[]) {
  extract($data);
  ob_start(); // catturiamo tutto nel buffer
  require "app/views/".$page.".tpl.php"; // template da catturare
  // require "app/views/blog.tpl.php"; // template da catturare
  $template = ob_get_contents(); // nella variabile viene immagazzionato tutto il template catturato
  ob_end_clean(); // liberiamo la memoria | meglio disattivare altrimenti non ritorna $data
  return $template;
}



function _redirect($uri ='/', $message=''){

  $mess = !empty($message)?"?message=".urlencode($message):'';
  header("Location:".$uri.$mess);
  die(); // die è più veloce di exit
}



function _somma($x, $y) {
 // die('la funzione '.__FUNCTION__.' ritorna la somma di'.$x.' + '.$y.);
 $z = $x+$y;
  die('la somma di '.$x.' + '.$y.' è uguale a '.$z);
}




/*

function redirect($uri ='/', $message=''){

  $mess = !empty($message)?"?message=".urlencode($message):'';
  header("Location:".$uri.$mess);
  die(); // die è più veloce di exit
}



function dateFormatted($dateOld){

 $temp = preg_split("/[-\s:]/", $dateOld);

 $temp[2] = ltrim($temp[2], '0' );

 switch($temp[1]){
     case '01': $temp[1]  = 'gennaio'; break;
     case '02': $temp[1]  = 'febbraio'; break;
     case '03': $temp[1]  = 'marzo'; break;
     case '04': $temp[1]  = 'aprile'; break;
     case '05': $temp[1]  = 'maggio'; break;
     case '06': $temp[1]  = 'giugno'; break;
     case '07': $temp[1]  = 'luglio'; break;
     case '08': $temp[1]  = 'agosto'; break;
     case '09': $temp[1]  = 'settembre'; break;
     case '10': $temp[1]  = 'ottobre'; break;
     case '11': $temp[1]  = 'novembre'; break;
     case '12': $temp[1]  = 'dicembre'; break;

 }

  $dateNew = $temp[2].' '.$temp[1].' '.$temp[0].' , '.$temp[3].':'.$temp[4];

  return $dateNew;
}


function truncate_words($text, $limit, $ellipsis=' ...') {
  $words = preg_split("([\s])", $text, $limit + 1, PREG_SPLIT_NO_EMPTY);
  if ( count($words) > $limit ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $ellipsis;
  }
  return $text;
}
*/