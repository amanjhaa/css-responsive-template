<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div id="userDetail">
                <p>Welcome: Aman Jha <br/>
                    Member Id: 2<br/>
                    Validity: 1 year.</p>
            </div>
            <div id="demand">
                <h4>Book Demand Pannel</h4>

                <div id="demandForm">
                    <form class="form-horizontal" method="post" action="processDemand.php">
                        <div class="form-group">
                            <label for="mId" class="control-label col-md-3">Member's Id:</label>
                            <div class="col-md-8">
                                <input type="number" id='mId' name='MID' class='form-control' placeholder="Member's ID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Bname" class="control-label col-md-3">Book Name:</label>
                            <div class="col-md-8">
                                <input type="text" id='Bname' name='Bname' class='form-control' placeholder="Book's Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="authorName" class="control-label col-md-3">Author's Name:</label>
                            <div class="col-md-8">
                                <input type="text" id='authorName' name='authorName' class='form-control' placeholder="Author's Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publisherNmae" class="control-label col-md-3">Publisher's Name:</label>
                            <div class="col-md-8">
                                <input type="text" id='publisherNmae' name='publisherNmae' class='form-control' placeholder="Publisher's Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="control-label col-md-3">Description:</label>
                            <div class="col-md-8">
                                <textarea id='mId' name='desc' class='form-control' rows="5" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-danger"type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div id="UserContent">
                <div class="col-md-8 col-md-offset-10" >
                    <a href="logout.php">Logout</a>
                </div>
                <h4>Total Number of Book issued: 5</h4>
                <h4>Number of Book to Return: 4</h4>
                <div id="UserPayment">
                    <h4>Payment</h4>

                    <div id="Payment">
                        <form class="form-horizontal" method="post" action="processPayment.php">
                            <div class="form-group">
                                <label for="amount" class="control-label col-md-3">Amount:</label>
                                <div class="col-md-8" id="amount" ">
                                    <select class="form-control" name="pay_amount">
                                        <option  value="1600" selected="">1600</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="duration" class="control-label col-md-3">Duration Year:</label>
                                <div class="col-md-8" id="duration"  >
                                    <select class="form-control" name="pay_duration">
                                        <option  value="1" selected="">1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="control-label col-md-3">Today's Date:</label>
                                <div class="col-md-8">
                                    <input type="date" id='date' name="pay_date" class='form-control' placeholder="Today's Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="control-label col-md-3">Type:</label>
                                <div class="col-md-8" id="subject"  >
                                    <select class="form-control" name="pay_subject">
                                        <option  value="registration" selected="">Registration</option>
                                        <option  value="re-registration">Re-Registration</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="payMethod" class="control-label col-md-3">Select Payment Method:</label>
                                <div class="col-md-8" id="payMethod"  >
                                    <select class="form-control" name="pay_Method">
                                        <option  value="DemandDraft" selected="">Demand Draft</option>
                                        <option  value="Paytm">Paytm</option>
                                        <option  value="PayOrder">PayOrder</option>
                                        
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-danger"type="submit">Pay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
