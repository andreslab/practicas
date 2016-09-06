/*var button= document.getElementById('t1_1');
alert(button.innerHTML);*/
function Item(value){
	var e =document.getElementById(value).innerHTML;
	callData(e);
}

function callData(e){
	var link;
	if(window.XMLHttpRequest){
		link=new XMLHttpRequest();
	}else{
		link=new ActiveXObject("Microsoft.XMLHTTP");
	}
	link.onreadystatechange=function(){
		if(link.readyState==4 && link.status==200){
			document.getElementById("show").innerHTML=link.responseText;
		}
	}
	link.open("GET","Controllers/controllerView.php?view="+e,true);
	link.send();
}	
