$(document).ready(function(){
      product();
     client();
   

 	function product(){
		$.ajax({
			url	: "./action2.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}

function client(){
	    console.log("entro cliente");
		$.ajax({
			url	: "./action2.php",
			method:	"POST",
			data	:	{getClient:1},
			success	:	function(data){
				$("#get_client").html(data);
			}
		})
	}

     page();
	function page(){
				console.log("entro1");
		
		$.ajax({
			url	:	"./action2.php",
			method	:	"POST",
			data	:	{page:1},
			success	:	function(data){
		
				$("#pageno").html(data);
			}
		})
	}


	$("body").delegate("#page","click",function(){
		var pn = $(this).attr("page");
		$.ajax({
			url	:	"./action2.php",
			method	:	"POST",
			data	:	{getClient:1,setPage:1,pageNumber:pn},
			success	:	function(data){
				$("#get_client").html(data);
			}
		})
	})
	//close



/*
$("#search_client").click(function(){
		$("#get_client").html("<h3>Loading...</h3>");
		var keyword = $("#search").val();
		
		if(keyword != ""){
			$.ajax({
			url		:	"./action2.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			dataType:"html",
		    }).done(function(response){
		    	console.log(response);
      		  $("#get_client").html(response);  		  
    			}).fail(function(jqXHR, textStatus){
        			console.log(textStatus);
    				});
		}
		
	})
//close


function buscar() {
    var textoBusqueda = $("input#search").val();
    alert("entro");
 
     if (textoBusqueda != "") {
        $.post("./action2.php", {search:1,keyword:textoBusqueda}, function(mensaje) {
            $("#get_client").html(mensaje);
         }); 
     } else { 
        $("#get_client").html('<p>JQUERY VACIO</p>');
        }
    }

*/

//Get User Information before checkout
	$("#register_client").on("submit",function(event){
		
		event.preventDefault();
		$(".overlay").show();

		$.ajax({
			url : "./dat_client.php",
			method : "POST",
			data : $("#register_client").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					window.location.href = "list_client.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})


$("body").delegate(".remove","click",function(event){
		var remove = $(this).parent().parent().parent();
		var remove_id = remove.find(".remove").attr("remove_id");
		
		$.ajax({
			url	:	"./action2.php",
			method	:	"POST",
			data	:	{removeItemFromUser:1,rid:remove_id},
			success	:	function(data){
				$("#get_client").html(data);
			}
		})
	})



})