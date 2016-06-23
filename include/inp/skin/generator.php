<div style="height: 80%;">
<div class="row">
	<div style="padding-top: 10px"></div>
	<div class="row">
		<div class=""></div>
			<div class="col-md-12">
<!-- 				<div class="col-md-3 col-md-offset-3">
					<select id="typeofdevice" style="display: block;">
						<option selected="">Please select Type</option>
						<option>Input</option>
						<option>Output</option>
					</select>
				</div>
				<div class="col-md-3">
					<select id="deviceofselection" style="display: none;">
						<option selected="">Please select Device</option>
						<option>Device 1</option>
					</select>
				</div>
 -->
 			<div style="text-align: center;">
 				<p>Skin Generated</p>
 				<button id="closedialog">OK</button>
 				<br>
 			</div>
 			</div>
		</div>
<!-- 		<div class="row">
			<div class="container-fluid" id="skinshowhere" style="display: none;">
		        <?php include "skin1.php" ?>
			</div>
		</div>
 -->
 	</div>
</div>
</div>
<script type="text/javascript">
	$("#typeofdevice").change(function(){
        $('#deviceofselection').show();
	});
	$("#deviceofselection").change(function(){
        $('#skinshowhere').show();
	});
	$("#closedialog").click(function(){
		refresh_tree();
		$('#skingenerator').dialog('close');
	});
</script>