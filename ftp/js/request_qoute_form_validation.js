jQuery(document).ready(function($){


var validation = {
	"name_id": false,
	"phone_id": false,
	"description_id": false
}


var patterns = {
	"name_id": /^[а-яА-ЯёЁa-zA-Z ]+$/,
	"phone_id": /^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$/,
	"description_id": /^[а-яА-ЯёЁa-zA-Z0-9,.@?!$&*&%^#_\/|()-+'" ]+$/
}


// присваивает событие по нажатии на клавишу для проверки инпутов по паттерну

var inputFields = $('.checking-input');

inputFields.keyup(function(){

	//записываем все, что нудно в перменные
	var elem = $(this);

	var elemId = elem.attr('id');

	var value = elem.val();
	// var parent = elem.closest('.input-container');
	// var error = parent.children('.contactForm-info-error');

	if ( typeof elemId != 'undefined' )
	{
		//проверим всю шелуху на регулярки
		if ( patterns[elemId].test(value) )
		{
			validation[elemId] = true;
			$("#"+elemId).removeClass("checking-input-error");
		}
		else
		{
			validation[elemId] = false;
			$("#"+elemId).addClass("checking-input-error");
			console.log(elemId+" error");
		}
	}

});


//сабмит

var form = $('#consideritdone-form-id');

form.bind('submit', function(event){
	event.preventDefault();
	for ( key in validation )
	{
		if( !validation[key] )
		{
			console.log('tut');
			inputFields.trigger('keyup');
			return false;
		}
	}

	this.submit();

});

});
