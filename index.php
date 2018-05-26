<?php
if (isset($_POST['submit'])) {  
$con = mysqli_connect("localhost", "myUserName", "myPassword", "myTableName") or die();



 $date = $_POST['date'];
  

$query2000 = mysqli_query($con, "SELECT * FROM `2000` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2000)) {
     $maxTemp2000 = $row["maxTemp"];
      $minTemp2000 = $row["minTemp"];
       $rain2000 = $row["Rain"];
 // echo 
   "2000<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2000 = <?php echo $maxTemp2000; ?>;
      var minTemp2000 = <?php echo $minTemp2000; ?>;
        var rain2000 = <?php echo $rain2000; ?>;
    console.log(maxTemp2000, minTemp2000, rain2000);
</script>
<?php


$query2001 = mysqli_query($con, "SELECT * FROM `2001` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2001)) {
     $maxTemp2001 = $row["maxTemp"];
      $minTemp2001 = $row["minTemp"];
       $rain2001 = $row["Rain"];
  //echo 
   "2001<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2001 = <?php echo $maxTemp2001; ?>;
      var minTemp2001 = <?php echo $minTemp2001; ?>;
        var rain2001 = <?php echo $rain2001; ?>;
    console.log(maxTemp2001, minTemp2001, rain2001);
</script>
<?php

$query2002 = mysqli_query($con, "SELECT * FROM `2002` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2002)) {
     $maxTemp2002 = $row["maxTemp"];
      $minTemp2002 = $row["minTemp"];
       $rain2002 = $row["Rain"];
 // echo 
   "2002<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2002 = <?php echo $maxTemp2002; ?>;
      var minTemp2002 = <?php echo $minTemp2002; ?>;
        var rain2002 = <?php echo $rain2002; ?>;
    console.log(maxTemp2002, minTemp2002, rain2002);
</script>
<?php

$query2003 = mysqli_query($con, "SELECT * FROM `2003` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2003)) {
     $maxTemp2003 = $row["maxTemp"];
      $minTemp2003 = $row["minTemp"];
       $rain2003 = $row["Rain"];
 // echo 
   "2003<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2003 = <?php echo $maxTemp2003; ?>;
      var minTemp2003 = <?php echo $minTemp2003; ?>;
        var rain2003 = <?php echo $rain2003; ?>;
    console.log(maxTemp2003, minTemp2003, rain2003);
</script>
<?php


$query2004 = mysqli_query($con, "SELECT * FROM `2004` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2004)) {
     $maxTemp2004 = $row["maxTemp"];
      $minTemp2004 = $row["minTemp"];
       $rain2004 = $row["Rain"];
 // echo 
   "2004<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2004 = <?php echo $maxTemp2004; ?>;
      var minTemp2004 = <?php echo $minTemp2004; ?>;
        var rain2004 = <?php echo $rain2004; ?>;
    console.log(maxTemp2004, minTemp2004, rain2004);
</script>
<?php


$query2005 = mysqli_query($con, "SELECT * FROM `2005` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2005)) {
     $maxTemp2005 = $row["maxTemp"];
      $minTemp2005 = $row["minTemp"];
       $rain2005 = $row["Rain"];
 // echo 
   "2005<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2005 = <?php echo $maxTemp2005; ?>;
      var minTemp2005 = <?php echo $minTemp2005; ?>;
        var rain2005 = <?php echo $rain2005; ?>;
    console.log(maxTemp2005, minTemp2005, rain2005);
</script>
<?php

$query2006 = mysqli_query($con, "SELECT * FROM `2006` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2006)) {
     $maxTemp2006 = $row["maxTemp"];
      $minTemp2006 = $row["minTemp"];
       $rain2006 = $row["Rain"];
 // echo 
   "2006<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2006 = <?php echo $maxTemp2006; ?>;
      var minTemp2006 = <?php echo $minTemp2006; ?>;
        var rain2006 = <?php echo $rain2006; ?>;
    console.log(maxTemp2006, minTemp2006, rain2006);
</script>
<?php

$query2007 = mysqli_query($con, "SELECT * FROM `2007` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2007)) {
     $maxTemp2007 = $row["maxTemp"];
      $minTemp2007 = $row["minTemp"];
       $rain2007 = $row["Rain"];
 // echo 
   "2007<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2007 = <?php echo $maxTemp2007; ?>;
      var minTemp2007 = <?php echo $minTemp2007; ?>;
        var rain2007 = <?php echo $rain2007; ?>;
    console.log(maxTemp2007, minTemp2007, rain2007);
</script>
<?php

$query2008 = mysqli_query($con, "SELECT * FROM `2008` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2008)) {
     $maxTemp2008 = $row["maxTemp"];
      $minTemp2008 = $row["minTemp"];
       $rain2008 = $row["Rain"];
  //echo 
   "2008<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2008 = <?php echo $maxTemp2008; ?>;
      var minTemp2008 = <?php echo $minTemp2008; ?>;
        var rain2008 = <?php echo $rain2008; ?>;
    console.log(maxTemp2008, minTemp2008, rain2008);
</script>
<?php

$query2009 = mysqli_query($con, "SELECT * FROM `2009` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2009)) {
     $maxTemp2009 = $row["maxTemp"];
      $minTemp2009 = $row["minTemp"];
       $rain2009 = $row["Rain"];
  //echo 
   "2009<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2009 = <?php echo $maxTemp2009; ?>;
      var minTemp2009 = <?php echo $minTemp2009; ?>;
        var rain2009 = <?php echo $rain2009; ?>;
    console.log(maxTemp2009, minTemp2009, rain2009);
</script>
<?php

$query2010 = mysqli_query($con, "SELECT * FROM `2010` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2010)) {
     $maxTemp2010 = $row["maxTemp"];
      $minTemp2010 = $row["minTemp"];
       $rain2010 = $row["Rain"];
 // echo 
   "2010<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2010 = <?php echo $maxTemp2010; ?>;
      var minTemp2010 = <?php echo $minTemp2010; ?>;
        var rain2010 = <?php echo $rain2010; ?>;
    console.log(maxTemp2010, minTemp2010, rain2010);
</script>
<?php

$query2011 = mysqli_query($con, "SELECT * FROM `2011` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2011)) {
     $maxTemp2011 = $row["maxTemp"];
      $minTemp2011 = $row["minTemp"];
       $rain2011 = $row["Rain"];
  //echo 
   "2011<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2011 = <?php echo $maxTemp2011; ?>;
      var minTemp2011 = <?php echo $minTemp2011; ?>;
        var rain2011 = <?php echo $rain2011; ?>;
    console.log(maxTemp2011, minTemp2011, rain2011);
</script>
<?php



$query2012 = mysqli_query($con, "SELECT * FROM `2012` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 
 

while ($row = mysqli_fetch_array($query2012)) {
     $maxTemp2012 = $row["maxTemp"];
      $minTemp2012 = $row["minTemp"];
       $rain2012 = $row["Rain"];
  //echo 
   "2012<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}
  ?>

<script language="javascript" type="text/javascript">

    var maxTemp2012 = <?php echo $maxTemp2012; ?>;
      var minTemp2012 = <?php echo $minTemp2012; ?>;
        var rain2012 = <?php echo $rain2012; ?>;
    console.log(maxTemp2012, minTemp2012, rain2012);
</script>
<?php




$query2013 = mysqli_query($con, "SELECT * FROM `2013` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2013)) {
       $maxTemp2013 = $row["maxTemp"];
      $minTemp2013 = $row["minTemp"];
       $rain2013 = $row["Rain"];
  //echo 
   "2013<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
   </tr>\n";
   echo nl2br ("\n");//
}

 ?>

<script language="javascript" type="text/javascript">

    var maxTemp2013 = <?php echo $maxTemp2013; ?>;
      var minTemp2013 = <?php echo $minTemp2013; ?>;
        var rain2013 = <?php echo $rain2013; ?>;
    console.log(maxTemp2013, minTemp2013, rain2013);
</script>
<?php

$query2014 = mysqli_query($con, "SELECT * FROM `2014` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2014)) {
       $maxTemp2014 = $row["maxTemp"];
      $minTemp2014 = $row["minTemp"];
       $rain2014 = $row["Rain"];
  //echo 
   "2014<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}

 ?>

<script language="javascript" type="text/javascript">

    var maxTemp2014 = <?php echo $maxTemp2014; ?>;
      var minTemp2014 = <?php echo $minTemp2014; ?>;
        var rain2014 = <?php echo $rain2014; ?>;
    console.log(maxTemp2014, minTemp2014, rain2014);
</script>
<?php


$query2015 = mysqli_query($con, "SELECT * FROM `2015` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2015)) {
       $maxTemp2015 = $row["maxTemp"];
      $minTemp2015 = $row["minTemp"];
       $rain2015 = $row["Rain"];
  //echo 
   "2015<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}

 ?>

<script language="javascript" type="text/javascript">

    var maxTemp2015 = <?php echo $maxTemp2015; ?>;
      var minTemp2015 = <?php echo $minTemp2015; ?>;
        var rain2015 = <?php echo $rain2015; ?>;
    console.log(maxTemp2015, minTemp2015, rain2015);
</script>
<?php



$query2016 = mysqli_query($con, "SELECT * FROM `2016` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2016)) {
       $maxTemp2016 = $row["maxTemp"];
      $minTemp2016 = $row["minTemp"];
       $rain2016 = $row["Rain"];
  //echo 
   "2016<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//

}


 ?>

<script language="javascript" type="text/javascript">

    var maxTemp2016 = <?php echo $maxTemp2016; ?>;
      var minTemp2016 = <?php echo $minTemp2016; ?>;
        var rain2016 = <?php echo $rain2016; ?>;
    console.log(maxTemp2016, minTemp2016, rain2016);
</script>
<?php


$query2017 = mysqli_query($con, "SELECT * FROM `2017` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2017)) {
       $maxTemp2017 = $row["maxTemp"];
      $minTemp2017 = $row["minTemp"];
       $rain2017 = $row["Rain"];
  //echo 
   "2017<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");
   echo nl2br ("\n");
    echo nl2br ("\n");
     echo nl2br ("\n");//

}

 ?>

<script language="javascript" type="text/javascript">

    var maxTemp2017 = <?php echo $maxTemp2017; ?>;
      var minTemp2017 = <?php echo $minTemp2017; ?>;
        var rain2017 = <?php echo $rain2017; ?>;
    console.log(maxTemp2017, minTemp2017, rain2017);
</script>
<?php




$query2018 = mysqli_query($con, "SELECT * FROM `2018` where weatherDate= '$date'")
   or die (mysqli_error($con));

while ($row = mysqli_fetch_array($query2018)) {
 // echo 
   "2018<tr>
    <td>{$row['weatherDate']}</td>
    <td>{$row['maxTemp']}</td>
    <td>{$row['minTemp']}</td>
      <td>{$row['Rain']}</td>
  </tr>";
  
  echo nl2br ("\n");//
 

}
}


?>



<!DOCTYPE html>



<head>
    <title> DaytonaWeatherPredictor </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <style>
        h1{
           position:absolute;
           top:180px;
           left:30%;
            color: white;
        }
        
        h2{
        position:absolute;
           top:210px;
           left:30%;
            color: white;
            font-size:32px;
        }
        
         h3{
           position:absolute;
           top:240px;
           left:30%;
            color: white;
            font-size:32px;
        }
        
        html{height:100%;}

  html { box-sizing: border-box; }
html *,
html *:before,
html *:after { box-sizing: inherit; }

body {
  max-width: 42em;
  padding: 2em;
  margin: 0 auto;
  color: #161616;
  font-family: 'Roboto', sans-serif;
  text-align: center;
  background-color: currentColor;
}

.icon {
  position: relative;
  display: inline-block;
  width: 12em;
  height: 10em;
  font-size: 1em; /* control icon size here */
}

.cloud {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  width: 3.6875em;
  height: 3.6875em;
  margin: -1.84375em;
  background: currentColor;
  border-radius: 50%;
  box-shadow:
    -2.1875em 0.6875em 0 -0.6875em,
    2.0625em 0.9375em 0 -0.9375em,
    0 0 0 0.375em #fff,
    -2.1875em 0.6875em 0 -0.3125em #fff,
    2.0625em 0.9375em 0 -0.5625em #fff;
}
.cloud:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: -0.5em;
  display: block;
  width: 4.5625em;
  height: 1em;
  background: currentColor;
  box-shadow: 0 0.4375em 0 -0.0625em #fff;
}
.cloud:nth-child(2) {
  z-index: 0;
  background: #fff;
  box-shadow:
    -2.1875em 0.6875em 0 -0.6875em #fff,
    2.0625em 0.9375em 0 -0.9375em #fff,
    0 0 0 0.375em #fff,
    -2.1875em 0.6875em 0 -0.3125em #fff,
    2.0625em 0.9375em 0 -0.5625em #fff;
  opacity: 0.3;
  transform: scale(0.5) translate(6em, -3em);
  animation: cloud 4s linear infinite;
}
.cloud:nth-child(2):after { background: #fff; }

.sun {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 2.5em;
  height: 2.5em;
  margin: -1.25em;
  background: currentColor;
  border-radius: 50%;
  box-shadow: 0 0 0 0.375em #fff;
  animation: spin 12s infinite linear;
}
.rays {
  position: absolute;
  top: -2em;
  left: 50%;
  display: block;
  width: 0.375em;
  height: 1.125em;
  margin-left: -0.1875em;
  background: #fff;
  border-radius: 0.25em;
  box-shadow: 0 5.375em #fff;
}
.rays:before,
.rays:after {
  content: '';
  position: absolute;
  top: 0em;
  left: 0em;
  display: block;
  width: 0.375em;
  height: 1.125em;
  transform: rotate(60deg);
  transform-origin: 50% 3.25em;
  background: #fff;
  border-radius: 0.25em;
  box-shadow: 0 5.375em #fff;
}
.rays:before {
  transform: rotate(120deg);
}
.cloud + .sun {
  margin: -2em 1em;
}

.rain,
.lightning,
.snow {
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  width: 3.75em;
  height: 3.75em;
  margin: 0.375em 0 0 -2em;
  background: currentColor;
}

.rain:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  width: 1.125em;
  height: 1.125em;
  margin: -1em 0 0 -0.25em;
  background: #0cf;
  border-radius: 100% 0 60% 50% / 60% 0 100% 50%;
  box-shadow:
    0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
    -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
    -1.375em -0.125em 0 rgba(255,255,255,0.2);
  transform: rotate(-28deg);
  animation: rain 3s linear infinite;
}

.bolt {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.25em 0 0 -0.125em;
  color: #fff;
  opacity: 0.3;
  animation: lightning 2s linear infinite;
}
.bolt:nth-child(2) {
  width: 0.5em;
  height: 0.25em;
  margin: -1.75em 0 0 -1.875em;
  transform: translate(2.5em, 2.25em);
  opacity: 0.2;
  animation: lightning 1.5s linear infinite;
}
.bolt:before,
.bolt:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  margin: -1.625em 0 0 -1.0125em;
  border-top: 1.25em solid transparent;
  border-right: 0.75em solid;
  border-bottom: 0.75em solid;
  border-left: 0.5em solid transparent;
  transform: skewX(-10deg);
}
.bolt:after {
  margin: -0.25em 0 0 -0.25em;
  border-top: 0.75em solid;
  border-right: 0.5em solid transparent;
  border-bottom: 1.25em solid transparent;
  border-left: 0.75em solid;
  transform: skewX(-10deg);
}
.bolt:nth-child(2):before {
  margin: -0.75em 0 0 -0.5em;
  border-top: 0.625em solid transparent;
  border-right: 0.375em solid;
  border-bottom: 0.375em solid;
  border-left: 0.25em solid transparent;
}
.bolt:nth-child(2):after {
  margin: -0.125em 0 0 -0.125em;
  border-top: 0.375em solid;
  border-right: 0.25em solid transparent;
  border-bottom: 0.625em solid transparent;
  border-left: 0.375em solid;
}

.flake:before,
.flake:after {
  content: '\2744';
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -1.025em 0 0 -1.0125em;
  color: #fff;
  list-height: 1em;
  opacity: 0.2;
  animation: spin 8s linear infinite reverse;
}
.flake:after {
  margin: 0.125em 0 0 -1em;
  font-size: 1.5em;
  opacity: 0.4;
  animation: spin 14s linear infinite;
}
.flake:nth-child(2):before {
  margin: -0.5em 0 0 0.25em;
  font-size: 1.25em;
  opacity: 0.2;
  animation: spin 10s linear infinite;
}
.flake:nth-child(2):after {
  margin: 0.375em 0 0 0.125em;
  font-size: 2em;
  opacity: 0.4;
  animation: spin 16s linear infinite reverse;
}


/* Animations */ 

@keyframes spin {
  100% { transform: rotate(360deg); }
}

@keyframes cloud {
  0% { opacity: 0; }
  50% { opacity: 0.3; }
  100% {
    opacity: 0;
    transform: scale(0.5) translate(-200%, -3em);
  }
}

@keyframes rain {
  0% {
    background: #0cf;
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 #0cf;
  }
  25% {
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em #0cf,
      -1.375em -0.125em 0 rgba(255,255,255,0.2);
  }
  50% {
    background: rgba(255,255,255,0.3);
    box-shadow:
      0.625em 0.875em 0 -0.125em #0cf,
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 rgba(255,255,255,0.2);
  }
  100% {
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 #0cf;
  }
}

@keyframes lightning {
  45% {
    color: #fff;
    background: #fff;
    opacity: 0.2;
  }
  50% {
    color: #0cf;
    background: #0cf;
    opacity: 1;
  }
  55% {
    color: #fff;
    background: #fff;
    opacity: 0.2;
  }
}
    
    </style>
</head>

<body>
 <section id="bkgWeather" style="position:absolute; top: 50px; left: 40%;"> 
<div id="icon" class="">
  <div id="extra1" class=""></div>
  <div id="extra2" class="">
    <div id="extra3" class=""></div>
  </div>
  <div id="extra4" class=""></div>
</div>
</div>
</section>




    <h4 id="ttl" style="color:white;">Daytona weather</h1>
    <h4 id="subttl" style="color:white;">Enter the mm-dd to find the future weater</h2>
<form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input id="date" type="text" name="date"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>



<script>
  
  var maxTTL = maxTemp2000 + maxTemp2001 + maxTemp2002 + maxTemp2003 + maxTemp2004 + maxTemp2005 + maxTemp2006 + maxTemp2007 + maxTemp2008 + maxTemp2009 + maxTemp2010 + maxTemp2011 + maxTemp2012 + maxTemp2013 + maxTemp2014 + maxTemp2015 + maxTemp2016 + maxTemp2017;
  
var predictionMax = Math.round(maxTTL/18);

 var minTTL = minTemp2000 + minTemp2001 + minTemp2002 + minTemp2003 + minTemp2004 + minTemp2005 + minTemp2006 + minTemp2007 + minTemp2009 + minTemp2010 + minTemp2011 + minTemp2012 + minTemp2013 + minTemp2014 + minTemp2015 + minTemp2016 + minTemp2017;
  
var predictionMin = Math.round(minTTL/18);

 var rainTTL = rain2000 + rain2001 + rain2002 + rain2003 + rain2004 + rain2005 + rain2006 + rain2007 + rain2008 + rain2009 + rain2010 + rain2011 + rain2012 + rain2013 + rain2014 + rain2015 + rain2016 + rain2017;
  
var rainDiv = rainTTL/18;

var predictionRain = Math.round(rainDiv * 100) /100;

  
  console.log(predictionMax, "this is maxpredict");
  console.log(predictionMin, "this is minpredict");
    console.log(predictionRain, "this is rainpredict");
   
   
     document.write("<h1>Max Temp Predicted: " + predictionMax + "</h1>" + "<br>"+ "<h2>Min Temp Predicted: " + predictionMin + "</h2>" + "<br>" + "<h3> Rain Predicted: " + predictionRain + "</h3>");

         
     document.getElementById("myForm").style.display = "none";
       document.getElementById("ttl").style.display = "none";
         document.getElementById("subttl").style.display = "none";
      
  
</script>


<script>
document.getElementById("myForm").onsubmit = function() {myFunction()};

function myFunction() {
    var date = document.getElementById("date").value;
   var month = date.substring(0,2);
   var day = date.substring(3,5);
   var mid = date.substring(2,3);
   
   if (month > 12){
       alert("you must enter a date with the format mm-dd");
   }
   
   else if (day > 31){
       alert ("you must enter a date with the format mm-dd");
   }
   
   else if(mid != "-"){
       alert("you must enter a date with the format mm-dd");
   }
   

}

</script>

<script>
if (predictionRain > 0.01 && predictionRain < 0.07){
  
    document.getElementById("icon").className = "icon sun-shower";
    document.getElementById("extra1").className = "cloud";
       document.getElementById("extra2").className = "sun";
          document.getElementById("extra3").className = "rays";
           document.getElementById("extra4").className = "rain";
}

if (predictionRain > 0.07 && predictionRain < 1){
       document.getElementById("icon").className = "icon rainy";
    document.getElementById("extra1").className = "cloud";
       document.getElementById("extra2").className = "rain";
        //   document.getElementById("extra3").className = "rays";
        //   document.getElementById("extra4").className = "rain"; 
}

if (predictionRain > 1){
    document.getElementById("icon").className = "icon thunder-storm";
    document.getElementById("extra1").className = "cloud";
       document.getElementById("extra2").className = "lightning";
          document.getElementById("extra3").className = "bolt";
           document.getElementById("extra4").className = "bolt";
}

if (predictionMax > 85 && predictionRain <= 0){
    document.getElementById("icon").className = "icon sunny";
       document.getElementById("extra2").className = "sun";
          document.getElementById("extra3").className = "rays";
}

if (predictionMax < 85 && predictionRain <= 0){
   document.getElementById("icon").className = "icon cloudy";
    document.getElementById("extra1").className = "cloud";
       document.getElementById("extra2").className = "cloud";
      
}
</script>




</body>

</html>