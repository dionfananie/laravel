<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Data</title>
	{!!Html::style('css/materialize.css')!!}
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	@if(Session::has('updatemsg'))
	
		<span style="color:green">{!!Session::get('updatemsg')!!}</span>
	
	@endif

	@if(Session::has('deletemsg'))
	
		<span style="color:red">{!!Session::get('deletemsg')!!}</span>
	
	@endif

	<table class="bordered">
		<thead>
			<tr>
				<td>Title</td>
				<td>Subtitle</td>
				<td>Image</td>
				<td>Action</td>

			</tr>
		</thead>
		</thead>
		<tbody>
			<?php foreach ($datas as $value) {?>
			<tr>
				<td><?php echo $value->title;?></td>
				<td><?php echo $value->sub_title;?></td>
				<td><img src="<?php echo url('uploads/logo')?>/<?php echo $value->image?>" width="100px"></td>

				<td><a href="<?php echo url('header/edit'); ?>/<?php echo $value->id; ?>">Edit</a> |<a href="<?php echo url('header/delete');?>/<?php echo $value->id; ?>"> Delete </a></td>
			</tr>
			<?php }?>
		</tbody>


	</table>

	<br>

	<a class="waves-effect waves-light btn" href="<?php echo url('header/form'); ?>"> Back to Form </a>

	
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	{!!Html::script('js/materialize.min.js')!!}
</body>
</html>