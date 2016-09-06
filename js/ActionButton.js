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
	link.open("GET","Controllers/controllerView.php?task="+e,true);
	link.send();
}	

var n;

function task(file){
	if(file == "Update"){
		n=0;
		callTaskId(file, n)
	}
	else{
		if(file=="Delete"){
			n=1;
			callTaskId(file, n);
		}
		else{
			if(file=="Add"){
				callTask(file);
			}
		}
	}
	
}

function callTaskId(file,e){
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
	link.open("GET","Controllers/controller"+file+".php?task="+e,true);
	link.send();
}

function callTask(file){
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
	link.open("GET","Controllers/controller"+file+".php",true);
	link.send();
}	