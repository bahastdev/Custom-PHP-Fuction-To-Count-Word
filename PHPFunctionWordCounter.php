function word_count($str) {
 
   $wordcount = 0;
 
   for($i=0;$i < strlen($str);$i++){
 
      if($str[$i]!=' '){
          $wordcount++;
 
          while($str[$i]!=' '){
              $i++;
          }
      }
 
  }
 
  return $wordcount;
}


