<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   <form action="election.php" method="post">
<div class="container">
  <h2>Election Result Prediction</h2>
  <p></p>                                         
<div class="form-group">
              <label for="exampleFormControlSelect1" style="font-weight:bolder;">Please select your party</label>
              <select class="form-control" id="exampleFormControlSelect1" name="year">
                <option>-Select-</option>  <option>ADMK+BJP+PMK</option>
  <option>AMMK</option>
                <option>DMK+Congress+Others</option>
              
                <option>Makkal Needhi Maiam</option>
                <option>Naam Tamilar Katchi</option>

                <option>Others</option>
                <option>NOTA</option>
              </select>
            </div>
                 <input type="submit" name="submit" value="Poll my vote" class="my-btn">
<?php
if(isset($_POST['submit']))
{
$year1=$_POST["year"];
  $res1=mysql_query("insert into vote values('$year1')");
echo "<script>  window.location.assign('success.php'); </script>";
}
    
?>
 


    </ul>
  </div>
</div>
</form>
</body>
</html>

