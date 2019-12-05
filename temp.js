function semm()
{

    var sel = document.getElementById('sem');
    var strUser = sel.options[sel.selectedIndex].text; 

  
   if(strUser == '1st')
	{ 
		 document.getElementById('1st').readOnly = false;
	}
}