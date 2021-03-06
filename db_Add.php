<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple-ConnectDB</title>
<?php

require_once 'includes/db_Config.php';
if (empty($dbCanAdd))$dbCanAdd = 0;
if ($dbCanAdd == 1){

require_once 'includes/db_Language.php';
require_once 'includes/db_Connection.php';
$db_Page = 'db_Add';
require_once 'includes/db_Functions.php';
?>
<!-- jquery -->
<script type='text/javascript' src='assets/jquery/jquery-1.9.1.min.js'></script>
<script type='text/javascript' src='assets/jquery/jquery-migrate-1.1.1.js'></script>

<!-- momentjs -->
<script src="assets/momentjs/moment.min.js"></script>

<!-- select2 -->
<link href="assets/select2/select2.css" rel="stylesheet">
<script src="assets/select2/select2.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- bootstrap -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script src="assets/bootstrap/js/bootstrap.js"></script>

<!-- bootstrap modal-->
<link href="assets/model/css/bootstrap-modal.css" rel="stylesheet">
<script src="assets/model/js/bootstrap-modalmanager.js"></script>
<script src="assets/model/js/bootstrap-modal.js"></script>

<!-- x-editable (bootstrap) -->
<link href="assets/x-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
<script src="assets/x-editable/bootstrap-editable/js/bootstrap-editable.js"></script>

<!-- wysihtml5 -->
<link href="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">

<script src="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js"></script>
<script src="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.min.js"></script>
<script src="assets/x-editable/inputs-ext/wysihtml5//wysihtml5.js"></script>

</script>
<style type="text/css">
.tablesorter-filter.disabled {
    display: none;
}
.editfieldname {
	width:155px;
	text-align: right;
	font: bold 13px/20px Arial, Sans-serif;
}


		.main {
			border: <?php echo $cssTheme ?> 0px solid;
			padding: 5px 5px 5px 5px ;
			margin: 5px 5px 5px 5px ;
			border-radius: .5em;
			-moz-border-radius: .5em;
			-webkit-border-radius: .5em;
			background: <?php echo $cssTheme ?>;
			min-width:400px;
		}

		.contents {
			border: <?php echo $cssTheme ?> 0px solid;
			padding: 5px 5px 5px 5px ;
			margin: 5px 5px 5px 5px ;
			border-radius: .5em;
			-moz-border-radius: .5em;
			-webkit-border-radius: .5em;
			background: #eeeeee;
			min-width:400px;
		}
		.fieldname{
			border: <?php echo $cssTheme ?> 1px solid;
		    background: #eee;
		    width:25%;
		    text-align: right;
			padding: 0px 5px 0px 5px ;
			font: bold 13px/20px Arial, Sans-serif;
	      }
        .fieldvalue{
		    background: #fff;
		     width:50%;
		     font: .8em Arial, Sans-serif;
        }


	</style>
</head>
    <body>
<?php
if (empty($strRequired)){
$strRequired = '';
	for ($i=0; $i<=$intFieldCount-1; $i++ ) {
       $strRequired .= '0';
    }
}

if (empty($strFieldType)){
	$strFieldType ='';
	for ($i=0; $i<=$intFieldCount-1; $i++ ) {
		$strFieldType .= 'text,';
	}
}
if(empty($appTitle))$appTitle = $db_Table;

?>

<!-- ADD VIEW/EDIT RECORD FORM ---->
<div  class="main">
<div class="contents">
 	<div id="msg" class="alert hide"></div>
	<h3><?php echo $txtAddNew . " " . $appTitle ?></h3>
       <div style="float: right; margin-bottom: 10px">
            <label style="display: inline-block; margin-right: 50px"><input type="checkbox" id="autoopen" style="vertical-align: baseline">&nbsp;auto-open next field</label>
            <button id="enable" class="btn"><?php echo $txtEnableButton ?></button>
   			</div>
	<table id="editform" class="table table-bordered table-striped">
		<tbody>
		    <?php

			$FieldType = explode(',',$strFieldType);
			$record = DB::queryFirstRow("SELECT * FROM $db_Table");
			$columns = DB::columnList($db_Table);
			$count = count($columns);
			for ($i=0; $i<=$count-1; $i++ ) {
					if (substr($strDisplayAdd,$i,1) == 1 || substr($strDisplayAdd,$i,1) == 2){
						if (substr($strRequired,$i,1) == 1){
							$required = "<font color='red'>*</font>";
						}
						else
						{
							$required = '';
						}


						echo '<tr><td class="editfieldname">'. $arrFieldNames[$i] .': ' . $required . '</td>';
						//echo '<td><a href="#" class="myeditable" id="'. $columns[$i]  .'" ></a></td>';
						echo '<td><a href="#" class="myeditable" id="'. $columns[$i]  .'" data-type="' . $FieldType[$i]. '" data-name="'. $columns[$i]  .'" data-original-title="Enter '. $columns[$i]  .'"></a></td>';
						echo '<td>' . $FieldType[$i]. '</td></tr>';
					}
			}
			?>
		</tbody>
    </table>
<?php
echo"<script>";
		// Skip the ID Field so start w/1 which is the 2nd field in the row
		for ($i=1; $i<=$count-1; $i++) {
			if (substr($strDisplayAdd,$i,1) == 1 || substr($strDisplayAdd,$i,1) == 2){
				   	if (substr($strDisplayAdd,$i,1) == '1')$mode='popup';
					if (substr($strDisplayAdd,$i,1) == '2')$mode='inline';
					?>
$('#<?php echo $columns[$i]?>').editable({
				mode: '<?php echo $mode ?>',
				type: '<?php echo $FieldType[$i] ?>',
				url: 'new.php',
				name:'<?php echo $arrFieldNames[$i] ?>',

				<?php
				if ($FieldType[$i] == 'textarea'){
				?>
				rows: <?php echo $TextareaRows[$i] ?>,
				<?php
				}
				if (!empty($strPopupPlacement)){

					if (substr($strPopupPlacement,$i,1) == 0)$placement = "top";
					if (substr($strPopupPlacement,$i,1) == 1)$placement = "right";
					if (substr($strPopupPlacement,$i,1) == 2)$placement = "bottom";
					if (substr($strPopupPlacement,$i,1) == 3)$placement = "left";
				}
				if (empty($placement))$placement = "top";
				?>
				placement: '<?php echo $placement ?>',
				<?php
				if ($FieldType[$i] == 'combodate'){
					if (!empty($DateType[$i]) && $DateType[$i] == 'combodate'){

						if (!empty($DateFormat[$i])){
						?>
						format: '<?php echo $DateFormat[$i] ?>',
						<?php
						} // End if DateFormat

						if (!empty($ComboDateTemplate[$i])){
						?>
							template: '<?php echo $ComboDateTemplate[$i] ?>',
						 <?php
						 } // End if DateComdoTemplate
						 ?>
							combodate: {
							firstItem: 'name',
							<?php
							if (!empty($ComboDateMinYear[$i])){
							?>
								minYear: '<?php echo $ComboDateMinYear[$i] ?>',
							<?php
							} // End minYear

							if (!empty($ComboDateMaxYear[$i])){
							?>
								maxYear: '<?php echo $ComboDateMaxYear[$i] ?>',
							<?php
							} // End maxYear

							if (!empty($ComboTimeMinuteStep[$i])){
							?>
								minuteStep: <?php echo $ComboTimeMinuteStep[$i] ?>,
							<?php
							} // End if TimeComboMinuteStep
							?>
						},
				<?php
					} // End DateType = combodate
				} // End FieldType combodate

				if ($FieldType[$i] == 'date'){
					if (!empty($DateType[$i]) && $DateType[$i] == 'date'){

					if (!empty($DateFormat[$i])){
					?>
					format: '<?php echo $DateFormat[$i] ?>',
						<?php
					} // End if DateFormat
					?>
						    datepicker: {
						    <?php
						    if (!empty($DateWeekStart[$i])){
						    ?>
					        weekStart: <?php echo $DateWeekStart[$i] ?>,
					        <?php
					        }



						    if (!empty($DateStartDate[$i])){
						    ?>
					        startDate: '<?php echo $DateStartDate[$i] ?>',
					        <?php
					        }

						    if (!empty($DateEndDate[$i])){
						    ?>
					        endDate: '<?php echo$DateEndDate[$i] ?>',
					        <?php
					        }

						    if (!empty($DateWeekDaysDisabled[$i])){
						    ?>
					        daysOfWeekDisabled: [<?php echo $DateWeekDaysDisabled[$i] ?>],
					        <?php
					        }

						    if (!empty($DateStartView[$i])){
						    ?>
					        startView: <?php echo $DateStartView[$i] ?>,
					        <?php
					        }
					        ?>
							todayBtn: false,
							clear: true,
					    },

					<?php
					} // End DateType = date
				} // End if FieldType date
				if(!empty($arrSelect2[$i])){
			?>
				select2: {
					tags: <?php echo $arrSelect2[$i] ?>,
					<?php
					if(!empty($AutoTokenSeparators2[$i])){
					?>
					tokenSeparators: <?php echo $AutoTokenSeparators2[$i] ?>,
					<?php
					}
					if(!empty($MaxSelectionSize2[$i])){
					?>
					maximumSelectionSize: <?php echo $MaxSelectionSize2[$i] ?>,
					<?php
					}
					if(!empty($MinInputLength2[$i])){
					?>
					minimumInputLength: <?php echo $MinInputLength2[$i] ?>,
					<?php
					}
					if(!empty($MaxInputLength2[$i])){
					?>
					maximumInputLength: <?php echo $MaxInputLength2[$i] ?>,
					<?php
					}
					if(!empty($CustomMatcher2[$i])){
					?>
					matcher: function(term, text) { return text.toUpperCase().indexOf(term.toUpperCase())==0; },
					<?php
					}
					?>
					},
					<?php
					}
					if(!empty($FieldType[$i]) && $FieldType[$i] == 'checklist'){
					}
					if(!empty($FieldType[$i]) && $FieldType[$i] == 'password'){
					}
					if(empty($FieldType[$i]) || empty($FieldType[$i])){
					}
					?>
					title: 'Enter <?php echo $arrFieldNames[$i] ?>',
					<?php
					if(!empty($arrSelect[$i])){
					?>
					source: "<?php echo $arrSelect[$i] ?>",
					<?php
					}
					if(!empty($arrSelectgroups[$i])){
					?>
					source: "<?php echo $arrSelectgroups[$i] ?>",
					<?php
					}
					if (substr($strRequired,$i,1) == 1){
					?>
					validate: function(value) {
					if($.trim(value) == '') return 'This field is required';
					}
				<?php
				}
				?>
			});
<?php
}
}

echo"</script>";
?>


    <div>
    <button id="save-btn" class="btn btn-primary">Save new user!</button>
 	<a href="javascript:parent.jQuery.fancybox.close();" class="btn">Close</a>
      <button id="reset-btn" class="btn pull-right">Reset</button>
    </div>
 </div>
</div>

<script type="text/javascript">
$(function(){

    $('.myeditable').editable({
		 url: 'new.php',
		 mode: 'inline'
    });


   $('#save-btn').click(function() {
       $('.myeditable').editable('submit', { //call submit
           url: 'new.php', //url for creating new user
           success: function(data) {
               var msg = 'New user created! CLOSE WINDOW.';
               $('#msg').addClass('alert-success').removeClass('alert-error')
               .html(msg).show();
               $('#save-btn').hide();
               $('#editform .editable').editable('toggleDisabled');
           },
           error: function(data) {
               var msg = '';
               if(data.errors) { //validation error
                   $.each(data.errors, function(k, v) { msg += k+": "+v+"<br>"; });
               } else if(data.responseText) { //ajax error
                   msg = data.responseText;
               }
               $('#msg').removeClass('alert-success').addClass('alert-error')
               .html(msg).show();
           }
       });
   });

   $('#editform .editable').on('hidden', function(e, reason){
        if(reason === 'save' || reason === 'nochange') {
            var $next = $(this).closest('tr').next().find('.editable');
            if($('#autoopen').is(':checked')) {
                setTimeout(function() {
                    $next.editable('show');
                }, 300);
            } else {
                $next.focus();
            }
        }
   });

    //enable / disable
   $('#enable').click(function() {
       $('#editform .editable').editable('toggleDisabled');
   });

	$('#reset-btn').click(function() {
		$('.myeditable').editable('setValue', null)  //clear values
			.editable('option', 'pk', null)          //clear pk
			.removeClass('editable-unsaved');        //remove bold css

		$('#save-btn').show();
		$('#msg').hide();
	});




});
</script>

<?php
}
else
{
?>
<style type="text/css">

		.main {
			border: #000000 0px solid;
			padding: 5px 5px 5px 5px ;
			margin: 5px 5px 5px 5px ;
			border-radius: .5em;
			-moz-border-radius: .5em;
			-webkit-border-radius: .5em;
			background: red;
			min-width:400px;
		}

		.contents {
			border: #000000 ?> 0px solid;
			padding: 5px 5px 5px 5px ;
			margin: 5px 5px 5px 5px ;
			border-radius: .5em;
			-moz-border-radius: .5em;
			-webkit-border-radius: .5em;
			background: #eeeeee;
			min-width:400px;
		}

</style>

</head>
<body>

<div  class="main">
<div class="contents">


<?php

echo "<h1><center>This feature is turned off in Demo Mode</center></h1>"."<br>";
?>
 	<a href="javascript:parent.jQuery.fancybox.close();" class="btn">Close</a>

</>
</div>
<?php
}

?>


</body>
</html>









