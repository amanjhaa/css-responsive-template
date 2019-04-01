<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div id="loginTag" class="text-center">
                <h3>LOGIN ADMIN</h3>
            </div>

            <div id="AdminForm">
                <form class="form-horizontal" method="post" action="ProcessLoginAdmin.php">
                    <div class="form-group">
                        <label for="username" class="control-label col-md-3">Username:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword" class="control-label col-md-3">Password:</label>
                        <div class="col-md-8">
                            <input type="password" id="loginPassword" name="password" class="form-control col-md-8" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-danger"type="submit">Login</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div id="loginTag" class="text-center">
                <h3>LOGIN USER</h3>
            </div>
            <div id="UserForm">
                <form class="form-horizontal" method="post" action="ProcessUserLogin.php">
                    <div class="form-group">
                        <label for="username" class="control-label col-md-3">Username:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword" class="control-label col-md-3">Password:</label>
                        <div class="col-md-8">
                            <input type="password" id="loginPassword" name="password" class="form-control col-md-8" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-danger"type="submit">Login</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
