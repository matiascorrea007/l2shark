var ie4 = document.all;
var ns6 = document.getElementById && !document.all;
//**********************************************************
function confirm_proc(url, msg) {
	if (confirm(msg))
		window.location.href = url;
}
//**********************************************************
function elShowHide(id, speed) {
	if (document.getElementById(id).style.display == 'none') {
		if (typeof(speed) != "undefined")
			$("#"+id).show(speed);
		else
			$("#"+id).show();
	}
	else {
		if (typeof(speed) != "undefined")
			$("#"+id).hide(speed);
		else
			$("#"+id).hide();
	}
}
//**********************************************************
function selectInput(object, name, startTitle, startValue, formName, width) {
	if (object.substring(0, 3) == 'wi_') {
		this.obj = object.substring(3);
		this.outId = object;
	} else {
		this.obj = object;
		this.outId = false;
	}

	this.name = name;
	this.startTitle = startTitle;
	this.startValue = startValue;
	this.formName = formName;
	this.width = width;
	this.iList = [];
	this.iList2 = [];
	this.timer = null;
}
selectInput.prototype.add = function(discription, value, javascript) {
	this.iList[this.iList.length] = Array(discription, value, javascript);
}
selectInput.prototype.add2 = function(discription, value, javascript) {
	this.iList2[this.iList2.length] = Array(discription, value, javascript);
}
selectInput.prototype.timerReset = function() {
	clearTimeout(this.timer);
	this.timer = setTimeout("$(\"#selectinput_"+this.obj+"\").hide()", 500);
}
selectInput.prototype.timerStop = function() {
	clearTimeout(this.timer);
}
selectInput.prototype.click = function(txt, value) {
	$("#selectinput_"+this.obj).hide();
	$("#selectinput_title_"+this.obj).text(txt);
	$("#selectinput_input_"+this.obj).attr({value: ""+value+""});

	if (this.formName != '')
		eval("document."+this.formName+".submit();");
}
selectInput.prototype.reloadArr = function() {
	this.iList2 = [];
}
selectInput.prototype.construct = function() {
	if (this.iList.length > 10) {
		var div_scroll = 'height: 200px; overflow: auto; ';
	} else {
		var div_scroll = '';
	}

	var output = '<div style="margin:1px 0px 1px 0px; padding:0px; cursor:pointer; width:'+this.width+'px; z-index:500;" onclick="elShowHide(\'selectinput_'+this.obj+'\', 300);" onmouseover="'+this.obj+'.timerStop();" onmouseout="'+this.obj+'.timerReset();">'
	+ '<table border="0" cellpadding="0" cellspacing="1" height="16" width="100%"><tr>'
	+ '<td style="padding: 0px 5px 0px 5px;"><div id="selectinput_title_'+this.obj+'" style="color:#cccccc;font: bold 10px Verdana;">'+this.startTitle+'</div></td>'
	+ '<td width="16" style="margin-top: 2px;"><img alt="Open select menu" src="Images/Misc/select.png" border="0" height="16" width="16"></td>'
	+ '</tr></table>'
	+ '</div>'
	+ '<input type="hidden" id="selectinput_input_'+this.obj+'" name="'+this.name+'" value="'+this.startValue+'">'
	+ '<div id="selectinput_'+this.obj+'" style="margin:1px 0px 0px 0px; padding:0px; z-index:500; display:none; width:'+this.width+'px; position:absolute;" onmouseover="'+this.obj+'.timerStop();" onmouseout="'+this.obj+'.timerReset();">'
	+ '<div style="'+div_scroll+'border: 1px solid #ffe6cb;"><table border="0" cellpadding="0" cellspacing="3" width="100%" style="background-color: #584539;">';

	for (i = 0; i < this.iList.length; i++) {
		output += '<tr><td style="color:#cccccc;padding:3px; cursor:pointer;" onmouseover="$(this).css({ background: \'#47382e\', border: \'1px solid #ffe6cb\', padding: \'2px\' });" onmouseout="$(this).css({ background: \'#584539\', border: \'0px\', padding: \'3px\' });" onclick="'+this.obj+'.click(\''+this.iList[i][0]+'\',\''+this.iList[i][1]+'\');'+this.iList[i][2]+'">'+this.iList[i][0]+'</td></tr>';
	}

	for (i = 0; i < this.iList2.length; i++) {
		output += '<tr><td style="color:#cccccc;padding:3px; cursor:pointer;" onmouseover="$(this).css({ background: \'#47382e\', border: \'1px solid #ffe6cb\', padding: \'2px\' });" onmouseout="$(this).css({ background: \'#584539\', border: \'0px\', padding: \'3px\' });" onclick="'+this.obj+'.click(\''+this.iList2[i][0]+'\',\''+this.iList2[i][1]+'\');'+this.iList2[i][2]+'">'+this.iList2[i][0]+'</td></tr>';
	}

	output += '</table></div></div>';

	if (!this.outId)
		document.write(output);
	else
		$("#"+this.outId).html(output);
}
//**********************************************************
function forum_textarea(form, input_name, smiles_arr, value) {
	if (form.substring(0, 3) == 'wi_') {
		var outId = form;
		form = form.substring(3);
	} else {
		var outId = false;
	}

	var smiles = '<table cellspacing="0" cellpadding="0" border="0" align="center"><tr>';
	var n = 0;

	for (el in smiles_arr) { /* smiles_arr[el][0] */
		smiles += ((n % 12) == 0 && n != 0) ? '</tr><tr>' : '';
		n++;
		smiles += '<td style="padding:3px;border:0;"><a class="opacity"><img alt="'+smiles_arr[el][0]+'" onclick="textareaInsert(\''+smiles_arr[el][0]+'\',document.forms.'+form+'.'+input_name+'); $(\'#'+form+'_postsmiles\').hide();" src="'+smiles_arr[el][1]+'"></a></td>';
	}

	smiles += '</tr></table>';

	var output = '<table cellspacing="0" cellpadding="0" border="0" style="width:100%;padding:10px;" class="tdef">'
	+ '<tr><td>'
	+ '<input type="button" value="B" class="text-form" style="height : 20px;width:25px; font-size:9px; font-weight:bold;" onclick="bbTag(\'[b]\',\'[/b]\',document.forms.'+form+'.'+input_name+');">&nbsp;'
	+ '<input type="button" value="I" class="text-form" style="height : 20px;width:25px; font-size:9px; font-style:italic;" onclick="bbTag(\'[i]\',\'[/i]\',document.forms.'+form+'.'+input_name+');">&nbsp;'
	+ '<input type="button" value="U" class="text-form" style="height : 20px;width:25px; font-size:9px; text-decoration:underline;" onclick="bbTag(\'[u]\',\'[/u]\',document.forms.'+form+'.'+input_name+');">&nbsp;'

	+ '<select style="height : 20px;" name="color" onchange="bbTag(\'[color=\'	+	this.form.color.options[this.form.color.selectedIndex].value	+	\']\',	\'[/color]\',document.forms.'+form+'.'+input_name+');this.form.color.selectedIndex	=	2;">'
	+ '<option value="blue" 	style="color : blue;">Blue</option>'
	+ '<option value="gray" 	style="color : gray;">Gray</option>'
	+ '<option value="green" 	style="color : green;">Green</option>'
	+ '<option value="purple" 	style="color : purple;">Purple</option>'
	+ '<option value="red" 		style="color : red;">Red</option>'
	+ '<option value="white" 	style="color : white;">White</option>'
	+ '<option value="yellow" 	style="color : yellow;">Yellow</option>'
	+ '</select>&nbsp;'

	+ '<select style="height : 20px;" name="size" onchange="bbTag(\'[size=\'	+	this.form.size.options[this.form.size.selectedIndex].value	+	\']\',	\'[/size]\',document.forms.'+form+'.'+input_name+');this.form.size.selectedIndex	=	2;">'
	+ '<option value="8"	style="font-size: 7px;">1</option>'
	+ '<option value="10"	style="font-size: 9px;">2</option>'
	+ '<option value="12"	style="font-size: 11px;" selected="selected">3</option>'
	+ '<option value="14"	style="font-size: 13px;">4</option>'
	+ '<option value="16"	style="font-size: 15px;">5</option>'
	+ '<option value="18"	style="font-size: 17px;">6</option>'
	+ '<option value="20"	style="font-size: 19px;">7</option>'
	+ '</select>&nbsp;'
	
	+ '<input type="button" value="http://" class="text-form" style="height : 20px;width:40px; font-size:9px;" onclick="bbTag(\'[url]\',\'[/url]\',document.forms.'+form+'.'+input_name+');">&nbsp;'
	+ '<input type="button" value="Quote" class="text-form" style="height : 20px;width:40px; font-size:9px;" onclick="bbTag(\'[quote]\',\'[/quote]\',document.forms.'+form+'.'+input_name+');">&nbsp;'
	+ '<input type="button" value="Image" class="text-form" style="height : 20px;width:40px; font-size:9px;" onclick="bbTag(\'[img]\',\'[/img]\',document.forms.'+form+'.'+input_name+');">&nbsp;'
	+ '<input type="button" value=":D" class="text-form" style="height : 20px;width:25px; font-size:9px;" onclick="elShowHide(\''+form+'_postsmiles\');">'
	+ '</td><td align="right">'

	+ '<div align="center"><input type="button" value="+" class="text-form" style="height : 20px;width:25px; font-size:9px; font-weight:bold;" onclick="$(\'#jsta_'+input_name+'\').height($(\'#jsta_'+input_name+'\').height()+50);">'
	+ '&nbsp;<input type="button" value="-" class="text-form" style="height : 20px;width:25px; font-size:9px; font-weight:bold;" onclick="$(\'#jsta_'+input_name+'\').height($(\'#jsta_'+input_name+'\').height()-50);"></div>'

	+ '</td></tr><tr><td colspan="2" id="'+form+'_postsmiles" style="display:none;">'+smiles+'</td></tr>'

	+ '<tr><td colspan="2" align="center">'
	+ '<textarea onkeyup="storeCaret(this);" onclick="text-count" name="'+input_name+'" id="jsta_'+input_name+'" id="text-count" rows="7" style="width:98%;" onchange="storeCaret(this);" onselect="storeCaret(this);">'+value+'</textarea>'
	+ '<br><span id="count"></span></td></tr></table>';

	if (!outId)
		document.write(output);
	else
		$("#"+outId).html(output);
}
//**********************************************************
function caBox(object, loader) {
	this.obj = object;
	this.pList = [];
	this.currentUrl = '';
	this.loader = loader;
}
caBox.prototype.add = function(name, link) {
	this.pList[this.pList.length] = Array(name, link);
}
caBox.prototype.mhhover = function(action, id) {
	if (document.getElementById(this.obj+'_cabox_hm'+id).className != 'selected') {
		if (action)
			document.getElementById(this.obj+'_cabox_hm'+id).className = 'hover';
		else
			document.getElementById(this.obj+'_cabox_hm'+id).className = '';
	}
}
caBox.prototype.loadPage = function(url) {
	if (this.loader) {
		$("#"+this.obj+"_cabox_pc").html("<div align=\"center\"><div id=\""+this.obj+"_loader\" style=\"padding:7px; width:235px; height:40px; display:block;\"><b>Please wait! Loading...</b><br /><br /><img border=\"0\" src=\"Images/Misc/loading.gif\"></div></div>");

		$("#"+this.obj+"_cabox_pc").load(url, function() {
			$("#"+this.obj+"_loader").remove();
		});
	} else {
		$("#"+this.obj+"_cabox_pc").load(url);
	}
	this.currentUrl = url;
}
caBox.prototype.click = function(id) {
	if (document.getElementById(this.obj+'_cabox_hm'+id).className != 'selected')
	{
		for (i = 0; i < this.pList.length; i++) {
			if (i == id)
				document.getElementById(this.obj+'_cabox_hm'+i).className = 'selected';
			else
				document.getElementById(this.obj+'_cabox_hm'+i).className = '';
		}

		this.loadPage(this.pList[id][1]);

		var urls = window.location.href.split("#");
		window.location.href = urls[0] + '#cb_' + id;
	}
}
caBox.prototype.clearMenu = function() {
		for (i = 0; i < this.pList.length; i++) {
				document.getElementById(this.obj+'_cabox_hm'+i).className = '';
		}
}
caBox.prototype.construct = function() {
	var output = '<div class="dynamic-tab"><div class="tab-row">';

	for (i = 0; i < this.pList.length; i++) {
		if (i == 0)
			output += '<div id="'+this.obj+'_cabox_hm'+i+'" class="selected" onclick="'+this.obj+'.click(\''+i+'\');" onmouseover="'+this.obj+'.mhhover(true, \''+i+'\');" onmouseout="'+this.obj+'.mhhover(false, \''+i+'\');">'+this.pList[i][0]+'</div>';
		else
			output += '<div id="'+this.obj+'_cabox_hm'+i+'" onclick="'+this.obj+'.click(\''+i+'\');" onmouseover="'+this.obj+'.mhhover(true, \''+i+'\');" onmouseout="'+this.obj+'.mhhover(false, \''+i+'\');">'+this.pList[i][0]+'</div>';
	}

	output += '</div><div id="'+this.obj+'_cabox_pc" style="width: 100%;"></div></div>';

	document.write(output);

	var testp = window.location.href.split("#cb_");

	if (typeof(testp[1]) != "undefined" && typeof(this.pList[testp[1]]) != "undefined") {
		for (i = 0; i < this.pList.length; i++) {
			if (i == testp[1])
				document.getElementById(this.obj+'_cabox_hm'+i).className = 'selected';
			else
				document.getElementById(this.obj+'_cabox_hm'+i).className = '';
		}
		this.loadPage(this.pList[testp[1]][1]);
	} else {
		this.loadPage(this.pList[0][1]);
	}
}
caBox.prototype.construct2 = function() {
	var output = '<div class="dynamic-tab"><div class="tab-row">';

	for (i = 0; i < this.pList.length; i++) {
		if (this.pList[i][1] == 'selected')
			output += '<div id="'+this.obj+'_cabox_hm'+i+'" class="selected">'+this.pList[i][0]+'</div>';
		else
			output += '<div id="'+this.obj+'_cabox_hm'+i+'" onclick="window.location.href = \''+this.pList[i][1]+'\';" onmouseover="'+this.obj+'.mhhover(true, \''+i+'\');" onmouseout="'+this.obj+'.mhhover(false, \''+i+'\');">'+this.pList[i][0]+'</div>';
	}

	output += '</div></div>';

	document.write(output);
}
//**********************************************************
function textareaInsert(txt,textarea) {
	// Attempt to create a text range (IE)
	if (typeof(textarea.caretPos) != "undefined" && textarea.createTextRange) {
		var caretPos = textarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? txt + ' ' : txt
		caretPos.select();
	}
	// Mozilla text range replace
	else if (typeof(textarea.selectionStart) != "undefined") {
		var begin = textarea.value.substr(0, textarea.selectionStart);
		var end = textarea.value.substr(textarea.selectionEnd);
		var scrollPos = textarea.scrollTop;

		textarea.value = begin + txt + end;

		if (textarea.setSelectionRange) {
			textarea.focus();
			textarea.setSelectionRange(begin.length + txt.length, begin.length + txt.length);
		}
		textarea.scrollTop = scrollPos;
	}
	// Just put it on the end
	else {
		textarea.value += txt;
		textarea.focus(textarea.value.length - 1);
	}
}
//**********************************************************
function storeCaret(text) {
	if (typeof(text.createTextRange) != "undefined")
		text.caretPos = document.selection.createRange().duplicate();
}
function bbTag(opentag, closetag, textarea){
    // Can a text range be created?
    if (typeof(textarea.caretPos) != "undefined" && textarea.createTextRange)
    {
        var caretPos = textarea.caretPos, temp_length = caretPos.text.length;

        caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? opentag + caretPos.text + closetag + ' ' : opentag + caretPos.text + closetag;

        if (temp_length == 0)
        {
            caretPos.moveStart("character", -closetag.length);
            caretPos.moveEnd("character", -closetag.length);
            caretPos.select();
        }
        else
            textarea.focus(caretPos);
    }
    // Mozilla text range wrap.
    else if (typeof(textarea.selectionStart) != "undefined")
    {
        var begin = textarea.value.substr(0, textarea.selectionStart);
        var selection = textarea.value.substr(textarea.selectionStart, textarea.selectionEnd - textarea.selectionStart);
        var end = textarea.value.substr(textarea.selectionEnd);
        var newCursorPos = textarea.selectionStart;
        var scrollPos = textarea.scrollTop;

        textarea.value = begin + opentag + selection + closetag + end;

        if (textarea.setSelectionRange)
        {
            if (selection.length == 0)
                textarea.setSelectionRange(newCursorPos + opentag.length, newCursorPos + opentag.length);
            else
                textarea.setSelectionRange(newCursorPos, newCursorPos + opentag.length + selection.length + closetag.length);
            textarea.focus();
        }
        textarea.scrollTop = scrollPos;
    }
    // Just put them on the end, then.
    else
    {
        textarea.value += opentag + closetag;
        textarea.focus(textarea.value.length - 1);
    }
}