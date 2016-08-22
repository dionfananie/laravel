<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	{!!Html::style('css/materialize.css')!!}
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
</head>
<body>

	{!!Form::open(array('url' =>['update', $datas]));!!}

		<div class="row">

			@if(Session::has('updatemsg'))
			
				<span style="color:green">{!!Session::get('updatemsg')!!}
			
			@endif
		    <form class="col s6">
		      <div class="row">
		        <div class="input-field col s3">
		          <input placeholder="First Name" name="first_name" value="<?php echo $datas->first_name?>" type="text" class="validate">
		          <label for="first_name">First Name</label>
						<?php
						if ($errors->has('first_name')){
								echo $errors->first('first_name');}?>
		        </div>
		        <div class="input-field col s3">
		          <input placeholder="Last Name" name="last_name" value="<?php echo $datas->last_name;?>" type="text" class="validate">
		          <label for="last_name">Last Name</label>
					<?php
					if ($errors->has('last_name')){
							echo $errors->first('last_name');}?>
		        </div>
		      </div>
			    <form class="col s6">
			      <div class="row">
			        <div class="input-field col s6">
			          <textarea name="address" class="materialize-textarea"><?php echo $datas->address;?></textarea>
			          <label for="address">Address</label>
			        </div>
							<?php
							if ($errors->has('address')){
									echo $errors->first('address');}?>
			      </div>
			    </form> 
		    </form>
			<input class="waves-effect waves-light btn" type="submit" value="submit">
 	 	</div>
	{!!Form::close()!!}
	
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
{!!Html::script('js/materialize.min.js')!!}
</body>
</html>