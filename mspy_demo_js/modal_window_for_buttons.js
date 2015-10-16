/*function for remove phone button*/
function canselLogExportInformation(phone_id)
{
	$("#logs_export_for_remove").css("display", "none");
	$("#logs_export_for_remove").dialog("close");
	document.location.href = '/user.tool.action-reinstall.phone_id-'+phone_id+'.html';
	$("#dont_export_logs").css("display", "none");
}

function reinstallApplication(phone_id, account_type)
{
	if (account_type != "demo")
	{
		showExportFormForRemove();
	}
	else
	{
		alert("Not available in demo");
	}
}

function showExportFormForRemove()
{
	$("#logs_export_for_remove").dialog("open");
	$("#logs_export_for_remove").dialog("option", "title", head_modal1);
	$("#ckecbox_remove").attr("checked", false);
	$("#export_and_remove_logs").attr("disabled", "disabled");
	$("#remove_logs").attr("disabled", "disabled");
}
$(function() {
    $('#logs_export_for_remove').dialog({modal: true, autoOpen: false, width: 450});
});

function logExportInformationForRemove(account_id)
{
	var checkbox_value = "";
	
	$("input[name='logs_export_for_remove']").each(function(){
		if ($(this).attr("checked")){
				checkbox_value = $(this).val();
		}
	});

	if (checkbox_value == "")
	{
		alert("You must select the type of file to export");
		return false;
	}
	else
	{
		var url = "/user.download.format-" + checkbox_value + ".phone_id-" + account_id + ".html"; 
		document.location.href = url + "?export=all&remove_phone=1";
		
		$("input[name='logs_export_for_remove']").each(function(){
			$(this).attr("checked", false);
		});

		$('#logs_export_for_remove').css('display', 'none');
		$('#logs_export_for_remove').dialog('close');
		return true;
	}
}

function showButtonRemove()
{
	
	if ($("#ckecbox_remove").attr("checked") == "checked")
	{
		$("#export_and_remove_logs").attr("disabled", false);
		$("#remove_logs").attr("disabled", false);
	}
	else
	{
		$("#export_and_remove_logs").attr("disabled", "disabled");
		$("#remove_logs").attr("disabled", "disabled");
	}
}

/*function for wipe phone button*/
function showWipePhoneWindow(account_type)
{   
	if (account_type != 'demo')
	{
		$("#wipe_phone_modal_window").dialog("open");
		$("#wipe_phone_modal_window").dialog("option", "title", head_modal2);
		$("#ckecbox_wipe_phone").attr("checked", false);
		$("#wipe_phone_button").attr("disabled", "disabled");
	}
	else
	{
		alert("Not available in demo");
	}
}

$(function() {
    $('#wipe_phone_modal_window').dialog({modal: true, autoOpen: false, width: 550});
});

function showButtonWipePhone()
{
	if ($("#ckecbox_wipe_phone").attr("checked") == "checked")
	{
		$("#wipe_phone_button").attr("disabled", false);
	}
	else
	{
		$("#wipe_phone_button").attr("disabled", "disabled");
	}
}

function sendWipePhone(url)
{
	document.location.href = url;
	$('#wipe_phone_modal_window').css('display', 'none');
	$('#wipe_phone_modal_window').dialog('close');
	return true;
}

/*function for stop app button*/
function showStopAppModalWindow(account_type)
{
	if (account_type != 'demo')
	{
		$("#stop_app_modal_window").dialog("open");
		$("#stop_app_modal_window").dialog("option", "title", head_modal3);
		$("#ckecbox_stop_app").attr("checked", false);
		$("#stop_app_button").attr("disabled", "disabled");
	}
	else
	{
		alert("Not available in demo");
	}
}

$(function() {
    $('#stop_app_modal_window').dialog({modal: true, autoOpen: false, width: 610});
});

function showButtonStopApp()
{
	if ($("#ckecbox_stop_app").attr("checked") == "checked")
	{
		$("#stop_app_button").attr("disabled", false);
	}
	else
	{
		$("#stop_app_button").attr("disabled", "disabled");
	}
}

function sendStopApp(url)
{
	document.location.href = url;
	$('#stop_app_modal_window').css('display', 'none');
	$('#stop_app_modal_window').dialog('close');
	return true;
}

/*function for clear logs button*/
function showClearLogsModalWindow(account_type)
{
	if (account_type != 'demo')
	{
		$("#clear_logs_modal_window").dialog("open");
		$("#clear_logs_modal_window").dialog("option", "title", head_modal5);
		$("#ckecbox_clear_logs").attr("checked", false);
		$("#clear_logs_button").attr("disabled", "disabled");
		$("input[name='type_clear_logs'][value='all']").attr('checked', 'checked');
		disabledClearlogsField();
	}
	else
	{
		alert("Not available in demo");
	}
}

$(function() {
    $('#clear_logs_modal_window').dialog({modal: true, autoOpen: false, width: 350});
});


function showButtonClearLogs()
{
	if ($("#ckecbox_clear_logs").attr("checked") == "checked")
	{
		$("#clear_logs_button").attr("disabled", false);
	}
	else
	{
		$("#clear_logs_button").attr("disabled", "disabled");
	}
}

function sendClearLogs()
{
	var type_clear_logs = "";
	
	$("input[name='type_clear_logs']").each(function(){
		if ($(this).attr("checked")){
			type_clear_logs = $(this).val();
		}
	});
	
	if (type_clear_logs == "")
	{
		alert("You must select the type clear logs");
		return false;
	}
	else
	{
		var date_from = $("#from-date-clear-logs").val();
		var date_to = $("#to-date-clear-logs").val();
		
		if (type_clear_logs != 'all')
		{
			if (date_from != "" && date_to != "")
			{
				$('#form_clear_logs').submit();
			}
			else if (date_from == "")
			{
				alert("You need to enter a start date!!!");
			}
			else if (date_to == "")
			{
				alert("You need to enter an end date!!!");
			}
		}
		else
			$('#form_clear_logs').submit();
	}
}

function disabledClearlogsField()
{
	$("#from-date-clear-logs").attr('disabled', 'disabled');
	$("#to-date-clear-logs").attr('disabled', 'disabled');
	
	$(".clear_logs_element").attr("disabled", "disabled");
	$(".clear_logs_element").attr("checked", "checked");
}

function undisabledClearlogsField()
{
	$("#from-date-clear-logs").attr('disabled', false);
	$("#to-date-clear-logs").attr('disabled', false);
	
	$(".clear_logs_element").attr('disabled', false);
	$(".clear_logs_element").attr("checked", false);
}

/*function for clear logs button*/
function showChangePhoneModalWindow(account_type)
{
	if (account_type != 'demo')
	{
		$("#change_phone_modal_window").dialog("open");
		$("#change_phone_modal_window").dialog("option", "title", head_modal4);
		$("#ckecbox_change_phone").attr("checked", false);
		$("#button_change_phone").attr("disabled", "disabled");
	}
	else
	{
		alert("Not available in demo");
	}
}

$(function() {
    $('#change_phone_modal_window').dialog({modal: true, autoOpen: false, width: 400});
});

function showButtonChangePhone()
{
	if ($("#ckecbox_change_phone").attr("checked") == "checked")
	{
		$("#button_change_phone").attr('disabled', false);
	}
	else
	{
		$("#button_change_phone").attr("disabled", "disabled");
	}
}

function sendChangePhone(url)
{
	document.location.href = url;
	$('#change_phone_modal_window').css('display', 'none');
	$('#change_phone_modal_window').dialog('close');
	return true;
}
