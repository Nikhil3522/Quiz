<?php
  // unset the session
  session_unset();
  setcookie(
    'mobilenumber', 
    null, 
    time() + (60*60),  // Cookie expiry
    '/',  // Path
    ''   // Domain
  );
  setcookie(
    'user_id', 
    null, 
    time() + (60*60),  // Cookie expiry
    '/',  // Path
    ''   // Domain
  );
    Header('Location: sign-in.php');
?>