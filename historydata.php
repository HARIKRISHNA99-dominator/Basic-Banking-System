<?php


$servername = "localhost";
$username = "Hari Krishna";
$password = "hari.krishna99";
$dbname = "customer";
$flag=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM transaction_history";


$result = $conn->query($sql);

$table="<div class='table-responsive'> <table class='table-bordered table table-striped '><tr><th class='table-primary'>Account Holder</th><th class='table-primary'>Beneficiary</th><th class='table-primary'>Transfer Amount</th><th class='table-primary'>Transfer Date</th></tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
     {
     $table.=  "<tr><td>" . $row["Accountholder"]. "</td><td>" . $row["Beneficiary"]. " </td><td>" .$row["Amount"]. " </td><td>" .$row["date"]."</td></tr>";
    }
  } else {
    echo "0 results";
  }

    $table.="</table></div";
    echo $table;

?>
<html>
<head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   
   tr td{
     color:darkblue;
   }
   a{
      color:white;
      text-decoration:none;
    }
    table
    {
        
        font-size:200%;
        text-align:center;

    }
    .table-responsive{
      border-radius:3% ;
    }
</style>
</head>
<body>
  <div style="margin-left:50%">
<button class="btn btn-primary"  ><a href='transferfunds.php'>Go back</a></button>
  </div>
</body>

</html>