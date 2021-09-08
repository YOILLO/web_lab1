$(document).ready(function(){
		function isNum(n){
			return !isNaN(parseFloat(n));
		}
	
	/* проверка на валидность введённых значений у*/
	
		function validate_Y(){
			var y = $("#y-textinput").val().replace(",",".");
			if (isNum(y) && y >= -3 && y <= 3){
				$("#y-textinput").removeClass("text-error");
				return true;
			}
			else {
				$("#y-textinput").addClass("text-error");
				return false;
			}
		}
	
		function validate_X(){
			if ($(".x-checkbox").is(":checked")){
				$(".x-box-label").removeClass("box-error");
				return true;
			}
			else{
				$(".x-box-label").addClass("box-error");
				return false;
			}
		}
		
		function validate_R(){
			if ($(".r-checkbox").is(":checked")){
				$(".r-box-label").removeClass("box-error");
				return true;
			}
			else{
				$(".r-box-label").addClass("box-error");
				return false;
			}
		}
		
		function validated_Form(){
			return validate_X() & validate_Y() & validate_R();
		}
		
		function form_sender(event){
			event.preventDefault();
			if (!validated_Form()){
				return;
			}
			// сделать асинхронный http запрос
			$.ajax({
				url: "php/script.php",
				method: "GET",
				data: $(this).serialize() + "&timezone=" + new Date().getTimezoneOffset(),
				dataType: "html",
				beforeSend: function (){
					$(".button").attr("disabled", "disabled");
				},
				success: function(data){
					console.log(data);
					$(".button").attr("disabled", false);	
					$("#result-table").append(data);
				},
				error: function(error){
					console.log(error);
					$(".button").attr("disabled", false);	
				}
			
			})
		}
		
		$("#input-form").on("submit", form_sender);
})