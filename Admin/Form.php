<div class="continer-fulid">
    <div class="row">
        <div class="col-md-6">
            <div id="addrmv">
                <h1 class="text-center">ADD REMOVE STAFF</h1>
                <form class="form-horizontal" method="post" action="processAddStaff.php" onsubmit="">
                    <div class="form-group">
                        <label for="name" class="control-label col-md-3">Name:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="name" name="staff_name" placeholder="Name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label col-md-3">Address:</label>
                        <div class="col-md-8">
                            <textarea  rows="5" class="form-control" id="address" name="staff_add" placeholder="Enter complete address detail here" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="doj" class="control-label col-md-3">Date of Join:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="date" id="dob" name="staff_join" placeholder="Date of Join" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post" class="control-label col-md-3">Post:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="post" name="staff_post" placeholder="Designation" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact" class="control-label col-md-3">Contact No:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="Number" id="contact" name="staff_contact" placeholder="Contact no" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-success btn-group-justified" type="submit">Add</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Select" class="control-label col-md-3">Select Staff:</label>
                        <div class="col-md-8" id="Select" name="del_staff">
                            <select class="form-control">
                                <option  value="Aman">Aman</option>
                                <option  value="Chetan">Chetan</option>
                                <option  value="Ankita">Ankita</option>
                                <option  value="Raj">Raj</option>
                                <option  value="Rityunjay">Rityunjay</option>
                                <option  value="Devdutt">Devdutt</option>
                                <option  value="Ravi">Ravi</option>
                                <option  value="Sanu">Sanu</option>
                                <option  value="Kuldeep">Kuldeep</option>
                                <option  value="Kunal">Kunal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="btn btn-danger btn-group-justified" type="submit">Remove</div>
                        </div>
                    </div>
                </form>
            </div> 
        </div> 


        <div class="col-md-6">
            <div id="AddBook">
                <h1 class="text-center">BOOK UPDATE PANNEL</h1>
                <form class="form-horizontal" method="post" action="processAddBooks.php">
                    <div class="form-group">
                        <label for="Title" class="control-label col-md-3">Title:</label>
                        <div class="col-md-8">
                            <input type="text" id="Title" name="book_title" class="form-control" placeholder="Book's Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Author" class="control-label col-md-3">Author:</label>
                        <div class="col-md-8">
                            <input type="text" id="Author" name="book_author" class="form-control" placeholder="Author's Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ISBN" class="control-label col-md-3">ISBN No:</label>
                        <div class="col-md-8">
                            <input type="number" id="ISBN" name="book_isbn" class="form-control" placeholder="Book's ISBN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Category" class="control-label col-md-3">Category:</label>
                        <div class="col-md-8">
                            <select class="form-control" id="Category" name="book_category">
                                <option  value="Scienc">Science</option>
                                <option  value="Tech">Tech</option>
                                <option  value="History">History</option>
                                <option  value="Geography">Geography</option>
                                <option  value="Stories">Stories</option>
                                <option  value="Novels">Novels</option>
                                <option  value="Entertainment">Entertainment</option>
                                <option  value="Sports">Sports</option>
                                <option  value="Art">Art</option>
                                <option  value="Music">Music</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Publisher" class="control-label col-md-3">Publisher:</label>
                        <div class="col-md-8">
                            <input type="text" id="Publisher" name="book_publisher" class="form-control" placeholder="Publisher's Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Price" class="control-label col-md-3">Price:</label>
                        <div class="col-md-8">
                            <input type="Price" id="price" name="book_price" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="control-label col-md-3">Quantity:</label>
                        <div class="col-md-8">
                            <input type="quantity" id="price" name="book_quantity" class="form-control" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label col-md-3">Image:</label>
                        <div class="col-md-8">
                            <input type="file" id="image" name="book_image" class="form-control" placeholder="choose">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-success btn-group-justified" type="submit">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr>
<?php include('Elements/Admin/contentAdmin.php'); ?>
