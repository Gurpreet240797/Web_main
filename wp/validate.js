function myFunction()
{
	var x = document.forms['hello']['name'];
	if(x.value == ""){
		document.getElementById('name').focus();
		document.getElementById('name').style.backgroundColor=grey;
		document.getElementById('comment').innerHTML == "<font color='red'>Fname should not be blank</font>";
		return false;
	}
	if(!allLetter(x))
	{
		alert("All should be character in the name.");
		return false;
	}

	var t= documnet.forms['hello']['class'];
	if(!allSelect(t))
	{
		alert("Please select your class.");
		return false;
	}

	var q= documnet.forms['hello']['dept'];
	if(!allSelect(q))
	{
		alert("Please select your department.");
		return false;
	}

	var w= documnet.forms['hello']['email'];
	if(w.value == ""){
		document.getElementById('email').focus();
		document.getElementById('email').style.backgroundColor=grey;
		document.getElementById('comment1').innerHTML == "<font color='red'>Email should not be blank</font>";
		return false;
	}
	if(!validEmail(w))
	{
		alert("Please enter valid email address.");
		return false;
	}

	var r= documnet.forms['hello']['phone'];
	if(r.value == ""){
		document.getElementById('phone').focus();
		document.getElementById('phone').style.backgroundColor=grey;
		document.getElementById('comment2').innerHTML == "<font color='red'>Contact should not be blank</font>";
		return false;
	}
	if(!validPhone(r))
	{
		alert("Please enter valid contact number.");
		return false;
	}


	var p= documnet.forms['hello']['tele'];
	if(p.value == ""){
		document.getElementById('tele').focus();
		document.getElementById('tele').style.backgroundColor=grey;
		document.getElementById('comment1').innerHTML == "<font color='red'>ID should not be blank</font>";
		return false;
	}
	if(!validId(p))
	{
		alert("Please enter valid ID.");
		return false;
	}

	var z1 = documnet.forms['hello']['gender'];
	var selected = false;
	for (var i = 0; i < z1.length; i++)
	 {
    	if (z1[i].checked) 
    	{
      		selected = true;
      		break;
    	}
  	}
  	if (!selected) 
  	{
    	alert(z1.id + " must be selected.");
    	return false;
  	}

}


function allLetter(input){
	var letter = /^[A-Za-z\s-, ]+$/;
	if(input.valu.match(letter))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function allSelect(input)
{
	if(input.value == 'no')
	{
		return false;
	}
	else
	{
		return true;
	}
}

function validEmail(input)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(input.value.match(mailformat))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validPhone(input)
{
	var format = /^[0-9]+$/;
	if(input.value.match(format))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function limit(element,limit)
 {
    var max_chars = limit;
    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
 }