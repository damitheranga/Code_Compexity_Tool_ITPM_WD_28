<?php
$name="20011aa";
if(!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/',$name))
   echo $name.' is not a valid PHP variable name';
else
   echo $name.' is valid PHP variable name';
?>