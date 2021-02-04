function solution($str, $ending) {
  // TODO: complete it
  // Reverse Input Strings
  $r_str = strrev($str);
  $r_end = strrev($ending);
  
  // Match $str ending according to $ending length
  $result = substr($r_str,0, strlen($r_end));
  
  // Get comparison result in Numeric Form
  $num_res = strcmp($result, $r_end);
  
  // Convert Numeric result to Boolean
  if ($num_res == 0) :
    return true;
  endif;
  return false;


  
}
