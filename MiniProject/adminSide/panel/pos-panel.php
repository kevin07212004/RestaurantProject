<?php
session_start(); // Ensure session is started
?>
<?php
include '../inc/dashHeader.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../css/pos.css" rel="stylesheet" />
    
</head>
<body>
<div class="container">
    <div id="POS-Content" class="row center-middle">
            <a href="reservation-panel.php" style="width:20em;" class="btn btn-dark btn-lg m-5" title="View Details">Reservation</a>
            <a href="../posBackend/posTable.php" style="width:20em;" class="btn btn-dark btn-lg m-5" title="View Details">Order</a>
    </div>
</div>

<!-- Include footer -->
<?php include '../inc/dashFooter.php' ?>
</body>
</html>
