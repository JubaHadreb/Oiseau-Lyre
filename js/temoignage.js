var requete;

if(window.XMLHttpRequest){
	
		requete = new XMLHttpRequest();
	
	}else{
	
		requete = new ActiveXObject('Microsoft.XMLHTTP');
	
	}

function afficher(){

	requete.onreadystatechange = function(){
	
		if(requete.readyState == 4 && requete.status == 200){
		
			document.getElementById('temoignage').innerHTML = requete.responseText;
		
		}
	
	}
	
	requete.open('GET', 'pages/temoignage.php');
	requete.send();
	

}

setInterval("afficher()", 14000);