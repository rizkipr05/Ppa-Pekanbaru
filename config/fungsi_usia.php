<?php
// Fungsi usia
function get_age($birth_date){
  date_default_timezone_set("Asia/Jakarta");
  return floor((time() - strtotime($birth_date))/31556926);
}
?> 
