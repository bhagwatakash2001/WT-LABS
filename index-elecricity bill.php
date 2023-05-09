<html>

<head>
    <title> Electricity Bill</title>
</head>

<body>
    <form method="post">
        <table border="1" align="center">
            <caption>
                <h3>
                    Electricity Bill
                </h3>
            </caption>
            <tr>
                <td>Enter Meter Number:</td>
                <td>
                    <input type="number" name="m" value="" placeholder="Enter meter number" />
                </td>
            </tr>
            <tr>
                <td>Enter unit value :</td>
                <td> <input type="number" name="u" value="" placeholder="Enter units value" /> </td>
            </tr>
            <tr>
                <td>
                    Enter Category:
                </td>
                <td>

                    <select name="c">
                        <option>Select </option>
                        <option>Less than 50 units </option>
                        <option>Less than 100 units</option>
                        <option>Above 250 </option>
                    </select>
                </td>


            </tr>
            <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Submit" /> </td>
            </tr>
        </table>
    </form>
    <table align="center" border="1" width="500px">
        <caption>
            <h5>
                Your Electricity Bill
            </h5>
        </caption>
       
    
    <?php
    
    if (isset($_POST['btn_submit'])) {
        $m = $_POST['m'];
        $u = $_POST['u'];
        $c = $_POST['c'];
        if ($c == "Less than 50 units") {
            if ($u > 0 && $u <= 50) {
                $e = 20;
                $price = (($u * .25) + $e);
            } else if ($u > 50 && $u <= 100) {
                $e = 20;
                $price = (($u * .55) + $e);
            } else if ($u > 100 && $u <= 150) {
                $e = 20;
                $price = (($u * 0.80) + $e);
            } else if ($u > 150 && $u <= 250) {
                $e = 20;
                $price = (($u * 1.50) + $e);
            } else if ($u > 250 && $u <= 400) {
                $e = 20;
                $price = (($u * 2) + $e);
            } else if ($u > 400) {
                $e = 20;
                $price = (($u * 2.5) + $e);
            }
            
            echo " <tr><td>Your Meter Number is:  . $m</td></tr>";
            echo "<tr><td>Units Are:  . $u</td></tr>";
            echo "<tr><td>Extra Charges Are: . $e</td></tr>";
            echo "<tr><td>Total $u Units of Charges: . $price</td></tr>";
        } else if ($c == "Less than 100 units") {
            if ($u > 0 && $u <= 50) {
                $e = 35;
                $price = (($u * 1.35) + $e);
            } else if ($u > 50 && $u <= 100) {
                $e = 35;
                $price = (($u * 2.15) + $e);
            } else if ($u > 100 && $u <= 150) {
                $e = 35;
                $price = (($u * 3) + $e);
            } else if ($u > 150 && $u <= 250) {
                $e = 35;
                $price = (($u * 3.5) + $e);
            } else if ($u > 250 && $u <= 400) {
                $e = 35;
                $price = (($u * 4) + $e);
            } else if ($u > 400) {
                $e = 35;
                $price = (($u * 6) + $e);
            }
            echo " <tr><td>Your Meter Number is:  . $m</td></tr>";
            echo "<tr><td>Units Are:  . $u</td></tr>";
            echo "<tr><td>Extra Charges Are: . $e</td></tr>";
            echo "<tr><td>Total $u Units of Charges: . $price</td></tr>";
        } else if ($c == "Above 250") {
            if ($u > 0 && $u <= 50) {
                $e = 65;
                $price = (($u * 3) + $e);
            } else if ($u > 50 && $u <= 100) {
                $e = 65;
                $price = (($u * 4.5) + $e);
            } else if ($u > 100 && $u <= 150) {
                $e = 65;
                $price = (($u * 5.5) + $e);
            } else if ($u > 150 && $u <= 250) {
                $e = 65;
                $price = (($u * 6.8) + $e);
            } else if ($u > 250 && $u <= 400) {
                $e = 65;
                $price = (($u * 7.2) + $e);
            } else if ($u > 400) {
                $e = 65;
                $price = (($u * 9) + $e);
            }
            
            echo "<tr><td>Your Meter Number is:  . $m</td></tr>";
            echo "<tr><td>Units Are:  . $u</td></tr>";
            echo "<tr><td>Extra Charges Are: . $e</td></tr>";
            echo "<tr><td>Total $u Units of Charges: . $price</td></tr>";
        } 
    }
    ?>
    </table>
</body>

</html>