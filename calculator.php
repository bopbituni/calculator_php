<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    fieldset {
        width: 350px;
        height: 200px;
    }
</style>
<body>
<form action="calculate.php" method="post">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend><h2>Calculator</h2></legend>
        <table>
            <tr>
                <td>First operand :</td>
                <td><input type="text" name="first"></td>
            </tr>
            <tr>
                <td>Operator :</td>
                <td>
                    <select name="select">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second Operand :</td>
                <td><input type="text" name="second"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculator"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>