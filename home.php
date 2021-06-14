<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-auth.js"></script>
<script src="js/firebaseConfig.js"></script>
<script>
auth.onAuthStateChanged((user) => {
  if (!user) {
    console.log(user)
    // window.location.href = 'index.php'
  }else{
    console.log(user)
  }
});
</script>
<?php 
include "Components/navbar.php"
?>
<?php
include "Components/Feeds.php"
?>


