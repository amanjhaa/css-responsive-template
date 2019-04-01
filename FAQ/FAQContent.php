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

$sql = "SELECT * FROM faq";
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
            <div id="faqContent">
                <!--from db-->
                <?php foreach ($arrayFaq as $faq): ?>
                    <h4><?php echo $faq['question']; ?></h4>
                    <p><?php echo $faq['answer']; ?></p><br/>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>