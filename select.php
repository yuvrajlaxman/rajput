
<html>
<head>

<title>list item</title>
<script  type="text/javascript">

function onSelectChange()
{
    var sel = document.getElementById('select');
    var strUser = sel.options[sel.selectedIndex].text;  //getting the selected option's text

    if(strUser == 'a')
	{ 
         document.getElementById('a').disabled = false;  //enabling the text box because user selected 'Other' option.
		 
    }
	else
	{
	document.getElementById('a').disabled = true;
	}
	
	if(strUser == 'b')
	{ 
         document.getElementById('b').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == 'c')
	{ 
         document.getElementById('c').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == 'd')
	{ 
         document.getElementById('d').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	if(strUser == 'e')
	{ 
         document.getElementById('e').disabled = false;  //enabling the text box because user selected 'Other' option.
    }
	
}


</script>
</head>

<body>
<select name="" id= "select" onchange="onSelectChange()">
		<option>SELECT</option> 
      <option value="1">a</option>
      <option value="2">b</option>
      <option value="3">c</option>
      <option value="4">d</option>
      <option value="5">e</option>
</select><br> 
1<input type="text" id="a" disabled="disabled"/><br> 
2<input type="text" id="b" disabled="disabled"/><br> 
3<input type="text" id="c" disabled="disabled"/><br> 
4<input type="text" id="d" disabled="disabled"/><br> 
5<input type="text" id="e" disabled="disabled"/><br> 


</body>
</html>
