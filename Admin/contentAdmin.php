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

$sql = "SELECT * FROM demands";
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
                <h2 class="text-center text-danger">Book Demand By Members</h2>
                <div id="contentAdmin">
                    <!--from db-->
                    <?php foreach ($arrayFaq as $demands): ?>
                        <P>Name:<?php echo $demands['B_Name']; ?><br/>   
                            Author:<?php echo $demands['author']; ?><br/>
                            Publisher:<?php echo $demands['publisher']; ?><br/>
                            Description:<?php echo $demands['description']; ?><br/></p>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>