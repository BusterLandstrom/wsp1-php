<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gargantuan Kolossal Baegeni</title>
    <script>
    function myFunction() {
  document.getElementById("myText").innerHTML = document.getElementById("names").value;
}
    </script>
</head>
<body>
    <form method="post">     
        <input type="text" name="names"/>
        <input type="submit"  name="add" value="Write out name"/>
    <form>
    <?php
        if (isset($_POST['add'])){
            $bname = $_POST['names'];
            echo "Result:<input type='text' value='$bname'/>";
        }
        $tal1 = 123; // int
        $tal2 = "345"; //string
        $tal4 = true; //boolean
        $tal5 = 2131.123; //double
        $tal6 = null;

        echo $tal1 + $tal2 + $tal3 + $tal4 + $tal5 + $tal6;
    ?>
</body>
</html>