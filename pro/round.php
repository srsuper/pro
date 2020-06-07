
<?php
date_default_timezone_set('Asia/Bangkok');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body style="margin-top: 50px;">
    <div class="row">
    	<div class="card">
    <div class="card-body">
<div class="alert alert-primary" role="alert">
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

  $sql = "SELECT start_round.start_round,start_round.start_open,start_round.on_off,start_round.date_time FROM start_round ORDER BY start_id DESC LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "สถานะ : รอบที่ ". $row["start_round"]." - เปิดที่ : " . $row["start_open"]. " สถานะ : " . $row["on_off"].   " " . $row["date_time"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
  </div>
    </div>
      </div>
      <div class="card">
      <div class="card-body">
      <div class="alert alert-success" role="alert">
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

        $sql = "SELECT * FROM log  order by id desc LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          echo "ข้อความจาก : " . $row["name"]. " - ขณะนี้ : " . $row["text"]. " เริ่มเวลา : " . $row["date_time"]. "<br>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </div>
      <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="notify_send_1.php" target="_blank"><img src="https://www.img.in.th/images/f5c1c2a97cedded7cb6d949890b82204.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
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
              <a href="notify_send_2.php" target="_blank"><img src="https://www.img.in.th/images/e164deb6280e6c16f71cac8911468acf.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
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
              <a href="notify_send_3.php" target="_blank"><img src="https://www.img.in.th/images/441464f9da0439bfe480c69995f7d648.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
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
              <a href="notify_send_4.php" target="_blank"><img src="https://www.img.in.th/images/16a99deebfd37151d846ddd4beb9129b.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
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
          
      </div>
      </div>

      </div>
      </div>
      </div>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <section class="card">
        <div class="card-body text-secondary">
          <form method="post" name="myform1">
          <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
          <br>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label class=" form-control-label">ค่าต๋ง: </label>
              </div>
              <div class="col col-md-9">
                  <div class="form-check">
          <input type="radio" name="myradio" id="myradio1" value="-(1.02 * 3) "checked> &nbsp;&nbsp;ต๋ง&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="myradio" id="myradio2" value="0"> &nbsp;&nbsp;ฟรีต๋ง
          </div>
          </div>
          </div>

          <br>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="select" class=" form-control-label">รอบที่ :</label>
              </div>
              <div class="col-12 col-md-9">
          <select name="myselect" id="myselect"class="form-control">
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
                  <input type="number" id="myopen" name="myopen" placeholder="พิมพ์เลข" class="form-control">
                  <small class="form-text text-muted">พิมพ์ เปิดที่</small>
              </div>
          </div>


          <br>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="textarea-input" class=" form-control-label">ข้อความเพิ่มเติม : </label>
              </div>
              <div class="col-12 col-md-9">
                  <textarea name="mydesc" id="mydesc" rows="9" placeholder="ข้อความเพิ่มเติม..." class="form-control"></textarea>
              </div>
          </div>

          <br>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label class=" form-control-label">status:</label>
              </div>
              <div class="col col-md-9">
                  <div class="form-check">
          <input type="radio" name="myradioR" id="myradio1" value="on" checked> &nbsp;&nbsp; เริ่ม &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="myradioR" id="myradio2" value="off"> &nbsp;&nbsp; หยุด</h5>
          </div>
          </div>
          </div>
          <br><br>

          <input type="button" value="ลุย++" class="btn btn-success btn-lg" onClick="this.form.action='notify_send_StartRound.php'; submit()"> &nbsp;&nbsp;
          <input type="button" value="--พักแปป" class="btn btn-warning btn-lg" onClick="this.form.action='notify_send_StopRound.php'; submit()"> &nbsp;&nbsp;
          <input type = "reset" class="btn btn-danger btn-lg" name="myreset" id="myreset" value="Reset">
          <br><br>

          </form>


        </div>
      </section>
    </div>
    <div class="col-sm-3">
      <section class="card">
        <div class="card-body text-secondary">
          <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
            บันทึกผล ถั่ว
          </button>
          <!-- TOP CAMPAIGN-->
          <br><br><div class="top-campaign">
              <h3 class="title-3 m-b-30">รายการ ถั่วออก</h3>
              <div class="table-responsive">
                  <table class="table table-top-campaign">
                  <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>รอบที่</th>
                  <th>เปิดที่</th>
                  <th>ถั่วออก</th>
                  <th>เต๋า1</th>
                  <th>เต๋า2</th>
                  <th>เต๋า3</th>
                


                </tr>
              </thead>
              <tbody>

                  <?php

$con= mysqli_connect("localhost:3307","root","","linedb") or die("Error: " . mysqli_error());

mysqli_query($con, "SET NAMES 'utf8' ");
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT
log_results.id,
log_results.Round,
log_results.`open`,
log_results.numbit,
log_results.n1,
log_results.n2,
log_results.n3

FROM
log_results
ORDER BY
log_results.id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

while($row = mysqli_fetch_array($result)) {

  echo "<tr>";
  echo "<td>" .$row["id"] .  "</td> "; 
  echo "<td>" .$row["Round"] .  "</td> ";
  echo "<td>" .$row["open"] .  "</td> ";
  echo "<td>" .$row["numbit"] .  "</td> ";
  echo "<td>" .$row["n1"] .  "</td> ";
  echo "<td>" .$row["n2"] .  "</td> ";
  echo "<td>" .$row["n3"] .  "</td> ";

  //echo "<td>" .$row["date_time"] .  "</td> ";
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
                    
              </div>
          </div>
          <!--  END TOP CAMPAIGN-->
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
        </div>
      </section>
    </div>
    <div class="col-lg-6">
      <section class="card">
        <div class="card-body text-secondary">
          <div class="row m-t-30">
              <div class="col-md-12">

                  <!-- DATA TABLE-->
                  <div class="table-responsive m-b-40">
                      <table class="table table-borderless table-data3">
                        <?php
                        $con = mysqli_connect('localhost:3307', 'root', '', 'linedb');
                        $sql = "SELECT
                        count( `log`.`name` ) AS `COUNT(name)`,
                        sum( `log`.`str1_money` ) AS `s1`,
                        sum( `log`.`str2_money` ) AS `s2`,
                        sum( `log`.`str3_money` ) AS `s3` 
                      FROM
                        `log` 
                      WHERE
                        `log`.`date_time` > ( SELECT `round_from`.`date_time` FROM `round_from` ) 
                        AND `log`.`str1_bit` > 0 ";
                        $query = mysqli_query($con, $sql);
                        ?>
                        
                        รายงาน
                          <thead>
                              <tr>
                                  <th>รอบที่</th>
                                  <th>จำนวนผู้เล่น</th>
                                  <th>เลขที่แทงเยอะ</th>
                                  <th>Income</th>
                                  <th>Expense</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php while ($result = mysqli_fetch_assoc($query)) { ?>
                          <?php } ?>
                          <tr>
                          
                            <td><?php echo $result['COUNT(name)']; ?></td>
                                <td><?php echo $result['']; ?></td>
                                  <td><?php echo $result['']; ?></td>
                                  <td><?php echo $result['']; ?></td>

                              </tr>

                          </tbody>
                      </table>
                  </div>
                  <!-- END DATA TABLE-->

        </div>
      </section>
    </div>
  </div>
<br><br>



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
</body>
</html>
