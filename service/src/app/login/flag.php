<?php

if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

if(isset($_SESSION['login']) && $_SESSION['login'] === true){
	#SAFE
}else{
	Header('Location: index.php');
}

?>
<style>
body{
    background-color: #f3f6f8;
    margin-top:20px;
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.profile-user-box {
    position: relative;
    border-radius: 5px
}
.bg-custom {
    background-color: #02c0ce!important;
}
.profile-user-box {
    position: relative;
    border-radius: 5px;
}

.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}
.inbox-widget .inbox-item img {
    width: 40px;
}

.inbox-widget .inbox-item {
    border-bottom: 1px solid #f3f6f8;
    overflow: hidden;
    padding: 10px 0;
    position: relative
}

.inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px
}

.inbox-widget .inbox-item img {
    width: 40px
}

.inbox-widget .inbox-item .inbox-item-author {
    color: #313a46;
    display: block;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px
}

.comment-list .comment-box-item {
    position: relative
}

.comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px
}

.comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px
}

.comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.comment-list a+a {
    margin-top: 15px;
    display: block
}

.ribbon-box .ribbon-primary {
    background: #2d7bf4;
}

.ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    -o-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    color: #fff;
    font-size: 13px;
}
.text-custom {
    color: #02c0ce!important;
}

.badge-custom {
    background: #02c0ce;
    color: #fff;
}
.badge {
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    padding: .35em .5em;
    font-weight: 500;
}
.text-muted {
    color: #98a6ad!important;
}

.font-13 {
    font-size: 13px!important;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                        <div class="col-sm-6"><span class="float-left mr-3"><img src="https://www.bootdey.com/app/webroot/img/Content/user_1.jpg" alt="" class="thumb-lg rounded-circle"></span>
                            <div class="media-body text-white">
                                <h4 class="mt-1 mb-1 font-18">Admin</h4>
                                <p class="font-13 text-light">User Experience Specialist</p>
                                <p class="text-light mb-0">California, United States</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <a href="logout.php" class="btn btn-light waves-effect"><i class="mdi mdi-account-settings-variant mr-1"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0">INI FLAG BUAT KAMU</h4>
                    <div class="panel-body">
                        <p class="text-muted font-13">Hackfest0x5{B3rh4s1l_M4suk_4dm1n}</p>
                        <hr>
                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>
                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(+12) 123 1234 567</span></p>
                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>
                            <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                            <p class="text-muted font-13"><strong>Languages :</strong> <span class="m-l-5"><span class="flag-icon flag-icon-us m-r-5 m-t-0" title="us"></span> <span>English</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-de m-r-5" title="de"></span> <span>German</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-es m-r-5" title="es"></span> <span>Spanish</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-fr m-r-5" title="fr"></span> <span>French</span></span>
                            </p>
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Personal-Information -->
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary">Messages</div>
                    <div class="clearfix"></div>
                    <div class="inbox-widget">
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamdannaway</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                            <h2 class="" data-plugin="counterup">1,587</h2><span class="badge badge-custom">+11% </span><span class="text-muted">From previous period</span></div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                            <h2 class="">$<span data-plugin="counterup">46,782</span></h2><span class="badge badge-danger">-29% </span><span class="text-muted">From previous period</span></div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                            <h2 class="" data-plugin="counterup">1,890</h2><span class="badge badge-custom">+89% </span><span class="text-muted">Last year</span></div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Experience</h4>
                    <div class="">
                        <div class="">
                            <h5 class="text-custom">Lead designer / Developer</h5>
                            <p class="mb-0">websitename.com</p>
                            <p><b>2010-2015</b></p>
                            <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <hr>
                        <div class="">
                            <h5 class="text-custom">Senior Graphic Designer</h5>
                            <p class="mb-0">coderthemes.com</p>
                            <p><b>2007-2009</b></p>
                            <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="header-title mb-3">My Projects</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="label label-info">Work in Progress</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Adminox Frontend</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="label label-success">Pending</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="label label-pink">Done</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Adminox Frontend</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="label label-purple">Work in Progress</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="label label-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
