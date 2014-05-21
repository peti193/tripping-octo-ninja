<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Simple Login with CodeIgniter - Private Area</title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="../assets/jQgrid/css/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../assets/jQgrid/css/ui.jqgrid.css" />  
        <script src="../assets/jQgrid/js/jquery-1.9.0.min.js" type="text/javascript"></script>
        <!--<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
        <script src="../assets/jQgrid/grid.locale-en.js" type="text/javascript"></script>
        <script src="../assets/jQgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
        <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="../assets/modal.js"></script>
        <script src="../assets/bootbox.min.js"></script>


        <style>
            .hero-unit {
                padding:20px;
            }
            .ui-jqgrid-sortable {
                height:27px !important;
            }
            .ui-jqgrid tr.ui-row-ltr td {
                text-align: center !important;
            }
            .ui-jqgrid .ui-pg-selbox {
                height: 27px !important;
            }
            .ui-jqgrid .ui-jqgrid-pager {
                height: 34px !important;

            }
            .ui-widget-header {
                border: 1px solid #456f9a /*{b-bar-border}*/;
                background: #5e87b0 /*{b-bar-background-color}*/;
                color: #fff /*{b-bar-color}*/;
                font-weight: bold;
                text-shadow: 0 /*{b-bar-shadow-x}*/ 1px /*{b-bar-shadow-y}*/ 1px /*{b-bar-shadow-radius}*/ #3e6790 /*{b-bar-shadow-color}*/;
                background-image: -webkit-gradient(linear, left top, left bottom, from( #6facd5 /*{b-bar-background-start}*/), to( #497bae /*{b-bar-background-end}*/)); /* Saf4+, Chrome */
                background-image: -webkit-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* Chrome 10+, Saf5.1+ */
                background-image:    -moz-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* FF3.6 */
                background-image:     -ms-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* IE10 */
                background-image:      -o-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* Opera 11.10+ */
                background-image:         linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
            }
            .ui-pager-control {
                border: 1px solid #456f9a /*{b-bar-border}*/;
                background: #5e87b0 /*{b-bar-background-color}*/;
                color: #fff /*{b-bar-color}*/;
                font-weight: bold;
                text-shadow: 0 /*{b-bar-shadow-x}*/ 1px /*{b-bar-shadow-y}*/ 1px /*{b-bar-shadow-radius}*/ #3e6790 /*{b-bar-shadow-color}*/;
                background-image: -webkit-gradient(linear, left top, left bottom, from( #6facd5 /*{b-bar-background-start}*/), to( #497bae /*{b-bar-background-end}*/)); /* Saf4+, Chrome */
                background-image: -webkit-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* Chrome 10+, Saf5.1+ */
                background-image:    -moz-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* FF3.6 */
                background-image:     -ms-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* IE10 */
                background-image:      -o-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/); /* Opera 11.10+ */
                background-image:         linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);

            }
            .ui-widget-content {
                border: 1px solid #5e87b0;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">CFS admin</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            Logged in as
                           <!--<a href="#" class="navbar-link " style="font-weight:bold;color:#fff;"><?php echo $nickname; ?></a>-->
                            <a href="#" id="userLoggedIn" class="navbar-link " style="font-weight:bold;color:#fff;"></a>

                            <a class="navbar-link" style="margin-left: 30px;color:#fff;" href="logout">Logout</a>

                        </p>
                        <ul class="nav">
                            <li class="active"><a href="#">Sample nav</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 60px;">
            <div class="row-fluid">
                <div class="span3">
                    <div class="sidebar-nav">
                        <div class="well">
                            <ul class="nav nav-list"> 
                                <li class="nav-header">Navigation</li>        
                                <li class="active"><a href="main"><i class="icon-home"></i> Dashboard</a></li>
                                <li><a href="user_editor"><i class="icon-user"></i> Members</a></li>
                                <li><a href="#"><i class="icon-shopping-cart"></i> Shopping cart</a></li>
                                <!--<li><a href="#"><i class="icon-edit"></i> Add Blog Post</a></li>
                                <li><a href="#"><i class="icon-comment"></i> Comments</a></li>
                                <li><a href="#"><i class="icon-picture"></i> Gallery</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div><!--/span-->
                <div class="span9">
                    <div class="hero-unit">
                        <?php $this->load->view($content); ?>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text">Are you sure you want to delete the user?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>
            </div>


            <footer>
            </footer>

        </div><!--/.fluid-container-->

        <script type="text/javascript">
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "user_editor/getCurrentUser",
                    cache: false,
                    success: function(data) {
                        $("#userLoggedIn").html(data);
                    }
                })

            });
        </script>
    </body>
</html>


