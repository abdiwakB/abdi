<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:home.php");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
    var image1 = new Image();
    image1.src = "logo1.jpg";
    var image2 = new Image();
    image2.src = "logo6.jpg";
    var image3 = new Image();
    image3.src = "logo7.jpg";
</script>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<style>

  table{
    border-collapse: collapse;
    width: 50%;
    margin-left :50px;
    margin-right:0px;
  }
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 6px;
}
</style>
</head>
<body>
<div id="all">
    <script>
        var step = 1;
        function slideit() {
            if (!document.images) return;
            document.images.slide.src = eval("image" + step + ".src");
            if (step < 6) step++;
            else step = 1;
            setTimeout("slideit()", 3000);
        }
        slideit();
    </script>
    <div id="header"><?php include("amanagerpage.php");?></div>
    <div id="main_container">
        <div id="left_content">
            <?php
            $con = mysqli_connect("localhost", "root", "", "brc");
            if (!$con) {
                die("unable to connect: " . mysqli_error());
            }

            mysqli_select_db($con, "brc");
            $sql = "SELECT * FROM drreg ORDER BY donor_Id DESC";
            $result = mysqli_query($con, $sql) or die("query error" . mysqli_error());
            if (!$result) die("Unable to query:");

            echo "<table>";
            echo "<tr><th>donor_Id</th><th>fname</th><th>mname</th><th>lname</th><th>sex</th><th>age</th><th>date</th><th>zone</th><th>city</th><th>mobile</th><th>email</th><th>woreda</th><th>kebele</th><th>bloodgroup</th></tr>";
            while ($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                for ($i = 0; $i < count($row); $i++) {
                    echo "<td>$row[$i]</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<a href='link.html'></a>";
            ?>
        </div>
    </div>
</div>
</body>
</html>
