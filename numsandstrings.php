function alphabet_position(string $s): string {
      // Transform string to all upper case and remone Non Alphanumeric characters
    $s = strtoupper($s);
    $s = preg_replace('/[^A-Z]/', '', $s);
    
    // Initialize variable to concatenate letters
   $word = '';
   
   // Buffer string with period to prepare for explode function
   $chunked = chunk_split($s, 1, ".");
 
   // Transform string into array of characters
   $arr = explode(".", $chunked);
 
   // Use loop to calculate position of alphabet using ASCII codes
  
for($i = 0; $i < count($arr); $i++)
 {
   $pos = abs(ord($arr[$i]) - 64)." ";
   
   if ($pos == 32) { continue; }
   


   if (!$arr[$i] != " ") { 
   $word = $word.$pos;
   } else {
     continue;
   }
 }
 
 // Remove whitespace
 $word = rtrim($word);
 
 // Return Result
 return $word;
 }
