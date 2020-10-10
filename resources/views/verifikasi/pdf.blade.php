<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pekerjaan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
 
   
   
</head>
<body>

	<div class="row">
		<div class="col-xs-12">
			<h3>
				<center>
					<b><i> PT. Teknologi Kode Indonesia </i></b>
				</center>
			</h3>
			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<tbody>
					<tr>
						<th>Tanggal Bertugas</th>
						<td>:</td>
						<td>{{ $datas->created_at }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
   
</body>
</html>