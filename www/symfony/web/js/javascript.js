function validate()
{
	var to=document.forms["myform"]["to"].value;
	var from=document.forms["myform"]["from"].value;
	var subject=document.forms["myform"]["subject"].value;
	var content=document.forms["myform"]["content"].value;
	
	var valid=true;
	if(from=='')
	{
		document.getElementById('f').innerHTML="please enter this field";
		valid=false;
	}
	else
	{
		document.getElementById('f').innerHTML="";
	}
	if(to=='')
	{
		document.getElementById('t').innerHTML="please enter valid email";
		valid=false;

		
	}
	else
	{
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(reg.test(to) == false) 
	    {
	        	document.getElementById('t').innerHTML="please enter valid email";
			     valid=false;
	            
	    }
	    else
	   {
		document.getElementById('t').innerHTML="";
	    }
	}
	
	if(subject=='')
	{
		document.getElementById('s').innerHTML="please enter subject";
		valid=false;
	}
	
	
	if(content=='')
	{
		document.getElementById('c').innerHTML="please enter content";
		valid=false;
	}
	
	
	return valid;
}