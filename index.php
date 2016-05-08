<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

		
		<!-- JS -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	</head>
	<body>
		
		<div class="container">
			<h2>All DateTime Format</h2><br/>
				
			<div class="row">
				<div class='col-sm-10'>
					<div class="form-group">
						<label class="control-label col-sm-3">Custom Year.Month.Day(2016.03.24):</label>
						<div class='input-group date' id='datetimepicker12'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar">
								</span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Custom Year Month(2016-03):</label>
						<div class='input-group date' id='datetimepicker11'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar">
								</span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Min View Mode(03/2016):</label>
						<div class='input-group date' id='datetimepicker10'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar">
								</span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Custom Time Formats(1:33 PM):</label>
						<div class='input-group date' id='datetimepicker3'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Minimum Setup(03/24/2016 1:32 PM):</label>
						<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Using Locales(24.03.2016 13:33):</label>
						<div class='input-group date' id='datetimepicker2'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">No Icon (input field only & 03/24/2016 1:34 PM):</label>
						<div class='input-group date' id='datetimepicker3'>
							<input type='text' class="form-control" id='datetimepicker4' />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Enabled/Disabled Dates:</label>
						<div class='input-group date' id='datetimepicker5'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Custom Icons(03/24/2016 1:34 PM):</label>
						<div class='input-group date' id='datetimepicker8'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="fa fa-calendar">
								</span>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">View Mode(03/24/2016 1:35 PM):</label>
						<div class='input-group date' id='datetimepicker9'>
							<input type='text' class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar">
								</span>
							</span>
						</div>
					</div>
					
					
					
				</div>
				<script type="text/javascript">
					
					$(function () {
						
						// Cusatom Year Month Day
						$('#datetimepicker12').datetimepicker({
							//viewMode: 'years',
							format: 'YYYY.MM.DD'
						});
						
						// Cusatom Year Month
						$('#datetimepicker11').datetimepicker({
							viewMode: 'years',
							format: 'YYYY-MM'
						});
						
						// Min View Mode
						$('#datetimepicker10').datetimepicker({
							viewMode: 'years',
							format: 'MM/YYYY'
						});
						
						// Custom Time Formats
						$('#datetimepicker3').datetimepicker({
							format: 'LT'
						});
						
						
						// Minimum Setup
						$('#datetimepicker1').datetimepicker();
						
						// Using Locales
						$('#datetimepicker2').datetimepicker({
							locale: 'ru'
						});
						
						// No Icon (input field only)
						$('#datetimepicker4').datetimepicker();
						
						// Enabled/Disabled Dates
						$('#datetimepicker5').datetimepicker({
							defaultDate: "11/1/2013",
							disabledDates: [
								moment("12/25/2013"),
								new Date(2013, 11 - 1, 21),
								"11/22/2013 00:53"
							]
						});
						
						// Custom Icons
						$('#datetimepicker8').datetimepicker({
							icons: {
								time: "fa fa-clock-o",
								date: "fa fa-calendar",
								up: "fa fa-arrow-up",
								down: "fa fa-arrow-down"
							}
						});
						
						// View Mode
						$('#datetimepicker9').datetimepicker({
							viewMode: 'years'
						});
						
						
						
						
						
						
		
					});
					
				</script>
			</div>
		</div>
		
	</body>
</html>