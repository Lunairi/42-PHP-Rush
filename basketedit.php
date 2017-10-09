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
<?php require('./navbar.php') ?>
    <form class="main-container catalog" action="changebasket.php">
        <div class="title">Edit Basket</div>
        <table>
            <tr class="table-title"><td>Item</td><td>Quantity</td><td>Price</td><td>Total</td></tr>
<?php
    if (!$_SESSION['logged_on'])
        echo "You must be logged in to view this.";
    else
    {
        $basket = unserialize(file_get_contents('./secure/basket'));
        $data = unserialize(file_get_contents('./secure/data'));
        foreach ($basket as $key => $arg) 
        {
            if ($arg['login'] === $_SESSION['logged_on'])
                $cart = 1;
            if ($cart && !$disp)
            {
                $disp = 1;
                if ($basket[$key]['soil1'] > 0)
                {
                    $price1 = $basket[$key]['soil1'] * $data['soil1p'];
                    echo '<tr><td>' . $data['soil1'] . '</td><td><input type="number" name="soil1" value="' . $basket[$key]['soil1'] . '" /></td><td> $' . $data['soil1p'] . '</td><td> $' . $price1 . '</td></tr>';
                }
                if ($basket[$key]['soil2'] > 0)
                {
                    $price2 = $basket[$key]['soil2'] * $data['soil2p'];
                    echo '<tr><td>' . $data['soil2'] . '</td><td><input type="number" name="soil2" value="' . $basket[$key]['soil2'] . '" /></td><td> $' . $data['soil2p'] . '</td><td> $' . $price2 . '</td></tr>';
                }
                if ($basket[$key]['soil3'] > 0)
                {
                    $price3 = $basket[$key]['soil3'] * $data['soil3p'];
                    echo '<tr><td>' . $data['soil3'] . '</td><td><input type="number" name="soil3" value="' . $basket[$key]['soil3'] . '" /></td><td> $' .$data['soil3p'] . '</td><td> $' . $price3 . '</td></tr>';
                }
                if ($basket[$key]['soil4'] > 0)
                {
                    $price4 = $basket[$key]['soil4'] * $data['soil4p'];
                    echo '<tr><td>' . $data['soil4'] . '</td><td><input type="number" name="soil4" value="' . $basket[$key]['soil4'] . '" /></td><td> $' . $data['soil4p'] . '</td><td> $' . $price4 . '</td></tr>';
                }
                if ($basket[$key]['soil5'] > 0)
                {
                    $price5 = $basket[$key]['soil5'] * $data['soil5p'];
                    echo '<tr><td>' . $data['soil5'] . '</td><td><input type="number" name="soil5" value="' . $basket[$key]['soil5'] . '" /></td><td> $' . $data['soil5p'] . '</td><td> $' . $price5 . '</td></tr>';
                }
                if ($basket[$key]['soil6'] > 0)
                {
                    $price6 = $basket[$key]['soil6'] * $data['soil6p'];
                    echo '<tr><td>' . $data['soil6'] . '</td><td><input type="number" name="soil6" value="' . $basket[$key]['soil6'] . '" /></td><td> $' . $data['soil6p'] . '</td><td> $' . $price6 . '</td></tr>';
                }
                if ($basket[$key]['soil7'] > 0)
                {
                    $price7 = $basket[$key]['soil7'] * $data['soil7p'];
                    echo '<tr><td>' . $data['soil7'] . '</td><td><input type="number" name="soil7" value="' . $basket[$key]['soil7'] . '" /></td><td> $' . $data['soil7p'] . '</td><td> $' . $price7 . '</td></tr>';
                }
                if ($basket[$key]['soil8'] > 0)
                {
                    $price8 = $basket[$key]['soil8'] * $data['soil8p'];
                    echo '<tr><td>' . $data['soil8'] . '</td><td><input type="number" name="soil8" value="' . $basket[$key]['soil8'] . '" /></td><td> $' . $data['soil8p'] . '</td><td> $' . $price8 . '</td></tr>';
                }
                if ($basket[$key]['soil9'] > 0)
                {
                    $price9 = $basket[$key]['soil9'] * $data['soil9p'];
                    echo '<tr><td>' . $data['soil9'] . '</td><td><input type="number" name="soil9" value="' . $basket[$key]['soil9'] . '" /></td><td> $' . $data['soil9p'] . '</td><td> $' . $price9 . '</td></tr>';
                }
                $totalprice = $price1 + $price2 + $price3 + $price4 + $price5 + $price6 + $price7 + $price8 + $price9;
            }
        }
    }
?>
        </td><td></td><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr><td><?php echo 'Final Total: </td><td> $' . $totalprice . '</td>'; ?>
        </td><td>
        </table>
    
            <tr>
                <td><input type="submit" name="update" value="Edit Cart" /></td>
                <td><a href="./basket.php">Back to Basket</a></td>
            </tr>'
        
    </form>
</body>
</html>