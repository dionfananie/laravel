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
				<td>First Name</td>
				<td>Last Name</td>
				<td>Address</td>
				<td>Action</td>

			</tr>
		</thead>
		</thead>
		<tbody>
			<?php foreach ($datas as $value) {?>
			<tr>
				<td><?php echo $value->first_name;?></td>
				<td><?php echo $value->last_name;?></td>
				<td><?php echo $value->address ;?></td>			
				<td><a href="<?php echo url('edit'); ?>/<?php echo $value->id; ?>">Edit</a> |<a href="<?php echo url('delete');?>/<?php echo $value->id; ?>"> Delete </a></td>
			</tr>
			<?php }?>
		</tbody>


	</table>

	<br>

	<a class="waves-effect waves-light btn" href="<?php echo url('form'); ?>"> Back to Form </a>

	
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	{!!Html::script('js/materialize.min.js')!!}
</body>
</html>