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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

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
<div class="alert alert-success alert-dismissible delalert" >
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Employee details removed successfully</strong>
  </div>
  <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><?php echo $this->session->flashdata('message'); ?></strong>
  </div>
              
             <?php } ?>
<div id="container">
	<h1>Welcome</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Employee
  </button><br/><br/>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form class="form-horizontal" id="employeeform" action="<?php echo base_url(); ?>employeecontrol/add_employee" method="post">
        
                      <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Employee id</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="eid" name="eid" value="" required>
                     </div>
                 </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="email">name:</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">email:</label>
                        <div class="col-sm-10"> 
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">phone</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" id="phone" name="phone" value="" minlength="10" maxlength="10" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">dob</label>
                        <div class="col-sm-10"> 
                           <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                      </div>
                     
                    
                     
                      <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                      </div>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Remove Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirm Yes for remove employee</p>
		<input type="hidden" value="" class="mdelemp">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary edelbtn">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>
	<div id="body">
	
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	 <th>Employee Id</th>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
				 <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
		<?php if(!empty($records)) {
			foreach($records as $r) {
				?>
            <tr>
                <td><?php echo $r->e_id;?></td>
                <td><?php echo $r->name;?></td>
                <td><?php echo $r->email;?></td>
                <td><?php echo $r->phone;?></td>
                <td><?php echo date('d-m-Y',strtotime($r->doj));?></td>
				<?php $url=base_url()."employeecontrol/edit_employee/".$r->id;?>
				 <td> <a href="<?php echo $url;?>" class="btn btn-info" role="button" >Edit</a><br/><br/>
				 <a href="javascript:void(0)" class="btn btn-info edelete" role="button" id="<?php echo $r->id;?>" >Delete</a></td>
                
            </tr>
		<?php } }else {?>
		<tr>
                <td>No Data Found</td></tr>
		<?php } ?>
           
            
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>DOB</th>
				<th>Action</th>
               
            </tr>
        </tfoot>
    </table>

	</div>


  <!-- The Modal -->
  
  
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>