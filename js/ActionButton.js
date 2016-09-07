var op;
var arrayId;
var data;

function Item(value){
	var e =document.getElementById(value).innerHTML;
	callData(e);
	op=e;
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

//peticion para saber el numero


function check(){
	var arrayident=new Array();
	var n=document.getElementById('total').innerHTML;
	var count=0;

	for (var i = 1; i <= n; i++) {
		var e="_"+i;
		var b=document.getElementById(e).checked;
		if(b==true){
			arrayident[count]=i;
			count++;
		}
		

	}
	return arrayident;
} 


function task(file){
	var arrayId;
	if(file == "Update"){
		arrayId=check();
		callTaskId(file, op,arrayId);
	}
	else{
		if(file=="Delete"){
			arrayId=check();
			callTaskId(file, op, arrayId);
		}
		else{
			if(file=="Add"){
				callTask(file, op);
			}
		}
	}
	
}

function callTaskId(file,op,arrayId){
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

	
	link.open("GET","Controllers/controller"+file+".php?option="+op+"&arrayId="+arrayId,true);
	link.send();

}

function callTask(file, op){
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
	link.open("GET","Controllers/controller"+file+".php?option="+op,true);
	link.send();
}	