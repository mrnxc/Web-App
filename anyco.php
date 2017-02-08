<?php
  require('anyco-ui.inc'); 
  
  $conn = oci_connect('hr','hr','//localhost/XE');
  ui_print_header('Department');
  do_query($conn, 'SELECT * FROM DEPARTMENTS')
  ui_print_footer(date('Y-m-d H:i:s'));
  
  functions do_query($conn, $query){
    $stid = oci_parse($conn, $query);
    $r = oci_execute($stid, OCI_DEFAULT);
  
  
  print ' <table bord3er = "1">';
   while($row =oci_fetch_array($stid, OCI_RETURN_NULLS)) {
      print '<tr>'.
        ($item ?htmlentities($itme): '&nbsp;'). '</td>';
        
   }
   print '</tr>';
   
}
  print '</table>';
}
  ?>
