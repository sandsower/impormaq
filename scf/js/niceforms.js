/*#############################################################
Name: Niceforms
Version: 0.9
Author: Lucian Slatineanu
URL: http://www.badboy.ro/

Feel free to use and modify but please provide credits.

Modified by: Basti
URL: http://www.arraystudio.com
#############################################################*/

//global variables that can be used by all the functions on this page.
var selects;
var inputs;
var radios = new Array();
var checkboxes = new Array();
var hovers = new Array();
var buttons = new Array();
var selectText = "please select";

//this function runs when the page is loaded so put all your other onload stuff in here too.
function init() {

	//check if styles are enabled and only then start replacing elements

		replaceSelects();

	hoverEffects();
	buttonHovers();
	bigradios();
}


function replaceSelects() {

	//get all the select fields on the page
    selects = document.getElementsByTagName('select');

	//cycle trough the select fields
    for(var i=0; i < selects.length; i++) {

		//create and build div structure
		var selectArea = document.createElement('div');
		var left = document.createElement('div');
		var right = document.createElement('div');
		var center = document.createElement('div');
		var button = document.createElement('a');
		
		//start basti
		//var text = document.createTextNode(selectText);
		var text = document.createTextNode(selects[i].options[selects[i].selectedIndex].value);
		//end basti
		
		center.id = "mySelectText"+i;
		//button.href="javascript:showOptions("+i+")";
		selectArea.className = "selectArea";
		left.className = "left";
		right.className = "right";
		center.className = "center";
		right.appendChild(button);
		center.appendChild(text);
		selectArea.appendChild(left);
		selectArea.appendChild(right);
		selectArea.appendChild(center);
		
		//start basti
		if(document.addEventListener)
		{
			//these are for Mozilla
			eval("selectArea.addEventListener('click', function (e) { e.stopPropagation(); if(isAnyOptionVisible() != "+i+" && isAnyOptionVisible() >= 0) { showOptions(isAnyOptionVisible());} showOptions("+i+"); }, true)");
			document.addEventListener('click', function (e) { showOptions(isAnyOptionVisible());}, false);
		}
		else if(document.attachEvent)
		{
			//these are for IE
			eval("selectArea.attachEvent('onclick', function (e) { if (!e) var e = window.event; e.cancelBubble = true; if(isAnyOptionVisible() != "+i+" && isAnyOptionVisible() >= 0) { showOptions(isAnyOptionVisible());} showOptions("+i+"); } )");
			document.attachEvent('onclick', function (e) { showOptions(isAnyOptionVisible());});
		}
		//end basti
		
		//hide the select field
        selects[i].style.display='none';

		//insert select div
		selects[i].parentNode.insertBefore(selectArea, selects[i]);

		//build & place options div
		var optionsDiv = document.createElement('div');
		optionsDiv.className = "optionsDivInvisible";
		optionsDiv.id = "optionsDiv"+i;
		optionsDiv.style.left = findPosX(selectArea) -3 + 'px';
		optionsDiv.style.top = findPosY(selectArea) + 30 + 'px';

		//get select's options and add to options div
		for(var j=0; j < selects[i].options.length; j++) {
			var optionHolder = document.createElement('p');
			var optionLink = document.createElement('a');
			var optionTxt = document.createTextNode(selects[i].options[j].text);

			//start basti
			//optionLink.href = "javascript:showOptions("+i+"); selectMe('"+selects[i].id+"',"+j+","+i+");";
			optionLink.href = "javascript:selectMe('"+selects[i].id+"',"+j+","+i+");";
			//end basti
			
			optionLink.appendChild(optionTxt);
			optionHolder.appendChild(optionLink);
			optionsDiv.appendChild(optionHolder);
		}

		//insert options div
		document.getElementsByTagName("body")[0].appendChild(optionsDiv);
		
		$('#mySelectText0').html($("#select option:selected").text());
		
	}
}

function showOptions(g) {
		elem = document.getElementById("optionsDiv"+g);
		if(!elem)
		{
			return;
		}
		
		if(elem.className=="optionsDivInvisible") {elem.className = "optionsDivVisible";}
		else if(elem.className=="optionsDivVisible") {elem.className = "optionsDivInvisible";}
}

//start basti
function isAnyOptionVisible()
{
	var g=0;
	
	while(elem = document.getElementById("optionsDiv"+g))
	{
		if(elem.className=="optionsDivVisible")
			return g;
		g++;
	}
	
	return -1;
}
//end basti

function selectMe(selectFieldId,linkNo,selectNo) {
	//feed selected option to the actual select field
	selectField = document.getElementById(selectFieldId);
	for(var k = 0; k < selectField.options.length; k++) {
		if(k==linkNo) {
			selectField.options[k].selected = "selected";
		}
		else {
			selectField.options[k].selected = "";
		}
	}
	//show selected option
	textVar = document.getElementById("mySelectText"+selectNo);
	var newText = document.createTextNode(selectField.options[linkNo].value);
	textVar.replaceChild(newText, textVar.childNodes[0]);
}

function findPosX(obj)
{
  if (typeof obj == 'string') { obj = $(obj); }
  var curleft = 0;
  if (obj.offsetParent)
  {
    while (obj.offsetParent)
    {
      curleft += obj.offsetLeft;
      obj = obj.offsetParent;
    }
  }
  else if (obj.x)
  {
    curleft += obj.x;
  }
  return curleft;
};

/**
* find Y position of an element
* @param {String | HTMLElement} obj Accepts either a string to use as an ID for getting a DOM reference, or an actual DOM reference.
* @return {Number} The current Y position of the object.
*/
function findPosY(obj)
{
  if (typeof obj == 'string') { obj = $(obj); }
  var curtop = 0;
  if (obj.offsetParent)
  {
    while (obj.offsetParent)
    {
      curtop += obj.offsetTop;
      obj = obj.offsetParent;
    }
  }
  else if (obj.y)
  {
    curtop += obj.y;
  }
  return curtop;
};

function hoverEffects() {
	//get all elements (text inputs, passwords inputs, textareas)
	var elements = document.getElementsByTagName('input');
	var j = 0;
	for (var i4 = 0; i4 < elements.length; i4++) {
		if((elements[i4].type=='text')||(elements[i4].type=='password')) {
			hovers[j] = elements[i4];
			++j;
		}
	}
	elements = document.getElementsByTagName('textarea');
	for (var i4 = 0; i4 < elements.length; i4++) {
		hovers[j] = elements[i4];
		++j;
	}

	//add focus effects
	for (var i4 = 0; i4 < hovers.length; i4++) {
		hovers[i4].onfocus = function() {this.className += "Hovered";}
		hovers[i4].onblur = function() {this.className = this.className.replace(/Hovered/g, "");}
	}
}

function buttonHovers() {
	//get all buttons
	var elements = document.getElementsByTagName('input');
	var j = 0;
	for (var i5 = 0; i5 < elements.length; i5++) {
		if(elements[i5].type=='submit') {
			buttons[j] = elements[i5];
			++j;
		}
	}

	//add hover effects
	for (var i5 = 0; i5 < buttons.length; i5++) {
		buttons[i5].onmouseover = function() {this.className += "Hovered";}
		buttons[i5].onmouseout = function() {this.className = this.className.replace(/Hovered/g, "");}
	}
}

function bigradios(){
	$(".bigradio input[type=radio]").hide();
	$(".bigradio").hover(
	  function () {
		if(!$(this).hasClass('bigradio_checked')){
			$(this).addClass('bigradio_hovered');
		}
	  }, 
	  function () {
		$(this).removeClass('bigradio_hovered');
	  }
	);

	$(".bigradio").click(function(){
		$('.bigradio').removeClass('bigradio_checked');
		$('input[type=radio]',this).attr('checked', 'checked');
		$(this).removeClass('bigradio_hovered');
		$(this).addClass('bigradio_checked');
	});
}


crir = {
	userAgent: '',
	isSafari: false,
	init: function() {
		
		this.userAgent = navigator.userAgent.toLowerCase();
		this.isSafari = ((this.userAgent.indexOf('safari')!=-1)&&(this.userAgent.indexOf('mac')!=-1))?true:false;
		
		if (! this.isSafari) { // the script doesn't work in safari.
			arrLabels = document.getElementsByTagName('label');
		
			searchLabels:
			for (var i=0; i<arrLabels.length; i++) {			
				// get the input element based on the for attribute of the label tag
				if (arrLabels[i].getAttributeNode('for') && arrLabels[i].getAttributeNode('for').value != '') {
					labelElementFor = arrLabels[i].getAttributeNode('for').value;				
					inputElement = document.getElementById(labelElementFor);
				}
				else {				
					continue searchLabels;
				}	
								
				inputElementClass = inputElement.className;	
			
				// if the input is specified to be hidden intiate it
				if (inputElementClass == 'crirHiddenJS') {
					inputElement.className = 'crirHidden';
					
					inputElementType = inputElement.getAttributeNode('type').value;	
					
					// add the appropriate event listener to the input element
					if (inputElementType == "checkbox") {
						inputElement.onclick = crir.toggleCheckboxLabel;
					}
					else {
						inputElement.onclick = crir.toggleRadioLabel;
					}
					
					// set the initial label state
					if (inputElement.checked) {
						if (inputElementType == 'checkbox') { arrLabels[i].className = 'checkbox_checked'}
						else { arrLabels[i].className = 'radio_checked' }
					}
					else {
						if (inputElementType == 'checkbox') { arrLabels[i].className = 'checkbox_unchecked'}
						else { arrLabels[i].className = 'radio_unchecked' }
					}
				}
				else if (inputElement.nodeName != 'SELECT' && inputElement.getAttributeNode('type').value == 'radio') { // this so even if a radio is not hidden but belongs to a group of hidden radios it will still work.
					arrLabels[i].onclick = crir.toggleRadioLabel;
					inputElement.onclick = crir.toggleRadioLabel;
				}
			}
		}
	},	
	
	findLabel: function (inputElementID) {
		arrLabels = document.getElementsByTagName('label');
	
		searchLoop:
		for (var i=0; i<arrLabels.length; i++) {
			if (arrLabels[i].getAttributeNode('for') && arrLabels[i].getAttributeNode('for').value == inputElementID) {				
				return arrLabels[i];
				break searchLoop;				
			}
		}		
	},	
	
	toggleCheckboxLabel: function () {
		labelElement = crir.findLabel(this.getAttributeNode('id').value);
	
		if(labelElement.className == 'checkbox_checked') {
			labelElement.className = "checkbox_unchecked";
		}
		else {
			labelElement.className = "checkbox_checked";
		}
	},	
	
	toggleRadioLabel: function () {			 
		clickedLabelElement = crir.findLabel(this.getAttributeNode('id').value);
		
		clickedInputElement = this;
		clickedInputElementName = clickedInputElement.getAttributeNode('name').value;
		
		arrInputs = document.getElementsByTagName('input');
	
		// uncheck (label class) all radios in the same group
		for (var i=0; i<arrInputs.length; i++) {			
			inputElementType = arrInputs[i].getAttributeNode('type').value;
			if (inputElementType == 'radio') {
				inputElementName = arrInputs[i].getAttributeNode('name').value;
				inputElementClass = arrInputs[i].className;
				// find radio buttons with the same 'name' as the one we've changed and have a class of chkHidden
				// and then set them to unchecked
				if (inputElementName == clickedInputElementName && inputElementClass == 'crirHidden') {				
					inputElementID = arrInputs[i].getAttributeNode('id').value;
					labelElement = crir.findLabel(inputElementID);
					labelElement.className = 'radio_unchecked';
				}
			}
		}
	
		// if the radio clicked is hidden set the label to checked
		if (clickedInputElement.className == 'crirHidden') {
			clickedLabelElement.className = 'radio_checked';
		}
	},
	
	addEvent: function(element, eventType, doFunction, useCapture){
		if (element.addEventListener) 
		{
			element.addEventListener(eventType, doFunction, useCapture);
			return true;
		} else if (element.attachEvent) {
			var r = element.attachEvent('on' + eventType, doFunction);
			return r;
		} else {
			element['on' + eventType] = doFunction;
		}
	}
}

crir.addEvent(window, 'load', crir.init, false);
window.onload = init;