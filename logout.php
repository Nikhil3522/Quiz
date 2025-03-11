<?php
setcookie(
    'mobilenumber', 
    null, 
    time() + (60*60),  // Cookie expiry
    '/',  // Path
    ''   // Domain
  );
    Header('Location: sign-in.html');
?>