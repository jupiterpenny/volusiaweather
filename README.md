# volusiaweather
This is a weather predictor for Daytona Beach. The calculation is based off of the past 20 years weather data for the area



PURPOSE:

1. make an analysis from real datasets
2. query from an extrenal database
3. make a useful application


Step 1: gather the data

https://www.ncdc.noaa.gov/cdo-web/

collected data from 2000-2018 on daily weather summaries (pdfs includedin folder)

Step 2: set up database

used MySQL Database and inputted with phpMyAdmin (through cpanel not mamp)

Structure:

Database includes a table for each year.  Fields - id(primary key), date, maxtemp, mintemp, and rain

insert data sql command:

INSERT INTO `tableName` (`id`, `weatherDate`, `maxTemp`, `minTemp`, `Rain`) VALUES (NULL, '01-01', '56', '57', '0.00');


delet data sql command:

DELETE FROM `tableName` WHERE feildName="inputtedData";


Step 3: Taking USER INPUT:

   <h4 id="ttl" style="color:white;">Daytona weather</h1>
    <h4 id="subttl" style="color:white;">Enter the mm-dd to find the future weater</h2>
    //introduction and directions
    
<form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input id="date" type="text" name="date"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>

Step 4: validating input:

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

//date must be submitted by user in format mm-dd ///month cannot be greater than 12 date cannot be greater than 31..
perhaps in the future more validation for months that end in 28 and 30

Step 5: on submit (php processing)

if (isset($_POST['submit'])) {  
$con = mysqli_connect("localhost", "myUserName", "myPassword", "myDB name") or die();

//connecting to database

 $date = $_POST['date'];
 
 //getting the data from HTML input box

$query2000 = mysqli_query($con, "SELECT * FROM `2000` where weatherDate= '$date'")
   or die (mysqli_error($con));
 
 //get the row that has that date (will give all the feilds related)
 

while ($row = mysqli_fetch_array($query2000)) {
     $maxTemp2000 = $row["maxTemp"];
      $minTemp2000 = $row["minTemp"];
       $rain2000 = $row["Rain"];
       
       //saving each feild for sending to js
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
//echo was for testing the data to get a reasonable algorithm

<script language="javascript" type="text/javascript">

    var maxTemp2000 = <?php echo $maxTemp2000; ?>;
      var minTemp2000 = <?php echo $minTemp2000; ?>;
        var rain2000 = <?php echo $rain2000; ?>;
    console.log(maxTemp2000, minTemp2000, rain2000);
</script>

//saved data to js for algorthim (repeated query for all years pulling from

Step 5: the calculation:


<script>
  
  var maxTTL = maxTemp2000 + maxTemp2001 + maxTemp2002 + maxTemp2003 + maxTemp2004 + maxTemp2005 + maxTemp2006 + maxTemp2007 + maxTemp2008 + maxTemp2009 + maxTemp2010 + maxTemp2011 + maxTemp2012 + maxTemp2013 + maxTemp2014 + maxTemp2015 + maxTemp2016 + maxTemp2017;
  
var predictionMax = Math.round(maxTTL/18);

 var minTTL = minTemp2000 + minTemp2001 + minTemp2002 + minTemp2003 + minTemp2004 + minTemp2005 + minTemp2006 + minTemp2007 + minTemp2009 + minTemp2010 + minTemp2011 + minTemp2012 + minTemp2013 + minTemp2014 + minTemp2015 + minTemp2016 + minTemp2017;
  
var predictionMin = Math.round(minTTL/18);

 var rainTTL = rain2000 + rain2001 + rain2002 + rain2003 + rain2004 + rain2005 + rain2006 + rain2007 + rain2008 + rain2009 + rain2010 + rain2011 + rain2012 + rain2013 + rain2014 + rain2015 + rain2016 + rain2017;
  
var rainDiv = rainTTL/18;

var predictionRain = Math.round(rainDiv * 100) /100;

//basic mean of each data field
  
  console.log(predictionMax, "this is maxpredict");
  console.log(predictionMin, "this is minpredict");
    console.log(predictionRain, "this is rainpredict");
   //testing
   
     document.write("<h1>Max Temp Predicted: " + predictionMax + "</h1>" + "<br>"+ "<h2>Min Temp Predicted: " + predictionMin + "</h2>" + "<br>" + "<h3> Rain Predicted: " + predictionRain + "</h3>");
//printing to screen
         
     document.getElementById("myForm").style.display = "none";
       document.getElementById("ttl").style.display = "none";
         document.getElementById("subttl").style.display = "none";
      //hidding intro and directions

FINAL: weathericons

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


https://www.front-end-developer.com/css-weather-icons/

styling for icons and html markup tags:

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
    
  CONCLUSION:   
    This was just a basic project that fullfilled all of my objectives.  Possible uses: widget for daytona beach travel agent, party planner, or resort manager



