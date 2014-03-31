//////// GERAL /////////

function showDIV(id){ $(id).fadeIn(500); }
function hideDIV(id){ $(id).fadeOut(500); }

$(document).ready(function(e) {
 
 $.ajaxSetup({
    'beforeSend' : function(xhr) {
        xhr.overrideMimeType('text/html; charset=ISO-8859-1');
    },
});   
	
});


// Load Modal

function loadModal(url,w,h){
	
$("body").append('<div id="blackbg" onClick="hideDIV('+"'#blackbg'"+');hideDIV('+"'#loader'"+');"></div>');	
$("body").append('<div id="loader"><div class="close" onClick="hideDIV('+"'#blackbg'"+');hideDIV('+"'#loader'"+');">X</div><div id="loadContent"></div></div>');	

mt = (h/2);
ml = (w/2);


showDIV('#blackbg');

$('#loader').fadeIn(500, function(){
$('#loader').animate({width:w+"px",height:h+"px",marginTop:"-"+mt+"px",marginLeft:"-"+ml+"px",opacity:"1"},500);
		
	});

$('#loadContent').load("load/"+url);
	
	
}

//Função para visualizar departamentos

function toggleDepartamentos(){
	
		if($("#departamentos").is(":visible")){
			
	$("div[name='departamentos']").removeClass("selected");
			$("#departamentos").fadeOut(500, function(){

	$("#topline").animate({height:'6px'},500);
		
		
		});
		
		
		} else{
	
	$("div[name='departamentos']").addClass("selected");
	$("#topline").animate({height:'105px'},500, function(){
		
		$("#departamentos").fadeIn(500);
		
		});
	
	
	}}
	






