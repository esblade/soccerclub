<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Cliente</a></li>
			<li><a href="#">Cadastro</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-content">
				<h4 class="page-header">Cadastrar cliente</h4>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-4">
							<input type="text" id="nomeID" name="nome" class="form-control" placeholder="Nome" data-toggle="tooltip" data-placement="bottom" title="Digite seu nome">
						</div>
						<label class="col-sm-2 control-label">Sobrenome</label>
						<div class="col-sm-4">
							<input type="text" id="sobrenomeID" name="sobrenome" class="form-control" placeholder="Sobrenome" data-toggle="tooltip" data-placement="bottom" title="Digite o sobrenome">
						</div>
					</div>
					<div class="form-group has-success has-feedback">
						<label class="col-sm-2 control-label">Company</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Company">
						</div>
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Address">
							<span class="fa fa-check-square-o txt-success form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Residence</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="City">
							<span class="fa fa-key txt-warning form-control-feedback"></span>
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Country">
							<span class="fa fa-frown-o txt-danger form-control-feedback"></span>
						</div>
						<label class="col-sm-1 control-label">CODE</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Another info" data-toggle="tooltip" data-placement="top" title="Hello world!">
						</div>
						<div class="col-sm-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked> No exist
									<i class="fa fa-square-o small"></i>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Select you OS</label>
						<div class="col-sm-4">
							<select id="s2_with_tag" multiple="multiple" class="populate placeholder">
								<option>Linux</option>
								<option>Windows</option>
								<option>OpenSolaris</option>
								<option>FirefoxOS</option>
								<option>MeeGo</option>
								<option>Android</option>
								<option>Sailfish OS</option>
								<option>Plan9</option>
								<option>DOS</option>
								<option>AIX</option>
								<option>HP/UP</option>
							</select>
						</div>
						<label class="col-sm-2 control-label">Tooltip for inputs</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Another info" data-toggle="tooltip" data-placement="top" title="Hello world!">
						</div>
						<span class="help-inline col-xs-12 col-sm-2">
							<span class="middle txt-default">only example</span>
						</span>
					</div>
					<div class="form-group has-error has-feedback">
						<label class="col-sm-2 control-label">Date</label>
						<div class="col-sm-2">
							<input type="text" id="input_date" class="form-control" placeholder="Date">
							<span class="fa fa-calendar txt-danger form-control-feedback"></span>
						</div>
						<div class="col-sm-2">
							<input type="text" id="input_time" class="form-control" placeholder="Time">
							<span class="fa fa-clock-o txt-danger form-control-feedback"></span>
						</div>
						<label class="col-sm-2 control-label">Disabled input</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="No info" data-toggle="tooltip" data-placement="top" title="Hello world!" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Input groups</label>
						<div class="col-sm-2">
							<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-github-square"></i></span>
							  <input type="text" class="form-control" placeholder="GitHub">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Group">
							  <span class="input-group-addon"><i class="fa fa-group"></i></span>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-money"></i></span>
							  <input type="text" class="form-control" placeholder="Money">
							  <span class="input-group-addon"><i class="fa fa-usd"></i></span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Submit
							</button>
						</div>
						<div class="col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancel
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
