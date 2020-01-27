<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<style>
img.bg {
    min-height: 100%;
    min-width: 1024px;
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
}

@media screen and (max-width: 1024px){
    img.bg {
    left: 50%;
    margin-left: -512px; }
}

</style>
    <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/register.css">
    <title>PIXEL'19</title>
    <style media="screen">
    .active{
      border:1px solid #42a5f5;
      border-radius: 50px;
      padding-left: 15px;
      padding-right:  15px;
    }

    </style>
</head>
<body background="periyar.jpg">
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="box-shadow:1px 2px 3px rgba(0,0,0,0.3)">
      </nav>

<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 offset-md-2 col-md-8 offset-lg-3 col-lg-6 form-box">
        <div class="" >
          <form action="register.php" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1" style="font-weight:bolder;">Full Name</label>
              <input type="text" name="f_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
            </div>
            <div class="form-group ui-widget">
              <label for="exampleFormControlInput1" style="font-weight:bolder;">Course</label>
              <input type="text" name="course" class="form-control" id="course" placeholder="Enter Your Course Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" style="font-weight:bolder;">Branch</label>
              <input type="text" class="form-control" name="branch" id="exampleFormControlInput1" placeholder="Enter Your Branch">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" style="font-weight:bolder;">College Name</label>
              <input type="text" class="form-control" name="col_name" id="exampleFormControlInput1" placeholder="Enter Your College Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1" style="font-weight:bolder;">Year</label>
              <select class="form-control" id="exampleFormControlSelect1" name="year">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" style="font-weight:bolder;" >Phone Number</label>
              <input type="number" class="form-control" name="p_no" id="exampleFormControlInput1" onkeypress="return isNumber(event)" maxlength="10" placeholder="Enter Your Phone Number">
            </div>
            <span  style="font-weight:bolder;">Events </span> <br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                PAPER Presentation
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                CODE Debug
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                WEB Design
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                TECHNICAL Quiz
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                ADzap
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="events">
              <label class="form-check-label" for="defaultCheck1">
                Tik Tok
              </label>
            </div>
            <br>
            <div class="form-group">
              <center><input type="button" data-toggle="modal" data-target="#exampleModal" value="REGISTER" class="my-btn"></center>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rules and Regulations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>Rule 1</li>
                      <li>Rule 2</li>
                      <li>Rule 3</li>
                      <li>Rule 4</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <input type="reset" value="Disagree" class="my-btn red">
                    <input type="submit" name="submit" value="Agree and Register" class="my-btn">
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Modal             -->

          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rules and Regulations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><img src="img/source.gif" alt="" width="300px"></center> <br>
        <center><span style="font-size:2rem">Registered Succesfully</span></center>

      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/register.js" charset="utf-8"></script>
</body>
</html>

<!--
Full Name = f_name
College Name = col_name
Events = events
Phone No = p_no
Course = course
Branch = branch
Year = year
-->

<?php
if(isset($_POST['submit']))
{
   display();
}
function display()
{
echo "<script>
  $('#registerModal').modal('show');
</script>";
}
?>
