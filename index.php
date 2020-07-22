<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="downloads.php" method="post" enctype="multipart/form-data" onsubmit="return JsValidation();" name="myforms">
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>

    <script type="text/javascript">
      function JsValidation() {
        var fiels   = document.forms['myforms']['myfile'];
        if (fiels.value =="") {
            alert("Plz choose files");
            return false;
        }
      }
    </script>
  </body>
</html>