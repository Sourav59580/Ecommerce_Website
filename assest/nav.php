<div class="container-fluid shadow-sm bg-white">
    <nav class="container navbar navbar-expand-sm bg-white">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
            <?php
            $get_category = "SELECT category_name FROM category";
            $response = $db->query($get_category);
            if ($response) {
                while ($data = $response->fetch_assoc()) {
                    echo "<li class='nav-item'><a href='#' class='nav-link text-uppercase'>" . $data['category_name'] . "</a></li>";
                }
            }
            ?>  
        </ul>
        <ul class="navbar-nav ml-auto">
           <li class="nav-item "><a class="nav-link"><i class="fa fa-search"></i></a></li>
           <li class="nav-item "><a class="nav-link"><i class="fa fa-shopping-bag"></i></a></li>
           <li class="nav-item "><a class="nav-link"><i class="fa fa-user-circle-o"></i></a></li>
        </ul>
    </nav>
</div>