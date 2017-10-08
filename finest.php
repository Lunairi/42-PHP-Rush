<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Best dirt in town</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
    <link rel="stylesheet" type="text/css" href="./styles/index.css">
</head>
<body>

	<nav>
		<a href="./index.php">Dirt... just dirt.</a>
		<?php
			if ($_SESSION['logged_on'])
			{
				echo '<p class="userlog">';
				echo $_SESSION['logged_on'];
				echo '</p>';
			}
		?>
		<ul><a href="./index.php">Dirt<img src="./src/logo.png" /></a>
			<div class="dropdown-content">
			<?php
				if (!$_SESSION['logged_on'])
					echo'<a href="./login.php"><li>Login</li></a>';
				else
					echo'<a href="./logout.php"><li>Logout</li></a>';
			?>
				<a href="./settings.php"><li>Settings</li></a>
				<a href="./basket.php"><li>Basket</li></a>
				<a href="./checkout.php"><li>Checkout</li></a>
			</div>
		</ul>
	</nav>

    <form class="main-container catalog" action="additem.php" method="POST">
        <div class="title">Our finest of all fine selection of dirt:</div>
        <div class="item-container">

        <?php
        $data = unserialize(file_get_contents('./secure/data'));
        if ($data['soil1t'] == 4)
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
        if ($data['soil2t'] == 4)
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
        if ($data['soil3t'] == 4)
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
        if ($data['soil4t'] == 4)
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
        if ($data['soil5t'] == 4)
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
        if ($data['soil6t'] == 4)
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
        if ($data['soil7t'] == 4)
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
        if ($data['soil8t'] == 4)
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
        if ($data['soil9t'] == 4)
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
</body>
</html>