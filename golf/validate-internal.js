var whichaction;
var validate = true;
function validateForm(form)
{	
	var returnFlag = true;
	if (validate != false && this.whichaction != 'unsub' && this.whichaction != 'sub'){
		var returnMsg = '';
		var passwd1 = '';
		for(var i=0; i<form.elements.length; i++)
		{
			if (hasClassName(form.elements[i], 'required') === true)
			{
				if (getTypeValue(form.elements[i]))
					returnMsg += getTypeValue(form.elements[i])+'\n';
				if (returnMsg != '')
					returnFlag = false;
			}
			if(form.elements[i].name == 'eMail') {
				var reg = /^([A-Za-z0-9_\+\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				if(reg.test(form.elements[i].value) == false) {
					returnMsg += 'Please enter a valid email address.\n';
					returnFlag = false;
				}
			}
			if(form.elements[i].name == 'TextMessage_Phone' && form.elements[i+1].name == "TextMessage_Provider_Id" && form.elements[i].value != "") {
				if (getTypeValue(form.elements[i+1]))
					returnMsg += getTypeValue(form.elements[i+1])+'\n';
				if (returnMsg != '')
					returnFlag = false;
			}
			if (hasClassName(form.elements[i], 'reg_form') === true && form.elements[i].name == 'password' && form.elements[i+1].name == 'password2')
			{
				if (form.elements[i].value != form.elements[i+1].value)
					returnMsg += 'Passwords do not match\n';
				if (returnMsg != '')
					returnFlag = false;
			}
		}
		if (returnMsg != '')
			alert(returnMsg);
	}
	return returnFlag;	
}

function getTypeValue(objElement)
{
	switch (objElement.type)
	{
		case 'text':
		case 'textarea':
		case 'file':
		case 'hidden':
		case 'button':
		case 'password':
		case 'reset':
		case 'submit':
			if (objElement.value == '')
				return getError(objElement);
			break;
		case 'checkbox':
		case 'radio':
			if (objElement.checked == '')
				return getError(objElement);
			break;
		case 'select-one':
			if (objElement.options[objElement.selectedIndex].text == 'Select One' || objElement.options[objElement.selectedIndex].text == '')
				return getError(objElement);
			break;
		case 'select-multiple':
			if (objElement.selectedIndex < 0)
				return getError(objElement);
			break;
	}
}

function getError(objElement)
{
	if (objElement.title)
		return objElement.title;
	else
		return 'You did not enter the required information for the '+objElement.name+' field.';
}

function hasClassName(objElement, strClass)
{
	if (objElement.className)
	{
		var arrList = objElement.className.split(' ');
		var strClassUpper = strClass.toUpperCase();
		for ( var i = 0; i < arrList.length; i++ )
		{
			if (arrList[i].toUpperCase() == strClassUpper)
				return true;
		}
	}
	return false;
}
