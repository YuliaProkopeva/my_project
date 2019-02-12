menu.onclick = function myFunction(){
	var x = document.getElementById('Top');
	if (x.className === "navigation"){
		x.className += " responsive";
	} else {
		x.className = "navigation";
	}
}
//Валидация формы
document.getElementById('sub').onclick = function() {


	valid = true;
	 if ( document.contf.name.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Name'." );
                valid = false;
        }

      if (document.contf.email.value == ""){
    			alert ( "Пожалуйста заполните поле 'Email'." );
                valid = false;
  		 }
  		 
	   at=document.contf.email.value.indexOf("@");
	   dot=document.contf.email.value.indexOf(".");
	   //Если поле не содержит эти символы знач email введен не верно
	   if (at<1 || dot <1){
	      		document.getElementById("emailf").innerHTML="Еmail введен не верно";
	      		valid = false;
	 	 }

	    if (document.contf.text.value == ""){
	    		 alert ( "Пожалуйста заполните поле 'Message'." );
	             valid = false;
	   	}

	   	if(valid != false) {

		 		alert('Сообщение отправлено! Мы ответим Вам на указанный Email!');
		}
}