<div id="contactForm">
    <form class="form-horizontal" method="post" action="processContact.php" onsubmit="return cvalidate()">
        <div class="form-group">
            <label for="name" class="control-label col-md-3">Name:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="cName" name="cName" placeholder="Name" required/>
            </div>
        </div>
        <div class="form-group">
            <label for="cEmail" class="control-label col-md-3">Email:</label>
            <div class="col-md-8">
                <input type="email" id="cEmail" name="cEmail" class="form-control col-md-8" placeholder="Email" required />
            </div>
        </div>
        <div class="form-group">
            <label for="subject" class="control-label col-md-3">Subject:</label>
            <div class="col-md-8">
                <input type="text" id="subject" name="subject" class="form-control col-md-8" placeholder="Subject" />
            </div>
        </div>
        <div class="form-group">
            <label for="feedback" class="control-label col-md-3">Message</label>
            <div class="col-md-8">
                <textarea rows="5" class="form-control" id="feedback" name="feedback" placeholder="Write your message here" required ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-3">
                <button class="btn btn-danger" type="submit">Send</button>
            </div>
        </div>
    </form>
</div>