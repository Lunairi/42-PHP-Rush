<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Best dirt in town</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
    <link rel="stylesheet" type="text/css" href="./styles/basket.css">
</head>
<body>
    <nav>
        Dirt... just dirt.
        <ul><a href="./index.php">Dirt<img src="./src/logo.png" /></a>
            <div class="dropdown-content">
                <a href="./login.php"><li>Login</li></a>
                <a href="./settings.php"><li>Settings</li></a>
                <a href="./basket.php"><li>Basket</li></a>
                <a href="./checkout.php"><li>Checkout</li></a>
            </div>
        </ul>
    </nav>
    <form class="main-container catalog" action="update.php">
        <div class="title">Basket</div>
        <table>
            <tr class="table-title"><td>Item</td><td>Quantity</td><td>Price</td></tr>
<?php
    if (!$_SESSION['logged_on'])
        echo "You must be logged in to view this.";
    else
    {
        $basket = unserialize(file_get_contents('./secure/basket'));
        foreach ($basket as $key => $arg) 
        {
            if ($arg['login'] === $_SESSION['logged_on'])
                $cart = 1;
            if ($cart && !$disp)
            {
                $disp = 1;
                if ($basket[$key]['soil1'] > 0)
                    echo '<tr><td>Magic: </td><td><input type="number" min="0" value="' . $basket[$key]['soil1'] . '" /></td><td>' . $basket[$key]['price1'] . '</td></tr>';
                if ($basket[$key]['soil2'] > 0)
                    echo '<tr><td>Serenity: </td><td><input type="number" min="0" value="' . $basket[$key]['soil2'] . '" /></td><td>' . $basket[$key]['price2'] . '</td></tr>';
                if ($basket[$key]['soil3'] > 0)
                    echo '<tr><td>Tranquility: </td><td><input type="number" min="0" value="' . $basket[$key]['soil3'] . '" /></td><td>' . $basket[$key]['price3'] . '</td></tr>';
                if ($basket[$key]['soil4'] > 0)
                    echo '<tr><td>Transformation: </td><td><input type="number" min="0" value="' . $basket[$key]['soil4'] . '" /></td><td>' . $basket[$key]['price4'] . '</td></tr>';
                if ($basket[$key]['soil5'] > 0)
                    echo '<tr><td>Freedom: </td><td><input type="number" min="0" value="' . $basket[$key]['soil5'] . '" /></td></tr>';
                if ($basket[$key]['soil6'] > 0)
                    echo '<tr><td>Magic: </td><td><input type="number" min="0" value="' . $basket[$key]['soil1'] . '" /></td><td>' . $basket[$key]['price1'] . '</td></tr>';
                if ($basket[$key]['soil7'] > 0)
                    echo '<tr><td>Determination: </td><td><input type="number" min="0" value="' . $basket[$key]['soil6'] . '" /></td><td>' . $basket[$key]['price6'] . '</td></tr>';
                if ($basket[$key]['soil8'] > 0)
                    echo '<tr><td>Might: </td><td><input type="number" min="0" value="' . $basket[$key]['soil8'] . '" /></td><td>' . $basket[$key]['price8'] . '</td></tr>';
                if ($basket[$key]['soil9'] > 0)
                    echo '<tr><td>Purity: </td><td><input type="number" min="0" value="' . $basket[$key]['soil9'] . '" /></td><td>' . $basket[$key]['price9'] . '</td></tr>';
            }
        }
    }
?>
        <tr><td>Total: </td><td></td><td></td>
        </table>
    
            <tr>
                <td><input type="submit" name="update" value="Edit Cart" /></td>
                <td><a href="./checkout.php">Checkout</a></td>
            </tr>'
        
    </form>
</body>
</html>