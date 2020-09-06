<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body >
<div style="background-color:black;color:white;padding:20px;">
<h2>Personal Info</h2>
<p>
<?php
    echo "<b>Name:</b> " .$_SESSION["name"] ." <br><br>";
    echo "<b>Roll No:</b> " .$_SESSION["rollno"] ." <br><br>";
    echo "<b>Branch:</b> " .$_SESSION["branch"] ." <br><br>";
    echo "<b>Semester:</b> " .$_SESSION["sem"] ." <br><br>";  
?>
</p>
</div>
</body>
</html>