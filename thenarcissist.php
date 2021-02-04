function narcissistic(int $value): bool {
  // Convert integer to string
  $str_val = (string)$value;
  
  // Create a buffer to prepare for explode function
  $new_val = chunk_split($str_val, 1,".");
  
  // Explode characters into an Array
  $arr_val = explode(".", $new_val);
  
  // Remove last element, trim whitespace
  unset($arr_val[count(($arr_val))-1]);
  
  // Initialize values for calculating process
  $sum = 0;
  $result = 0;
  
  // Loip through Array to apply Narcissistic number formula
  for ($i = 0; $i < strlen($value); $i++) {
     $result = pow($arr_val[$i], strlen($value));
     $sum = $sum + $result;
  }
  
  // Compare the output to original number and return appropriate Boolean value
   
   if ($sum == $value) {
      return true;
   } else {
     return false;
   }
   
   
   
}
