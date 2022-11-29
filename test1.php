<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
      include("styles.php");
     ?>

     <style media="screen">
       <?php
       include("style.css");
       ?>
     </style>

<title> </title>
</head>

<body>

    <form action="test2.php" method="post">
        <label for="condition">condition</label>
        <input type="radio" value="New" name="condition" id="condition">
        <label for="new">New</label>
        <input type="radio" value="Used" name="condition" id="condition">
        <label for="used">Used</label>

        <button type="submit">Submit</button>
    </form>

</body>
</html>