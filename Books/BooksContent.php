<?php
include ('Elements/Books/searchBar.php');

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

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $arrayFaq = array();
    while ($row = $result->fetch_assoc()) {
        $arrayFaq[] = $row;
    }
}
$conn->close();
$chunkedArrayFaq = array_chunk($arrayFaq, 2);
?>
<br/>

<div class="container-fluid">
    <?php foreach ($chunkedArrayFaq as $books):
        ?>
        <div class="row">
            <div class="col-md-12">
                <div id="bookContent1">
                    <!--from db-->
                    <div id="book2" class="col-md-2 bookimg">
                        <img src="<?php echo $books[0]['img_path']; ?>"/>
                    </div>
                    <div class="col-md-4 bookdDetails">
                        <p>Book Title:<?php echo $books[0]['title']; ?><br>
                            Author:<?php echo $books[0]['author']; ?><br>
                            ISBN No:<?php echo $books[0]['ISBN']; ?><br>
                            Category:<?php echo $books[0]['category']; ?><br>
                            Publisher: <?php echo $books[0]['price']; ?><br>
                            Price:<?php echo $books[0]['qunatity']; ?><br>
                            Quantity:  <?php echo $books[0]['publication']; ?></p><br>
                    </div>
                    <?php if (isset($books[1]['title'])): ?>


                        <div id="book2" class="col-md-2 bookimg">
                            <img src="<?php echo $books[1]['img_path']; ?>"/>"/>
                        </div>
                        <div class="col-md-4 bookdDetails">
                            <p>Book Title:<?php echo $books[1]['title']; ?><br>
                                Author:<?php echo $books[1]['author']; ?><br>
                                ISBN No:<?php echo $books[1]['ISBN']; ?><br>
                                Category:<?php echo $books[1]['category']; ?><br>
                                Publisher: <?php echo $books[1]['price']; ?><br>
                                Price:<?php echo $books[1]['qunatity']; ?><br>
                                Quantity:  <?php echo $books[1]['publication']; ?></p><br>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
