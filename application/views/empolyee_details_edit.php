<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!--<link rel = "stylesheet" type = "text/css" 
   href = "<?php //echo base_url(); ?>css/style.css">-->

<script type = 'text/javascript' src ="<?php echo base_url(); ?>js/common.js"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
  <?php if($this->session->flashdata('message')) { ?>
            <div class="callout-message">
            <div class="callout callout-info col-xs-12">
               <p><?php echo $this->session->flashdata('message'); ?></p>
             </div>
             </div>
             <?php } ?>
<div id="container">
	<h1>Welcome</h1>
	
	<form class="form-horizontal" id="employeeform" action="<?php echo base_url(); ?>employeecontrol/update_employee" method="post">
        <input type="hidden" name="id" value="<?php echo $emp_details->id;?>">
                      <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Employee id</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="eid" name="eid" value="<?php echo $emp_details->e_id;?>">
                     </div>
                 </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="email">name:</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="<?php echo $emp_details->name;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">email:</label>
                        <div class="col-sm-10"> 
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $emp_details->email;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">phone</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $emp_details->phone;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">dob</label>
                        <div class="col-sm-10"> 
                           <input type="date" class="form-control" id="date" name="date" value="<?php echo $emp_details->doj?>">
                        </div>
                      </div>
                     
                    
                     
                      <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                      </div>
                </form>

  
	


  <!-- The Modal -->
  
  
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>