<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM eventss";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $arrayFaq = array();
    while ($row = $result->fetch_assoc()) {
        $arrayFaq[] = $row;
    }
}
$conn->close();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="adminContent">
                <h2 class="text-center text-danger">Upcoming Events.</h2>
                <div id="eventDetails">
                    <!--from db-->
                    <?php foreach ($arrayFaq as $eventss): ?>
                        <h3>Date: <?php echo $eventss['DOE']; ?></h3>
                        <h3><?php echo $eventss['Title']; ?></h3>
                        <p><?php echo $eventss['description']; ?><p><br/>
                        <?php endforeach; ?>
                </div>
                <h4><a class="glyphicon glyphicon-print col-md-offset-6" onclick="print()">print</a></h4>
            </div>
        </div>
    </div>
</div>