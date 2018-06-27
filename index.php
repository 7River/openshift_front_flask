
<?php
echo gethostname();
$ip= getenv('BACK_PY_SERVICE_HOST');
$port== getenv('BACK_PY_SERVICE_PORT');
echo $ip.':'.$port;
?>

<input name="btn" id="btn" type="button" OnClick="fn()"></input>
<div id="div"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
function fn(){
  $.get(
<?php

echo "'".$ip.':'.$port."'"

?>
, function( data ) {$( 'div' ).html( data );});
}

</script>




?>
