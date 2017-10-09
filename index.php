<?php
    session_start();
    if (!file_exists('./secure')) 
        mkdir("./secure");
    if (!file_exists('./secure/password')) 
        file_put_contents('./secure/password', null);
    if (!file_exists('./secure/deletelog')) 
        file_put_contents('./secure/deletelog', null);
    if (!file_exists('./secure/createlog')) 
        file_put_contents('./secure/createlog', null);
    if (!file_exists('./secure/checkout')) 
        file_put_contents('./secure/checkout', null);
    if (!file_exists('./secure/basket')) 
        file_put_contents('./secure/basket', null);

    $data = unserialize(file_get_contents('./secure/data'));
    $origin = $_SESSION['origin'] = $_POST['filter-origin'];
    $texture = $_SESSION['texture'] = $_POST['filter-texture'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Best dirt in town</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
    <link rel="stylesheet" type="text/css" href="./styles/index.css">
</head>
<body>

    <?php require('./navbar.php') ?>

    <div class="main-container catalog">

        <div class="title">Our finest selection of dirt:</div>

        <form class="filter" method="post" action="" name="filter">

            <select name="filter-origin" value="">
                <option value="0" <? if ($origin == 0) echo "selected" ?> >All continents</option>
                <option value="1" <? if ($origin == 1) echo "selected" ?> >America</option>
                <option value="2" <? if ($origin == 2) echo "selected" ?> >Asia</option>
                <option value="3" <? if ($origin == 3) echo "selected" ?> >Africa</option>
                <option value="4" <? if ($origin == 4) echo "selected" ?> >Europe</option>
            </select>

            <select name="filter-texture" value="">
                <option value="0" <? if ($texture == 0) echo "selected" ?> >All textures</option>
                <option value="1" <? if ($texture == 1) echo "selected" ?> >Wet</option>
                <option value="2" <? if ($texture == 2) echo "selected" ?> >Dry</option>
                <option value="3" <? if ($texture == 3) echo "selected" ?> >Coarse</option>
                <option value="4" <? if ($texture == 4) echo "selected" ?> >Fine</option>
            </select>

            <input type="submit" name="filter-submit" value="Filter" />

        </form>

        <form action="additem.php" method="POST">
            <div class="item-container">

                <?php

                    if ($data['soil1a'] == 1 && (!$origin || $origin == $data['soil1o']) && (!$texture || $texture == $data['soil1t']))
                    {
                       echo '<div class="item">
                            <img src="./src/soil1.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Magic</div>
                                <div class="price">$10/kg</div>
                                <input type="number" name="soil1" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil2a'] == 1 && (!$origin || $origin == $data['soil2o']) && (!$texture || $texture == $data['soil2t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil2.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Serenity</div>
                                <div class="price">$20/kg</div>
                                <input type="number" name="soil2" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil3a'] == 1 && (!$origin || $origin == $data['soil3o']) && (!$texture || $texture == $data['soil3t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil3.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Tranquility</div>
                                <div class="price">$60/kg</div>
                                <input type="number" name="soil3" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil4a'] == 1 && (!$origin || $origin == $data['soil4o']) && (!$texture || $texture == $data['soil4t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil4.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Transformation</div>
                                <div class="price">$32/kg</div>
                                <input type="number" name="soil4" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil5a'] == 1 && (!$origin || $origin == $data['soil5o']) && (!$texture || $texture == $data['soil5t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil5.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Freedom</div>
                                <div class="price">$40/kg</div>
                                <input type="number" name="soil5" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil6a'] == 1 && (!$origin || $origin == $data['soil6o']) && (!$texture || $texture == $data['soil6t']))
                    {
                       echo '<div class="item">
                            <img src="./src/soil6.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Determination</div>
                                <div class="price">$70/kg</div>
                                <input type="number" name="soil6" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil7a'] == 1 && (!$origin || $origin == $data['soil7o']) && (!$texture || $texture == $data['soil7t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil7.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Might</div>
                                <div class="price">$20/kg</div>
                                <input type="number" name="soil7" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil8a'] == 1 && (!$origin || $origin == $data['soil8o']) && (!$texture || $texture == $data['soil8t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil8.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Guilt</div>
                                <div class="price">$69/kg</div>
                                <input type="number" name="soil8" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    if ($data['soil9a'] == 1 && (!$origin || $origin == $data['soil9o']) && (!$texture || $texture == $data['soil9t']))
                    {
                        echo '<div class="item">
                            <img src="./src/soil9.jpg" />
                            <div class="deets">
                                <div class="dirt-name">Purity</div>
                                <div class="price">$42/kg</div>
                                <input type="number" name="soil9" min="0" value="0" />
                            </div>
                        </div>';
                    }
                    echo '</div>';

                    if ($_SESSION['logged_on'])
                        echo '<input type="submit" name="amount" value="Add to cart"/>';
                    else
                        echo '<a href="./login.php">Login to begin shopping</a>';

                ?>

        </form>

    </div>

</body>

</html>