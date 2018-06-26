function add_member() {
	// iniciamos el proceso
	var url = 'agregar_alumno.php';
	var method = 'POST';
	var params = 'nombres='+document.getElementById('nombres').value;
	params += '&apellidos='+document.getElementById('apellidos').value;
	params += '&email='+document.getElementById('email').value;
	params += '&telefono='+document.getElementById('telefono').value;
	var container_id = 'list_container' ;
	var loading_text = '<img src="images/fb_loading.gif">' ;
	// llamamos ajax function
	ajax (url, method, params, container_id, loading_text) ;
}




function delete_member(id){
    var url = 'borrar_alumnos.php';
    var method = 'POST';
    var params='id='+id;
    var container_id = 'list_container' ;
	var loading_text = '<img src="images/fb_loading.gif">' ;
	// llamamos ajax function
	ajax (url, method, params, container_id, loading_text) ;

}


function update_member(id){
    var url = 'editar_alumno.php';
    var method = 'POST';
    var params = 'id='+document.getElementById('id').value;
    params +='&nombres='+document.getElementById('nombres').value;
	params += '&apellidos='+document.getElementById('apellidos').value;
	params += '&email='+document.getElementById('email').value;
	params += '&telefono='+document.getElementById('telefono').value;;
    var container_id = 'list_container' ;
	var loading_text = '<img src="images/fb_loading.gif">' ;
	// llamamos ajax function
	ajax (url, method, params, container_id, loading_text) ;

}





function member(id,nombres,apellidos,telefono,email ){
    //alert("Hello! I am an alert box!!"+nombres+id);
    document.getElementById('id').value=id;
     document.getElementById('nombres').value=nombres;
     document.getElementById('apellidos').value=apellidos;
     document.getElementById('email').value=email;
     document.getElementById('telefono').value=telefono;
   
}

function objeto(obj){
    alert(obj.nombres);
    console.log(obj);
}




// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { // waiting for result 
							       document.getElementById(container_id).innerHTML = loading_text;
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}




