<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Studee Developer Test</title>
    <meta name="keywords" content="Studee,Developer Test,Software Developer" />
    <meta name="description" content="Studee Developer Test- To Gauge Developer Level">


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />

    >

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<section class="body">


<!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="assets/images/studee_logo.png" height="35" alt="Porto Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>


    </header>
    <!-- end: header -->

    <div class="inner-wrapper">

        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Studee Lead Developer Test</h2>


            </header>

            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Search Country Information</h2>
                        </header>
                        <div class="panel-body">
                            <form  class="form-horizontal form-bordered" id="country_search_form" method="GET" name="country_search_form"  action="/country/search" >

                                <div class="form-group form_errors" id="messageBox">
                                    <div>
                                    <label for="form_error_messages" class="col-md-3 control-label">The following issues were found</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-md-3 control-label">Country Name</label>
                                    <div class="col-md-6">

                                        <input  data-field="Country" type="text" class="form-control input-group" id="country" name="country"/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alpha2" class="col-md-3 control-label"> ISO 3166-1 2-letter Country Code e.g (GB)</label>
                                    <div class="col-md-6">
                                        <input  data-field="ISO 3166-1 2-letter Country Code"  value="" class="form-control input-group inputTag" id="alpha2"  data-max-chars="2"    name="alpha2"  />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alpha3" class="col-md-3 control-label"> ISO 3166-1 3-letter Country Code e.g (GBR)</label>
                                    <div class="col-md-6">
                                        <input value="" data-field="ISO 3166-1 3-letter Country Code" class="form-control input-group inputTag" id="alpha3"   data-max-chars="3"      name="alpha3"   />

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="capital" class="col-md-3 control-label">Capital City</label>
                                    <div class="col-md-6">

                                        <input data-field="Capital City" type="text" class="form-control input-group" id="capital" name="capital"/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="currency" class="col-md-3 control-label">ISO 4217 3 letter Currency Code (GBP)</label>
                                    <div class="col-md-6">

                                        <input data-field="ISO 4217 3 letter Currency Code " type="text" class="form-control input-group" id="currency" name="currency"/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lang" class="col-md-3 control-label">Language<small>Language is a 2 character code e.g en</small></label>

                                    <div class="col-md-6">

                                        <input data-field="Language "  type="text" class="form-control input-group" id="lang" name="lang"/>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                    </div>
                                        <div class="col-md-6">
                                    <button type="submit" id="retrieve_data" class="mb-xs mt-xs mr-xs btn btn-primary">Retrieve Data</button>
                                        </div></div>


                            </form>
                        </div>
                    </section>
                </div>
            </div>









            <!-- end: page -->
        </section>
    </div>


</section>

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.min.js"></script>


<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/javascripts/theme.custom.js"></script>




</body>
</html>
