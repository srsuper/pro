
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
  <h1>Group#YEAW</h1>
</div>
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

$sql = "SELECT * FROM results_x order BY id DESC limit 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["Round_Name"]." ".$row["open_Name"]."ถั่วออก🎲👉 ". $row["numbit"]."  👈 🎲:". $row["n1"]." 🎲:". $row["n2"]." 🎲:". $row["n3"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<div class="row">
  <div class="col-3 menu">
    <ul><center>
      <li>  
        <?php

$link = mysqli_connect("localhost", "root", "", "line2");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

?>
<form action="postResults.php" method="post">

<li>
รอบ+ตาที่:<br>
<input type="number" name="Round"  >
<input type="number" name="open"><br><br>
 
 ค่า ต๋ง :
<input type="checkbox" name="vat" value="1"/>..ต๋ง..&nbsp;&nbsp;
<input type="checkbox" name="vat" value="0"/>ไม่มี&nbsp;&nbsp;<br><br>
ถั่วออก :<br>
<input type="number" name="numbit"><br>
<input type="number" name="n1"><br>
<input type="number" name="n2"><br>
<input type="number" name="n3"><br>
</li>
<input type="submit"></li>
    </ul></center>
    <?php
    // Close connection
mysqli_close($link);
?>
  </div>
  <div class="col-6">
    <h1>Report</h1>
    <p>รายการสรุปยอด รอบที่ผ่านมา.</p>
    <div class="card shadow mb-4">


</div>

<div class="footer">
  <p>.</p>
</div>
  <script src="js/vconsole.min.js"></script>
  <script>
    var vConsole = new VConsole()
    console.log("Hello World!")
  </script>


  <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
  <script>
    function createUniversalLink() {
      const link1 = liff.permanentLink.createUrl()
      document.getElementById("universalLink1").append(link1)

      liff.permanentLink.setExtraQueryParam('param=9')
      const link2 = liff.permanentLink.createUrl()
      document.getElementById("universalLink2").append(link2)
    }

    async function shareMsg() {
      await liff.shareTargetPicker([
        {
          type: "text",
          text: "This message was sent by ShareTargetPicker"
        }
      ])
    }

    function logOut() {
      liff.logout()
      window.location.reload()
    }

    function closed() {
      liff.closeWindow()
    }

    async function scanCode() {
      const result = await liff.scanCode()
      document.getElementById("scanCode").append(result.value)
    }
    
    function openWindow() {
      liff.openWindow({
        url: "www.facebook.com",
        external: true
      })
    }

    async function getFriendship() {
      const friend = await liff.getFriendship()
      document.getElementById("friendship").append(friend.friendFlag)
      if (!friend.friendFlag) {
        if (confirm("คุณยังไม่ได้เพิ่ม Bot เป็นเพื่อน จะเพิ่มเลยไหม?")) {
          window.location = "https://line.me/R/ti/p/1654152976-RvoK9ray"
        }
      }
    }

    async function sendMsg() {
      if (liff.getContext().type !== "none") {
        await liff.sendMessages([
          {
            "type": "sticker",
            "stickerId": 1,
            "packageId": 1
          }
        ])
        alert("Message sent")
      }
    }

    function getContext() {
      if (liff.getContext() != null) {
        document.getElementById("type").append(liff.getContext().type)
        document.getElementById("viewType").append(liff.getContext().viewType)
        document.getElementById("utouId").append(liff.getContext().utouId)
        document.getElementById("roomId").append(liff.getContext().roomId)
        document.getElementById("groupId").append(liff.getContext().groupId)
      }
    }

    async function getUserProfile() {
      const profile = await liff.getProfile()
      document.getElementById("pictureUrl").src = profile.pictureUrl
      document.getElementById("userId").append(profile.userId)
      document.getElementById("statusMessage").append(profile.statusMessage)
      document.getElementById("displayName").append(profile.displayName)
      document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
    }
    
    function getEnvironment() {
      document.getElementById("os").append(liff.getOS())
      document.getElementById("language").append(liff.getLanguage())
      document.getElementById("version").append(liff.getVersion())
      document.getElementById("accessToken").append(liff.getAccessToken())
      document.getElementById("isInClient").append(liff.isInClient())
      if (liff.isInClient()) {
        document.getElementById("btnLogOut").style.display = "none"
      } else {
        document.getElementById("btnMsg").style.display = "none"
        document.getElementById("btnScanCode").style.display = "none"
        document.getElementById("btnClose").style.display = "none"
      }
    }

    async function main() {
      liff.ready.then(() => {
        document.getElementById("isLoggedIn").append(liff.isLoggedIn())
        if (liff.isLoggedIn()) {
          getEnvironment()
          getUserProfile()
          getContext()
          getFriendship()
          createUniversalLink()
        } else {
          liff.login()
        }
      })
      await liff.init({ liffId: "1654152976-RvoK9ray" })
    }
    main()
  </script>
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
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Panutchakorn@SKT</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
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