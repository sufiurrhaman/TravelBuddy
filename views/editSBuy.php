<?php
    require_once('header.php');
    require_once('../model/shopModel.php');

    $id = $_REQUEST['id'];
    $user = getSOrdersByID($id);
?>

<html>
    <body>
        <form method="post" action="../controller/editSBuyCheck.php?<?= $user['sid'] ?>">
            <fieldset>
                <legend>Edit</legend>
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="name" value="<?= $user['fullname'] ?>"></td>
                    </tr>
                    <tr>
                       <td>Contact Number:</td>
                        <td><input type="text" name="number" value="<?= $user['number'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea name="address" value="<?= $user['address'] ?>"></textarea> </td>
                    </tr>
                    <tr>
                        <td>Product:</td>
                        <td><input type="text" name="product" value="<?= $user['product'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                        <td><input type="number" name="quantity"  min="1" max="30" value="<?= $user['quantity'] ?>"><hr></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
