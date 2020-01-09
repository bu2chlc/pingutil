        <?php
          function pingAddress($ip) {
  $pingresult = exec("/bin/ping -c2 -w2 $ip", $outcome, $status);  
  if (isset ($_POST['ipaddy'])) {
  if ($status==0) {
    echo '<div class="" role="alert">';
      echo $ip .  " is alive";
    echo '</div';
    } else {
      echo $ip .  " is dead";
    }
    return $status;
} echo '<div class="" role="alert">';
  echo "no ip selected";
echo "</div>";}
pingAddress($_POST['ipaddy']);
          ?>
