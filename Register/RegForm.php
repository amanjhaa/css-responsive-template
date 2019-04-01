<div class="col-md-7">
    <div id="registration">
        <h1 class="text-center">REGISTRATION FORM</h1>
        <form class="form-horizontal" method="post" action="processReg.php" onsubmit="return validate();">
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Name:</label>
                <div class="col-md-8">
                    <input name="txt_name" class="form-control" type="text" id="name" placeholder="Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-md-3">Password:</label>
                <div class="col-md-8">
                    <input name="txt_password" class="form-control" type="password" id="password" placeholder="Password" required />
                </div>

            </div>
            <div class="form-group">
                <label for="cPassword" class="control-label col-md-3">Conform Password:</label>
                <div class="col-md-8">
                    <input name="txt_cnf_password" class="form-control" type="password" id="cPassword" placeholder="Conform Password" required />
                </div>
            </div>
            <div class="form-group">
                <label for="contact" class="control-label col-md-3">Contact Number:</label>
                <div class="col-md-8">
                    <input name="txt_contact" class="form-control" type="number" id="contact" placeholder="Contact Number" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-md-3">Email:</label>
                <div class="col-md-8">
                    <input name="txt_email" class="form-control" type="email" id="email" placeholder="Email" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="dob" class="control-label col-md-3">Date of birth:</label>
                <div class="col-md-8">
                    <input class="form-control" name="txt_dob" type="date" id="dob" placeholder="Date of birth" required/>
                </div>
            </div>
            <div>
                <label for="radio" class="control-label col-md-3">Gender:</label>
                <div class="col-lg-8">
                    <div class="radio" id="Gender">
                        <label>
                            <input  type="radio" name="gender" value="Male"/>Male<br/>
                        </label>
                    </div>
                    <div class="radio" id="Gender">
                        <label>
                            <input  type="radio" name="gender" value="Female"/>Female<br/>
                        </label>
                    </div>
                    <div class="radio" id="Gender">
                        <label>
                            <input  type="radio" name="gender" value="Other"/>Other<br/>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label col-md-3">Address:</label>
                <div class="col-md-8">
                    <textarea name="txt_address"  rows="5" class="form-control" id="address" placeholder="Enter your complete address detail here" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-danger" type="submit">Register</button>
                </div>
            </div>
        </form>
    </div> 
</div> 