
function login(){
	var user = document.getElementById("usuario").value;
	var pwd = document.getElementById("password").value;
    if(user == '' || pwd == ''){
    	alert("Todos los campos deben estar diligenciados ");
    }else{

    	var data = {
    		"user": user,
	    	"pwd": pwd
    	};
	    $.ajax({
	    	data: data,
	    	url: 'comprobar.php',
	    	type: 'post',
	    	success: function(result){
	    		var respuesta = JSON.parse(result);
	    		console.log(respuesta.status);
				
	    		if (respuesta.status == 200){
	    			location.href ="inicio.html";
	    		}else{
	    			alert("Usuario o password incorrectos")
	    		}
	    		//alert("usuario logueado correctamente");
	    	}
	    });
    }

}
