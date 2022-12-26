<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
?>
<header>
    <nav class="navBar" id="navBar">
        <div class="navContainerLeft">
            <a href="/project/home.php">
                <img src="/project/image/logo.jpg" alt="logo" srcset="">
                <h1 id="foodFest">Covid win</h1>
            </a>
        </div>
        <div class="navContainerRight">
            <!-- <form class="search" method="post" action="/FoodFest/user/food_Item.php">
                <input type="search" name="query" id="query" placeholder="Search for food">
                
            </form> -->
            <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){
                echo '
                    <ul>
                        <li class="listItem">
                            <a class="itemLink" href="/project/home.php">Home</a>
                        </li>
                        <li class="listItem">
                            <a class="itemLink" href="/project/bookSlot.php">Book vaccine slot</a>
                        </li>
                        
                        <h2>Hi&nbsp; <em>'.$_SESSION['userName'].'</em></a></h2>
                        
                        <button class="headerBtn logoutBtn">Logout</button>
                        
                    </ul>

                    
                ';
            }
            else{
                echo '
                    <ul>
                        <li class="listItem">
                            <a class="itemLink" href="/project/home.php">Home</a>
                        </li>
                        <li class="listItem">
                            <a class="itemLink" href="/project/bookSlot.php">Book vaccine slot</a>
                        </li>
                        
                        <li class="listItem">
                            <a class="itemLink" href="/project/regi.php">Registration</a>
                        </li>
                        
                    </ul>
                ';   
            }
            ?>


            <!-- <div class="loginContainer">
                <a href="/FoodFest/account.php"><button type="button" class="loginBtn btn"
                        id="loginBtn">Login</button></a>
            </div> -->
        </div>
    </nav>
</header>

