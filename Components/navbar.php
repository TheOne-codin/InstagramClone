
<style>
<?php
include 'styles/home.css'

?>
</style>


<div class="navbar">
        <div class="instaLogo">
            <a href="index.php"> Instagram</a>
        </div>
        <div class="searchBox">

            <input class="searchBar" type="text" placeholder="Search">
            <i class="fas fa-search" style="color: gray; font-size: 10px;"></i>
        </div>


        <div class="menuItems">
            <i class="fas fa-home"></i>
            <i class="fab fa-facebook-messenger mIcon"></i>
            <i class="far fa-compass"></i>
            <i class="far fa-heart"></i>
            <div onclick='SignOut()' class="profileIcon">Sign Out</div>
        </div>
    </div>

    <script>
    function SignOut() {
        auth.signOut().then(()=>{
            alert('Signed Out!')
            window.location.href = 'index.php'
        })
    }
    </script>
