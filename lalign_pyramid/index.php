<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <form method="post">
        <input type="text" name="value" value="" placeholder="Enter value"/> 
        <input type="submit" name="submit" value="Submit"/> 
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])) {
            function pyramid($n) {
                for ($i = 0; $i < $n; $i++) {
                    for($j = 0; $j <= $i; $j++ ) {
                        echo "* ";
                    }
                    echo "<br/>";
                }
            }
        $n = $_POST['value'];
        pyramid($n);
        }
    ?>
    </body>
</html>