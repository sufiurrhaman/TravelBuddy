<?php
    require_once('header.php');
    require_once('../model/packageModel.php');

    $id = $_REQUEST['id'];
    $user = getPBookingByID($id);
?>


<html>
    <body>
        <form method="post" action="../controller/editPBookingCheck.php?id=<?= $user['pid'] ?>">
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
                        <td>Location:</td>
                        <td><input type="text" name="location" value="<?= $user['location'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><input type="Date" name="date" value="" required pattern="\d{2}-\d{2}-\d{4}" min="2021-11-01" max="2021-12-31" value="<?= $user['date'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Adult(s):</td>
                        <td><input type="number" name="adult"  min="1" max="30" value="<?= $user['adult'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Child(ren):</td>
                        <td><input type="number" name="child"  min="0" max="30" value="<?= $user['child'] ?>"></td>
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
