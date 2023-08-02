<?php
require_once('header.php');
require_once('../model/transModel.php');

    $id = $_REQUEST['id'];
    $user = getTBookingByID($id);
?>

<html>
    <body>
        <form method="post" action="../controller/editTBookingCheck.php?id=<?= $user['tid'] ?>">
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
                        <td>Transport:</td>
                        <td><input type="text" name="transport" value="<?= $user['transport'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><input type="Date" name="date" value="" required pattern="\d{2}-\d{2}-\d{4}" min="2021-11-01" max="2021-12-31" value="<?= $user['date'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Days Required:</td>
                        <td><input type="number" name="dr"  min="1" max="30" value="<?= $user['days'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea name="address" value="<?= $user['address'] ?>"></textarea> <hr></td>
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
