<!DOCTYPE html>
<head>
    <title>Prak Web No. 1</title>
</head>
<body>
    <h2>Faktorial</h2>
    <form action="" method="POST">
        <input type="number" name="angka" id="bil"> 
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $count=1;
            $batas = $_POST['angka'];
            for($i=0; $i< $batas; $i++){
                $count=$count*$i;
            }
            echo $count;
        }
    ?>
</body>
</html>