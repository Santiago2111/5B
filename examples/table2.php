<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table 2</title>
</head>
<body>
    <form action="table2.php" method="POST">
        <center>
            <label>Press a number: </label><br>
            <input type="number" name="num"><br><br>
            <button>Generar numeros</button>
        </center><br>
    <table border="1" align="center">
        <tr><th>Numbers list</th></tr>
        <?php
            $n = $_POST['num'] ?? 0;
            for($i=1; $i<=10; $i++){
                if($i%2==0){
                    echo "<tr><td align='center'><font color='blue'>".$i."</font></td></tr>";
                }else{
                    echo "<tr><td align='center'><font color='red'>".$i."</font></td></tr>";
                }
                echo "<tr><td align='center'>".$i."</td></tr>";
            }
        ?>
        </table>
    </form>    
</body>
</html>