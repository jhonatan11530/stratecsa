


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="form.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

</head>
<body>

<form action="?" method="post" id="msform" name="mc-embedded-subscribe-form" class="validate desktop" novalidate>
  <!-- progressbar -->
    <div class="container">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0" class="active">
                    <a href="#step-1" class="btn" aria-controls="step-1" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-user"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-heart"></i></span>
                    </a>
                </li>
                <li rel-index="2">
                    <a href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-plus"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">
                <div class="col-md-12">
                

                    <h3>Business Info</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Business Name</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Name"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">EIN (used to verify your business)</label>
                            <input  maxlength="10" type="text" required="required" class="form-control" placeholder="12-3456789"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">
                                Type of Business</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">Restaurant</option>
                                <option value="suggestions">Shopping</option>
                                <option value="product">Financial</option>
                                <option value="product">Retail</option>
                                <option value="product">Online</option>
                                <option value="product">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website (option)</label>
                            <input maxlength="100" type="text"  class="form-control" placeholder="URL" />
                        </div>
                    </div> 
                    <h3>Business Location</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Street Adress</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Address"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input  maxlength="40" type="text" required="required" class="form-control" placeholder="Enter City"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">ZIP</label>
                            <input  maxlength="5" type="text" required="required" class="form-control" placeholder="Enter ZIP Code"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <input  maxlength="2" type="text" required="required" class="form-control" placeholder="Enter State"  />
                        </div>
                    </div>
                    <h3>Business Contact</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input  maxlength="14" type="text" required="required" class="form-control" placeholder="(555) 555-5555"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email"  />
                        </div>
                    </div>
                
                    <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-2">
                <div class="col-md-12">
                    <button id="step-2-next" class="btn btn-lg btn-primary pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-3">
                <div class="col-md-12">
                    <button id="step-3-next" class="btn btn-lg btn-primary pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-4">
                <div class="col-md-12">
                    <button id="step-4-next" class="btn btn-lg btn-primary pull-right">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script type="text/javascript" src="form.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type-"text/javascript" src="js/script.js"></script>
<script async="" src="js/analytics.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer> </script>
<script  src="js/captcha.js"></script>
<script src="js/sweetalert.min.js"></script>

</body>
</html>