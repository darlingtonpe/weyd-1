<div id="accordion" class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB1" data-toggle="collapse"> My
details </a></h4>
</div>
<div class="panel-collapse collapse in" id="collapseB1">
<div class="panel-body">
<form method="post" action=""class="form-horizontal" role="form">
<div class="form-group">
<label name="firstname"class="col-sm-3 control-label">First Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="<?php echo $userRow['firstname'];?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Last name</label>
<div class="col-sm-9">
<input type="text" name="lastname"class="form-control" placeholder="<?php echo $userRow['lastname'];?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="email" name="email" class="form-control" placeholder="<?php echo $userRow['email'];?>">
</div>
</div>
<div class="form-group">
<label for="Phone" class="col-sm-3 control-label">Phone</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="phone"id="Phone" placeholder="<?php echo $userRow['phone'];?>">
</div>
</div>

<!-- <div class="form-group hide">
<label class="col-sm-3 control-label">Facebook account map</label>
<div class="col-sm-9">
<div class="form-control"><a class="link" href="fb.php">Jhone.doe</a> <a class=""> <i class="fa fa-minus-circle"></i></a></div>
</div>
</div> -->
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9"></div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" name="update"class="btn btn-default">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
