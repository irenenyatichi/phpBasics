<html><head>

    <title>form method</title>

</head>

<body>

<form method="post">

    <h2>Select Your car</h2>

    <table border="1" align="center">

        <tr>

            <td>Select Your car</td>

            <td>

                <select name="selType">

                    <option value="porsche 911">Porsche 911</option>

                    <option value="Volkswagen Beetle">Volkswagen Beetle</option>

                    <option value="Ford Taurus">Ford Taurus</option>

                    </select>

            </td>

        </tr>

        <tr>

            <td>Color:</td>

            <td><input type="text" name="txtColor"/>

            </td>

        </tr>

        <tr>

            <td><input type="submit"/>

            </td>

        </tr>

    </table">

</form>

</body>
<?php

error_reporting(1);

$type=$_POST['selType'];

$color=$_POST['txtColor'];

echo "<font color='blue'>Your $color $type is ready. safe driving! </font>";

?>
</html>

