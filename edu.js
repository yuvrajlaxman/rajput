
function onSelectChange()
{
    var sel = document.getElementById('depart');
    var strUser = sel.options[sel.selectedIndex].text;  //getting the selected option's text


    if(strUser == '10 th')
	{ 
       
		document.getElementById('bord').disabled = false;  //enabling the text box because user selected 'Other' option.
		  document.getElementById('tenth').disabled = false; 
		    document.getElementById("enroll").readOnly = false;
	
    }
	
	
	if(strUser == '10 th')
	{ 
         document.getElementById('rollno').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('passyear').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('maxmark').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('obtmark').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	
	if(strUser == '10 th')
	{ 
         document.getElementById('perc').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	
	
	
	
	
	
	
	 if(strUser == '12 th')
	{ 
         document.getElementById('tenth').disabled = false; 
		   document.getElementById('twelth').disabled = false; 
		 document.getElementById('bord12').disabled = false; 
		 document.getElementById('bord').disabled = false;
		  //enabling the text box because user selected 'Other' option.
		 
    }
	else
	{
	document.getElementById('bord12').disabled = true;
	
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('rollno12').disabled = false;
		 document.getElementById('rollno').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('rollno12').disabled = true;
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('passyear12').disabled = false; 
		 document.getElementById('passyear').disabled = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyear12').disabled = true;
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('maxmark12').disabled = false;
		 document.getElementById('maxmark').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmark12').disabled = true;
	}
	
	
	if(strUser == '12 th')
	{ 
         document.getElementById('obtmark12').disabled = false; 
		 document.getElementById('obtmark').disabled = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmark12').disabled = true;
	}
	
	
	
	if(strUser == '12 th')
	{ 
         document.getElementById('perc12').disabled = false;  
		 document.getElementById('perc').disabled = false;
		 //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('perc12').disabled = true;
	}
	







	
	 if(strUser == 'Gradution')
	{ 
          document.getElementById('tenth').disabled = false; 
		   document.getElementById('twelth').disabled = false; 
		  document.getElementById('gradution').disabled = false;
		  document.getElementById('bord').disabled = false;
		  document.getElementById('bord12').disabled = false; 
		  document.getElementById('univ').disabled = false; 
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
		
	document.getElementById('univ').disabled = true;
	document.getElementById('gradution').disabled = true;
	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('rollno').disabled = false;
		 document.getElementById('rollno12').disabled = false;
		 document.getElementById('rollno13').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('rollno13').disabled = true;
	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('passyear').disabled = false;
		 document.getElementById('passyear12').disabled = false;
		 document.getElementById('passyear13').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyear13').disabled = true;
	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('maxmark').disabled = false;
		 document.getElementById('maxmark12').disabled = false;
		 document.getElementById('maxmark13').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmark13').disabled = true;
	}
	
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('obtmark').disabled = false;
		 document.getElementById('obtmark12').disabled = false;
		 document.getElementById('obtmark13').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmark13').disabled = true;
	}
	
	
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('perc').disabled = false;
		 document.getElementById('perc12').disabled = false;
		 document.getElementById('perc13').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('perc13').disabled = true;
	}






	
	
		 if(strUser == 'Post Gradution')
	{ 
          document.getElementById('tenth').disabled = false; 
		  document.getElementById('twelth').disabled = false; 
		  document.getElementById('pg').disabled = false;
		  document.getElementById('gradution').disabled = false;
		  document.getElementById('bord').disabled = false;
		  document.getElementById('bord12').disabled = false; 
		  document.getElementById('univ').disabled = false; 
		  document.getElementById('univpg').disabled = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('univpg').disabled = true;
	document.getElementById('pg').disabled = true;
	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('rollno').disabled = false;
		 document.getElementById('rollno12').disabled = false;
		 document.getElementById('rollno13').disabled = false;
		 document.getElementById('rollnopg').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('rollnopg').disabled = true;
	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('passyear').disabled = false;
		 document.getElementById('passyear12').disabled = false;
		 document.getElementById('passyear13').disabled = false;
		 document.getElementById('passyearpg').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyearpg').disabled = true;
	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('maxmark').disabled = false;
		 document.getElementById('maxmark12').disabled = false;
		 document.getElementById('maxmark13').disabled = false;
		 document.getElementById('maxmarkpg').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmarkpg').disabled = true;
	}
	
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('obtmark').disabled = false;
		 document.getElementById('obtmark12').disabled = false;
		 document.getElementById('obtmark13').disabled = false;
		 document.getElementById('obtmarkpg').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmarkpg').disabled = true;
	}
	
	
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('perc').disabled = false;
		 document.getElementById('perc12').disabled = false;
		 document.getElementById('perc13').disabled = false;
		 document.getElementById('percpg').disabled = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('percpg').disabled = true;
	}
	
}


function onRadio()
{
   if (document.getElementById('yes').checked)
	{ 
		 document.getElementById('dp').disabled = false;
		 document.getElementById('univdp').disabled = false;
		 document.getElementById('rollnodp').disabled = false;
		 document.getElementById('passyeardp').disabled = false;
		 document.getElementById('maxmarkdp').disabled = false;
		 document.getElementById('obtmarkdp').disabled = false;
		 document.getElementById('percdp').disabled = false;
    }
}

function onRadio1()
{
   if (document.getElementById('no').checked)
	{ 
		  document.getElementById('dp').disabled = true;
		 document.getElementById('univdp').disabled = true;
		 document.getElementById('rollnodp').disabled = true;
		 document.getElementById('passyeardp').disabled = true;
		 document.getElementById('maxmarkdp').disabled = true;
		 document.getElementById('obtmarkdp').disabled = true;
		 document.getElementById('percdp').disabled = true;
		 
    }
}