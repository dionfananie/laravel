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

	{!!Form::open(array('url' =>['header/update', $datas->id], 'files'=>true))!!}

		<div class="row">

			@if(Session::has('updatemsg'))
			
				<span style="color:green">{!!Session::get('updatemsg')!!}
			
			@endif
		    <form class="col s6">
		      <div class="row">
		        <div class="input-field col s3">
		          <input placeholder="Title" name="title" value="<?php echo $datas->title?>" type="text" class="validate">
		          <label for="title">Title</label>
						<?php
						if ($errors->has('title')){
								echo $errors->first('title');}?>
		        </div>
		        <div class="input-field col s3">
		          <input placeholder="Subtitle" name="sub_title" value="<?php echo $datas->sub_title;?>" type="text" class="validate">
		          <label for="sub_title">Subtitle</label>
					<?php
					if ($errors->has('sub_title')){
							echo $errors->first('sub_title');}?>
		        </div>
		      </div>
			    <form class="col s6">
			      <div class="row">
			        <div class="input-field col s6">
			          <input type="file" name="image">
			          <img src="<?php echo url('uploads/logo')?>/<?php echo $datas->image;?>" width="100px">
			        </div>
							<?php
							if ($errors->has('image')){
									echo $errors->first('image');}?>
			      </div>
			    </form> 
		    </form>
			<input class="waves-effect waves-light btn" type="submit" value="Update">
 	 	</div>
	{!!Form::close()!!}
	
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
{!!Html::script('js/materialize.min.js')!!}
</body>
</html>