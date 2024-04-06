<!-- header -->
<?php include 'header.php'; ?>

<style>
    .signup{
    min-height:500px;
    max-width:400px;
    font-size:14px;
    margin: auto;
    border-radius: 5px;
    background-color: rgb(152, 146, 146);
    }
    .form-control{
    margin-bottom:8px;
    font-size:14px;
    padding-bottom:2px;
    }
    .txta{
    min-height:90px;
    }
    .btns{
    text-align: center;
    }
    .line{
        margin-bottom: 7px;
        margin-right: auto;
        margin-left: auto;margin-top: 7px;
        width:8%;
        height:5px;
        background:#ffc107;
        border-radius:8px;
    }
    .sr1 {
        background-image: url('img/bg2.jfif');
        background-size: cover;
        background-position: center;
    }
    .signin
    {
    min-height:200px;
    font-size:14px;
    padding-bottom:20px;
    max-width:450px;
    margin: auto;
    border-radius: 5px;
    background-color: rgb(152, 146, 146);
    }
    .form-control
    {
    margin-bottom:8px;
    font-size:14px;
    }
    .btns
    {
    text-align:center;
    }
</style>
<div class="row sr1 mt-1 p-4">
    <div class="col-sm-7" style="color: rgb(179, 237, 237); text-align: center;">
        <h2 style="color: whitesmoke;">
            Sign Up to Get Started
        </h2>
        <h4>
            Join our community today to access a wide range of features designed to assist you in locating your relatives in case of emergencies. By signing up, you'll gain access to:
            Quick and intuitive search tools to locate missing relatives.
            Instant notifications and updates regarding the status of your search.
            Secure communication channels to connect with other users and share information.
            Resources and support to help you navigate through the process of reuniting with your loved ones.
        </h4>
        <div class="h2 text-center"><b>SIGN <span class="text-warning">IN <i class="fa fa-key fa-spin"></i></span></b>
            <div class="line" style="margin-bottom: 7px;margin-top: 7px;
            margin-right: auto;
            margin-left: auto;
            width:8%;
            height:5px;
            background:#ffc107;
            border-radius:8px;">
            </div>
        </div>
        <div class=" signin  p-3 border">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12" style="text-align: left; color: black;">
    
                        Username*<input type="email" name="uname" required class="form-control"
                                     placeholder="Enter Email Id"/>
                        Possword*<input type="password" name="passwd" required class="form-control"
                                        placeholder="Enter Password"/>
    
                        <div class="btns"><input type="submit" value="Login" style="max-width:100px;" class="btn btn-primary form-control"/></div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    <div class="col-sm-5">
        <div class="h2 text-center"><b>SIGN <span class="text-warning">UP <i class="fa fa-user-plus"></i></span></b>
            <div class="line">
            </div>
        </div>
        <div class=" signup p-3 border">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        Name*<input type="text" name="name" required class="form-control" placeholder="Enter Your Name"/>
                        Mobile No.*<input type="number" name="mobile" required class="form-control"
                                        placeholder="Enter Mobile No."/>
                        Email*<input type="email" name="email" required class="form-control"
                                    placeholder="Enter Your Email"/>
                        Possword*<input type="password" name="passwd" required class="form-control"
                                        placeholder="Create Possword"/>
                        Upload Photo*<br/><input type="file" id="myfile" name="myfile" class="form-control">
                        Address*<textarea class="form-control txta" name="address" style="resize:none" required
                                        placeholder="Enter your Address..."></textarea>
                        <div class="btns">
                        <input type="submit" style="max-width:100px;text-align: center; " value="Sign Up" class="btn btn-primary form-control"/></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<?php include 'footer.php'; ?>