
function onSelectChange()
{
    var sel = document.getElementById('depart');
    var strUser = sel.options[sel.selectedIndex].text;  //getting the selected option's text


    if(strUser == '10 th')
	{ 
       
		document.getElementById('tenth').readOnly = false;
		document.getElementById('bord').readOnly = false;  //enabling the text box because user selected 'Other' option.
		  }
	
	
	if(strUser == '10 th')
	{ 
         document.getElementById('rollno').readOnly = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('passyear').readOnly = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('maxmark').readOnly = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == '10 th')
	{ 
         document.getElementById('obtmark').readOnly = false;  //enabling the text box because user selected 'Other' option.
    }
	
	if(strUser == '10 th')
	{ 
         document.getElementById('perc').readOnly = false;  //enabling the text box because user selected 'Other' option.
    }
	
	
	
	
	
	
	
	 if(strUser == '12 th')
	{ 	 document.getElementById('twelth').readOnly = false;
		 document.getElementById('tenth').readOnly = false;
         document.getElementById('bord12').readOnly = false; 
		 document.getElementById('bord').readOnly = false;
		  //enabling the text box because user selected 'Other' option.
		 
    }
	else
	{
	document.getElementById('bord12').readOnly = true;
	
	
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('rollno12').readOnly = false;
		 document.getElementById('rollno').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	
	document.getElementById('rollno12').readOnly = true;
	
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('passyear12').readOnly = false; 
		 document.getElementById('passyear').readOnly = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyear12').readOnly = true;
	
	}
	
	if(strUser == '12 th')
	{ 
         document.getElementById('maxmark12').readOnly = false;
		 document.getElementById('maxmark').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmark12').readOnly = true;
	

	}
	
	
	if(strUser == '12 th')
	{ 
         document.getElementById('obtmark12').readOnly = false; 
		 document.getElementById('obtmark').readOnly = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmark12').readOnly = true;
	
	}
	
	
	
	if(strUser == '12 th')
	{ 
         document.getElementById('perc12').readOnly = false;  
		 document.getElementById('perc').readOnly = false;
		 //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('perc12').readOnly = true;
		}
	







	
	 if(strUser == 'Gradution')
	{ 
          document.getElementById('twelth').readOnly = false;
		 document.getElementById('tenth').readOnly = false;
		  document.getElementById('gradution').readOnly = false;
		  document.getElementById('bord').readOnly = false;
		  document.getElementById('bord12').readOnly = false; 
		  document.getElementById('univ').readOnly = false; 
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
		
	document.getElementById('univ').readOnly = true;
	document.getElementById('gradution').readOnly = true;
	

	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('rollno').readOnly = false;
		 document.getElementById('rollno12').readOnly = false;
		 document.getElementById('rollno13').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('rollno13').readOnly = true;
	
	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('passyear').readOnly = false;
		 document.getElementById('passyear12').readOnly = false;
		 document.getElementById('passyear13').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyear13').readOnly = true;
	
	}
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('maxmark').readOnly = false;
		 document.getElementById('maxmark12').readOnly = false;
		 document.getElementById('maxmark13').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmark13').readOnly = true;
		
	}
	
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('obtmark').readOnly = false;
		 document.getElementById('obtmark12').readOnly = false;
		 document.getElementById('obtmark13').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmark13').readOnly = true;
	
	}
	
	
	
	if(strUser == 'Gradution')
	{ 
         document.getElementById('perc').readOnly = false;
		 document.getElementById('perc12').readOnly = false;
		 document.getElementById('perc13').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('perc13').readOnly = true;
	
	}






	
	
		 if(strUser == 'Post Gradution')
	{ 
          document.getElementById('twelth').readOnly = false;
		 document.getElementById('tenth').readOnly = false;
		  document.getElementById('pg').readOnly = false;
		  document.getElementById('gradution').readOnly = false;
		  document.getElementById('bord').readOnly = false;
		  document.getElementById('bord12').readOnly = false; 
		  document.getElementById('univ').readOnly = false; 
		  document.getElementById('univpg').readOnly = false;
		  //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('univpg').readOnly = true;
	document.getElementById('pg').readOnly = true;
	
	
	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('rollno').readOnly = false;
		 document.getElementById('rollno12').readOnly = false;
		 document.getElementById('rollno13').readOnly = false;
		 document.getElementById('rollnopg').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('rollnopg').readOnly = true;

	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('passyear').readOnly = false;
		 document.getElementById('passyear12').readOnly = false;
		 document.getElementById('passyear13').readOnly = false;
		 document.getElementById('passyearpg').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('passyearpg').readOnly = true;
	
	}
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('maxmark').readOnly = false;
		 document.getElementById('maxmark12').readOnly = false;
		 document.getElementById('maxmark13').readOnly = false;
		 document.getElementById('maxmarkpg').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('maxmarkpg').readOnly = true;

	}
	
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('obtmark').readOnly = false;
		 document.getElementById('obtmark12').readOnly = false;
		 document.getElementById('obtmark13').readOnly = false;
		 document.getElementById('obtmarkpg').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('obtmarkpg').readOnly = true;
	
	}
	
	
	
	if(strUser == 'Post Gradution')
	{ 
         document.getElementById('perc').readOnly = false;
		 document.getElementById('perc12').readOnly = false;
		 document.getElementById('perc13').readOnly = false;
		 document.getElementById('percpg').readOnly = false;
		   //enabling the text box because user selected 'Other' option.
    }
	else
	{
	document.getElementById('percpg').readOnly = true;
		
	}
	
}


function onRadio()
{
   if (document.getElementById('yes').checked)
	{ 
		 document.getElementById('dp').readOnly = false;
		 document.getElementById('univdp').readOnly = false;
		 document.getElementById('rollnodp').readOnly = false;
		 document.getElementById('passyeardp').readOnly = false;
		 document.getElementById('maxmarkdp').readOnly = false;
		 document.getElementById('obtmarkdp').readOnly = false;
		 document.getElementById('percdp').readOnly = false;
    }
}

function onRadio1()
{
   if (document.getElementById('no').checked)
	{ 
		  document.getElementById('dp').readOnly = true;
		 document.getElementById('univdp').readOnly = true;
		 document.getElementById('rollnodp').readOnly = true;
		 document.getElementById('passyeardp').readOnly = true;
		 document.getElementById('maxmarkdp').readOnly = true;
		 document.getElementById('obtmarkdp').readOnly = true;
		 document.getElementById('percdp').readOnly = true;
		 
		 
		 
		 
    }
}