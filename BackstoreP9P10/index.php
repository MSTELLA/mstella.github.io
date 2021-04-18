<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Display XML File using PHP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Display XML File using PHP</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-bordered table-striped">
				<thead>
					<th>UserID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
				</thead>
				<tbody>
					<?php
					//load xml file
					$file = simplexml_load_file('files/members.xml');

					foreach($file->user as $row){
						?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->firstname; ?></td>
							<td><?php echo $row->lastname; ?></td>
							<td><?php echo $row->address; ?></td>
						</tr>
						<?php
					}
		
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>