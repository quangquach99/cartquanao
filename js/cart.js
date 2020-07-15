function myFunction(id,max,quantity) {
	var price = document.getElementById('price'+id).innerHTML;
	document.getElementById('addUpPrice'+id).innerHTML = quantity * price;

	var i = 0;
	var total = 0;
	for(i; i < max; i++) {
		if(document.getElementById('addUpPrice'+i).innerHTML != null) {
			var addUp = document.getElementById('addUpPrice'+i).innerHTML;
			console.log(max);
			total += parseInt(addUp);
		}
		else {
			break;
		}
	}
	document.getElementById('totalMoney').innerHTML = total;
}

if(document.getElementById('pay') != null) {
	var payment = document.getElementById('pay').onclick = function(e){
		e.preventDefault();
		document.getElementById('fixPayment').submit();
	}
}
