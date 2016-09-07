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
	var long;
	switch(file){
		case "Update":
			arrayId=check();
			long=arrayId.length;
			if(long==0){
				alert("Seleccione un elemento");
			}else{
				if(long==1){
					callTaskUpdate(file, op,arrayId);
				}else{
					alert("Solo se acepta un elemento a la vez")
				}
			}
		break;
		case "Delete":
			arrayId=check();
			
			arrayId=check();
			long=arrayId.length;
			if(long==0){
				alert("Seleccione un elemento");
			}else{
				var r = confirm("Seguro de eliminar los elementos");
				if(r ==true){
					callTaskDelete(file, op, arrayId);
				}
			}
		break;
		case "Add":
			callTaskAdd(file, op);
		break;
		default:
		break;
	}
	
}

function callTaskDelete(file,op,idsArray){
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

	
	link.open("GET","Controllers/controller"+file+".php?option="+op+"&idsDelete="+idsArray,true);
	link.send();

}


function callTaskUpdate(file,op,idParameter){
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

	
	link.open("GET","Controllers/controller"+file+".php?option="+op+"&idUpdate="+idParameter,true);
	link.send();

}

function callTaskAdd(file, op){
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