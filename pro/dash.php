
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard Group# เหยี่ยวฟ้า</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    .numbers span {
      display: inline-block;
      width: 3em;
      padding: 0.9em 0;
      margin: 0.5em;
      text-align: center;
      background: yellow;
      border-radius: 50%;
    }
  </style>
  <body>

<!-- modal small -->
<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    				<div class="modal-dialog modal-sm" role="document">
    					<div class="modal-content">
    						<div class="modal-header">
    							<h5 class="modal-title" id="smallmodalLabel">ผลถั่วออก</h5>
    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
    							</button>
    						</div>
    						<div class="modal-body">
    							<p>
                    <script>$('#submit').click(function(){
                  	//validate form
                  	 $.get('postResults.php',$('#sample-form').serialize(),function(response){
                  	  $('#result').html(response);
                  	 });
                  	});
                  	</script>
                    <div class="card-body card-block">
                        <form name="sample-form" id="sample-form" action="postResults.php" method="post" class="form-horizontal">

                            <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="select" class=" form-control-label">รอบที่ :</label>
                              </div>
                              <div class="col-12 col-md-9">
                          <select name="Round" id="Round"class="form-control">
                              <option value="">----- เลือกรอบ -----</option>
                              <option value="1">รอบที่ 1</option>
                              <option value="2">รอบที่ 2</option>
                              <option value="3">รอบที่ 3</option>
                              <option value="4">รอบที่ 4</option>
                              <option value="5">รอบที่ 5</option>
                              <option value="6">รอบที่ 6</option>
                              <option value="7">รอบที่ 7</option>
                              <option value="8">รอบที่ 8</option>
                              <option value="9">รอบที่ 9</option>
                              <option value="10">รอบที่ 10</option>
                              <option value="11">รอบที่ 11</option>
                              <option value="12">รอบที่ 12</option>
                              <option value="13">รอบที่ 13</option>
                              <option value="14">รอบที่ 14</option>
                              <option value="15">รอบที่ 15</option>
                              <option value="16">รอบที่ 16</option>
                              <option value="17">รอบที่ 17</option>
                              <option value="18">รอบที่ 18</option>
                              <option value="19">รอบที่ 19</option>
                              <option value="20">รอบที่ 20</option>
                              <option value="21">รอบที่ 21</option>
                              <option value="22">รอบที่ 22</option>
                              <option value="23">รอบที่ 23</option>
                              <option value="24">รอบที่ 24</option>
                              <option value="25">รอบที่ 25</option>
                              <option value="26">รอบที่ 26</option>
                              <option value="27">รอบที่ 27</option>
                              <option value="28">รอบที่ 28</option>
                              <option value="29">รอบที่ 29</option>
                              <option value="30">รอบที่ 30</option>
                          </select>
                          </div>
                          </div>
                          <br>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">เปิดที่ : </label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="number" id="open" name="open" placeholder="พิมพ์เลข" class="form-control">
                                  <small class="form-text text-muted">พิมพ์ เปิดที่</small>
                              </div>
                          </div>


                          <br>
                              <div class="row form-group">
                                  <div class="col col-sm-9">
                                      <input type="number" placeholder="ถั่วออก" name="numbit" id="numbit" class="form-control" value="">
                                  </div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-sm-4">
                                    <input type="number" placeholder="ลูกที่ 1:" name="n1" id="n1" class="form-control" value="">
                                </div>
                                <div class="col col-sm-4">
                                    <input type="number" placeholder="ลูกที่ 2:" name="n2" id="n2" class="form-control" value="">
                                </div>
                                <div class="col col-sm-4">
                                    <input type="number" placeholder="ลูกที่ 3:" name="n3" id="n3" class="form-control" value="">
                                </div>
                            </div>
                            </div>

    							</p>
    						</div>
    						<div class="modal-footer">
    							<button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    							<button type="submit" class="btn btn-primary" name="submit" value="submit"/ >Confirm</button>
    						</div>
                </form>
    					</div>
    				</div>
    			</div>
    			<!-- end modal small -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Group# เหยี่ยวฟ้า           
         <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">บันทึกผล ถั่ว</button></h1>

          
          <?php
        
          $servername = "localhost:3307";
          $username = "root";
          $password = "";
          $dbname = "linedb";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT
          round_x.user_id,
          round_x.text,
          round_x.roundx_t
          FROM
          round_x";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "ข้อความจาก : " . $row["user_id"]. " - ขณะนี้ : " . $row["text"]. " เริ่มเวลา : " . $row["roundx_t"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>

          <br>
          <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "linedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT results_x.Round,results_x.open_Name,results_x.numbit,results_x.n1,results_x.n2,results_x.n3 FROM results_x LIMIT 1 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "รอบที่แล้ว : รอบที่ ".$row["Round"]." ตาที่ ".$row["open_Name"]."ถั่วออก🎲👉 ". $row["numbit"]."  👈 🎲:". $row["n1"]." 🎲:". $row["n2"]." 🎲:". $row["n3"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
            <br>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="notify_send_full1.php" target="_blank"><img src="https://www.img.in.th/images/1141ef05d88930db34f2b1e7ca3d0f0f.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4><?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "linedb";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM sumall ";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "ยอดเงิน : " . $row["1a1"]."/" . $row["1a2"]."/". $row["1a3"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              
              ?></h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="notify_send_full2.php" target="_blank"><img src="https://www.img.in.th/images/90f23a95685e54d1d8acf94be9e47ab9.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4><?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "linedb";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM sumall";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "ยอดเงิน : " . $row["2a1"]."/" . $row["2a2"]."/". $row["2a3"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              ?></h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="notify_send_full3.php" target="_blank"><img src="https://www.img.in.th/images/e82a2118fe695cdd8352974c3c135580.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4><?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "linedb";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM sumall";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "ยอดเงิน : " . $row["3a1"]."/" . $row["3a2"]."/". $row["3a3"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              ?></h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="notify_send_full4.php" target="_blank"><img src="https://www.img.in.th/images/37d1e64c60da3a5c872047eac2fa62fd.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4><?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "linedb";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM sumall";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "ยอดเงิน : " . $row["4a1"]."/" . $row["4a2"]."/". $row["4a3"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              ?></h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ชื่อลูกค้า</th>
                  <th>แทงเลข</th>
                  <th>จำนวนเงิน</th>
                  <th>แทงเลข</th>
                  <th>จำนวนเงิน</th>
                  <th>แทงเลข</th>
                  <th>จำนวนเงิน</th>
                  <th>วันเวลา</th>


                </tr>
              </thead>
              <tbody>

                <?php

                $con= mysqli_connect("localhost:3307","root","","linedb") or die("Error: " . mysqli_error());

                mysqli_query($con, "SET NAMES 'utf8' ");
                //2. query ข้อมูลจากตาราง tb_member:
                $query = "SELECT  *   FROM log
                WHERE log.date_time >(SELECT date_time FROM round_start) AND str1_bit < 5 " or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

                while($row = mysqli_fetch_array($result)) {

                  echo "<tr>";
                  echo "<td>" .$row["name"] .  "</td> "; 
                  echo "<td>" .$row["str1_bit"] .  "</td> ";
                  echo "<td>" .$row["str1_money"] .  "</td> ";
                  echo "<td>" .$row["str2_bit"] .  "</td> ";
                  echo "<td>" .$row["str2_money"] .  "</td> ";
                  echo "<td>" .$row["str3_bit"] .  "</td> ";
                  echo "<td>" .$row["str3_money"] .  "</td> ";

                  echo "<td>" .$row["date_time"] .  "</td> ";
                //  echo "<td>" .$row["date_time"] .  "</td> ";
                //	echo "<td>" .$row["text"] .  "</td> ";

                  //แก้ไขข้อมูล
                //  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";

                  //ลบข้อมูล
                //  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
              //    echo "</tr>";
                }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
