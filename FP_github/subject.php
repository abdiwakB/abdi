<html>
<head>
    <style type="text/css">

        form {
            background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
            background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
            margin: auto;
            position: relative;
            width: 500px;
            height: 450px;
            font-family:;
            font-size: 14px;
            font-style: italic;
            line-height: 24px;
            font-weight:;
            color: #09C;
            text-decoration: none;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #99779;
            border: inset 0px solid #333;
            -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
    <script type="text/javascript">

        function formValidator() {
            // Make quick references to our fields
            var tid = document.getElementById('scode');
            var fname = document.getElementById('sname');
            var mname = document.getElementById('gsection');
            if (isAlphanumeric(scode, "please enter correct format for subjet code")) {
                if (isAlphabet(sname, "Please enter a correct format for subject Name !")) {
                    if (isAlphabet(gsection, " Please enter a correct format for grade section!")) {
                        {
                            if (lengthRestriction(username, 6, 20)) {
                                return true;

                            }
                        }
                    }
                }
            }
        }
        return false;
        }
        function notEmpty(elem, helperMsg) {
            if (elem.value.length == 0) {
                alert(helperMsg);
                elem.focus(); // set the focus to this input
                return false;
            }
            return true;
        }

        function isNumeric(elem, helperMsg) {
            var numericExpression = /^[0-9+[\.\]]+$/;
            if (elem.value.match(numericExpression)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }

        function isAlphanumeric(elem, helperMsg) {
            var alphaExp = /^[0-9 a-z + \,\[\?\+ \.\+ \;\+ \/\+ \-\] +A-Z]+$/;
            if (elem.value.match(alphaExp)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }
        function isAlphabet(elem, helperMsg) {
            var alphaExp = /^[a-zA-Z]+$/;
            if (elem.value.match(alphaExp)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }


        function lengthRestriction(elem, min, max) {
            var uInput = elem.value;
            if (uInput.length >= min && uInput.length <= max) {
                return true;
            } else {
                alert("Please enter between " + min + " and " + max + " characters");
                elem.focus();
                return false;
            }
        }


    </script>
</head>
<body>
<?php
$con = mysql_connect("localhost", "root", "root");
if (!$con) {
    die("error:" . mysql_error());
}
$db = mysql_select_db("brc", $con);
if (!$db) {
    die("error:" . mysql_error());
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $var1 = $_POST['scode'];
    $var2 = $_POST['sname'];
    $query = "INSERT INTO subject(scode,sname) values('$var1','$var2')";
   
$r = mysql_query($query);
    
if ($r)
        echo "<h1>Successfully regster</h1>";
    else {


        if (mysql_errno() == 1062)
            echo "duplicate subject code. please change subject code.";
        else
            die(mysql_error());
    }


    mysql_close($con);
}
?>
<form action="<?php $_self?>" onsubmit='return formValidator()' id="form1" name="form1" method='post'
      <style="box-shadow:rgba(0,0,0,0.3) 0px 0px 10px; border-radius:20px;color:#jjlldd; text-shadow:0px 0px 10px #99ccff;">
    <br/>

    <h2 align='center'><strong><b>Course Form:</b></strong></h2>

    <p align="center">
        Subject name:&nbsp;
        <input type="text" name="sname" name="sname" required><br><br>
        Subject code: &nbsp;
        <input type="text" name="scode" name="scode" required><br><br>
       
    <pre>         <input type='submit' value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='reset'
                                                                                                        value='Reset'></pre>

</form>
