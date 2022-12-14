<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="frontPage.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        if(!isset($_SESSION['userid'])){
        ?>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="loginform.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa-solid fa-circle-user"></i></i> Log in
                    </h5>
                </a>
            </div>
        </div>
        <?php
        }else {
        ?>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="logout.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa-solid fa-circle-user"></i></i> Log out
                    </h5>
                </a>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['admin'])){
        ?>
        <div>
        <a href="adminPanel.php" class="nav-item nav-link active">
        <button>Admin Panel</button>
        </div>
        <?php
        } else{
        ?>
            <div>
                <a href="adminPanel.php" class="nav-item nav-link active">
                    <button  style="visibility: hidden">Admin Panel</button>
            </div>
            <?php
        }
        ?>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>