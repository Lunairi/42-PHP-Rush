<?php
    session_start();
    $data = unserialize(file_get_contents('./secure/data'));
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Best dirt in town</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
    <link rel="stylesheet" type="text/css" href="./styles/basket.css">
    <link rel="stylesheet" type="text/css" href="./styles/edit.css">
</head>
<body>
<?php require('./navbar.php') ?>
    <form class="main-container catalog" action="admincategory.php">
    <?php
    if ($_SESSION['product'] == 1)
        echo "Product has been changed.";
    else
        echo '<div class="title">Edit Products</div>';
    $_SESSION['product'] = "";
    ?>
        <table>
            <tr class="table-title">
                <td>Name</td>
                <td>Texture</td>
                <td>Origin</td>
                <td>Price</td>
                <td>Availabile</td>
            </tr>
            
            <tr>
                <td><input type="text" name="name1" value=<?php echo $data['soil1'] ?> /></td>
                <td>
                    <select name="texture1" value="">
                        <option value="1" <?php if ($data['soil1t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil1t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil1t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil1t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin1" value="">
                        <option value="1" <?php if ($data['soil1o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil1o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil1o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil1o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price1" min=0 value=<?php echo $data['soil1p'] ?> /></td>
                <td>
                    <select name="available1" value="">
                        <option value="1" <?php if ($data['soil1a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil1a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name2" value=<?php echo $data['soil2'] ?> /></td>
                <td>
                    <select name="texture2" value="">
                        <option value="1" <?php if ($data['soil2t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil2t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil2t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil2t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin2" value="">
                        <option value="1" <?php if ($data['soil2o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil2o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil2o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil2o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price2" min=0 value=<?php echo $data['soil2p'] ?> /></td>
                <td>
                    <select name="available2" value="">
                        <option value="1" <?php if ($data['soil2a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil2a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name3" value=<?php echo $data['soil3'] ?> /></td>
                <td>
                    <select name="texture3" value="">
                        <option value="1" <?php if ($data['soil3t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil3t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil3t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil3t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin3" value="">
                        <option value="1" <?php if ($data['soil3o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil3o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil3o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil3o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price3" min=0 value=<?php echo $data['soil3p'] ?> /></td>
                <td>
                    <select name="available3" value="">
                        <option value="1" <?php if ($data['soil3a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil3a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name4" value=<?php echo $data['soil4'] ?> /></td>
                <td>
                    <select name="texture4" value="">
                        <option value="1" <?php if ($data['soil4t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil4t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil4t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil4t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin4" value="">
                        <option value="1" <?php if ($data['soil4o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil4o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil4o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil4o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price4" min=0 value=<?php echo $data['soil4p'] ?> /></td>
                <td>
                    <select name="available4" value="">
                        <option value="1" <?php if ($data['soil4a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil4a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name5" value=<?php echo $data['soil5'] ?> /></td>
                <td>
                    <select name="texture5" value="">
                        <option value="1" <?php if ($data['soil5t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil5t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil5t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil5t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin5" value="">
                        <option value="1" <?php if ($data['soil5o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil5o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil5o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil5o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price5" min=0 value=<?php echo $data['soil5p'] ?> /></td>
                <td>
                    <select name="available5" value="">
                        <option value="1" <?php if ($data['soil5a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil5a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name6" value=<?php echo $data['soil6'] ?> /></td>
                <td>
                    <select name="texture6" value="">
                        <option value="1" <?php if ($data['soil6t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil6t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil6t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil6t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin6" value="">
                        <option value="1" <?php if ($data['soil6o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil6o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil6o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil6o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price6" min=0 value=<?php echo $data['soil2p'] ?> /></td>
                <td>
                    <select name="available6" value="">
                        <option value="1" <?php if ($data['soil6a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil6a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name7" value=<?php echo $data['soil7'] ?> /></td>
                <td>
                    <select name="texture2" value="">
                        <option value="1" <?php if ($data['soil7t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil7t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil7t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil7t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin7" value="">
                        <option value="1" <?php if ($data['soil7o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil7o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil7o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil7o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price7" min=0 value=<?php echo $data['soil7p'] ?> /></td>
                <td>
                    <select name="available7" value="">
                        <option value="1" <?php if ($data['soil7a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil7a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name8" value=<?php echo $data['soil8'] ?> /></td>
                <td>
                    <select name="texture8" value="">
                        <option value="1" <?php if ($data['soil8t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil8t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil8t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil8t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin8" value="">
                        <option value="1" <?php if ($data['soil8o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil8o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil8o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil8o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price8" min=0 value=<?php echo $data['soil8p'] ?> /></td>
                <td>
                    <select name="available8" value="">
                        <option value="1" <?php if ($data['soil8a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil8a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="text" name="name9" value=<?php echo $data['soil9'] ?> /></td>
                <td>
                    <select name="texture9" value="">
                        <option value="1" <?php if ($data['soil9t'] == 1) echo "selected" ?> >Wet</option>
                        <option value="2" <?php if ($data['soil9t'] == 2) echo "selected" ?> >Dry</option>
                        <option value="3" <?php if ($data['soil9t'] == 3) echo "selected" ?> >Coarse</option>
                        <option value="4" <?php if ($data['soil9t'] == 4) echo "selected" ?> >Fine</option>
                    </select>
                </td>
                <td>
                    <select name="origin9" value="">
                        <option value="1" <?php if ($data['soil9o'] == 1) echo "selected" ?> >America</option>
                        <option value="2" <?php if ($data['soil9o'] == 2) echo "selected" ?> >Asia</option>
                        <option value="3" <?php if ($data['soil9o'] == 3) echo "selected" ?> >Africa</option>
                        <option value="4" <?php if ($data['soil9o'] == 4) echo "selected" ?> >Europe</option>
                    </select>
                </td>
                <td><input type="number" name="price9" min=0 value=<?php echo $data['soil9p'] ?> /></td>
                <td>
                    <select name="available9" value="">
                        <option value="1" <?php if ($data['soil9a'] == 1) echo "selected" ?> >Yes</option>
                        <option value="0" <?php if ($data['soil9a'] == 0) echo "selected" ?> >No</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="edit" value="Finalize changes" />
        
    </form>
</body>
</html>