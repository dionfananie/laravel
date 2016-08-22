<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	{!!Html::style('css/materialize.css')!!}
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	@if(Session::has('success'))
		<span style="color:green">{!!Session::get('success')!!}
	@endif
	{!!Form::open(array('url' =>'header/form', 'files'=>true))!!}
		<div class="row">
		    <form class="col s6">
		      <div class="row">
		        <div class="input-field col s3">
		          <input placeholder="Title" name="title" type="text" class="validate">
		          <label for="title ">Title</label>
						<?php
						if ($errors->has('title')){
								echo $errors->first('title');}?>
		       </div>
		        <div class="input-field col s3">
		          <input placeholder="sub_title" name="sub_title" type="text" class="validate">
		          <label for="sub_title">subtitle</label>
					<?php
					if ($errors->has('sub_title')){
							echo $errors->first('sub_title');}?>
		        </div>
		      </div>
			    <form class="col s6">
			      <div class="row">
			        <div class="input-field col s6">
			          <input name="image" class="materialize-textarea" type="file"></input>
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