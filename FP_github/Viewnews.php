<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
  <script type="text/javascript" src="JS/script.js"></script>
</head>
<body>
  <div id="header">
    <?php include("openpage.php");?>
  </div>

  <section class="can">
    <div class="can1">
      <h2>Blood donation:</h2>
      <p>The gift that costs nothing but means everything.</p>
    </div>
  </section> 
  <section>
    <div class="ne"> NEWS </div>
  </section>
  <div class="news-container">
    <?php
      $con=mysqli_connect("localhost","root","","brc");
      if(!$con)
        die("unable to connect");
      mysqli_select_db($con,"brc" );
      $b=mysqli_query($con,'select Title,Body,Author,Posted_date,Picture from addnews ORDER BY Posted_date DESC');

      echo "&nbsp;&nbsp;";
      echo "<br>";
      echo "<br>";

      echo '<ul class="news-list">';
      while($row = mysqli_fetch_array($b)) {
        echo '<li class="news-item">';
        echo '<div class="news-content">';
        echo '<h3>' . $row['Title'] . '</h3>';
        echo '<p>' . $row['Body'] . '</p>';
        echo '<p>' . $row['Author'] . '</p>';
        echo '<p>' . $row['Posted_date'] . '</p>';
        echo '</div>';
        echo '<img src="' . $row['Picture'] . '" width="200px" height="150px" align="left" title="image"/>';
        echo '</li>';
      }
      echo '</ul>';
    ?>
  </div>

  <div>
    <?php include('footer.php');?>
  </div>
</body>
</html>
