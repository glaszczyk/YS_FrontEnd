document.addEventListener('DOMContentLoaded', function() {
	
	// add to cart and empty cart
	var $addtocart = $('#addtocart'),
		$itemsnumber = $('#itemsnumber'),
		$empty = $('.main-menu__empty-cart'),
		items = function () {
			if (!localStorage.getItem("items") ) {
				return items = 0;
			} else {
				return items = +localStorage.getItem("items");
			}
		}

	
	$itemsnumber.html( items );
	
	$empty.click( function() {
		items = 0;
		updateLocStor(items);
	});

	$addtocart.click( function () {
		items += 1;
		updateLocStor(items);
	} );

	if ( typeof(Storage) !== undefined) {
	} else {
		console.log("Your browser doesn't support WebStorage");
	}

	function updateLocStor(number) {
		localStorage.setItem("items", number);
		$itemsnumber.html( localStorage.getItem("items") );
	}
	// add to cart and empty cart end

	// populate checkout products


	// populate checkout products end


	// notification
	var $notificationButton = $('#notify');
	$('#notifications').append($notificationButton);

	$notificationButton.click(function(){
		var randomId = 'rewrwe21';
		var $randomElement = $('<div>').attr('id',randomId).text('test notification').hide();
		$('#messages').append($randomElement);
		$randomElement.fadeIn('slow').fadeOut('slow');
		setTimeout( function () {
			$randomElement.remove()
		}, 1200 );
	});
	// notification end
})
