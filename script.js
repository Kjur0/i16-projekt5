reloadform();

function reloadform() {
	$(".trojkat").hide();
	document.querySelectorAll(".trojkat").forEach((el) => {
		el.required = false;
	});
	$(".prostokat").hide();
	document.querySelectorAll(".prostokat").forEach((el) => {
		el.required = false;
	});
	$(".trapez").hide();
	document.querySelectorAll(".trapez").forEach((el) => {
		el.required = false;
	});
	$(".kolo").hide();
	document.querySelectorAll(".kolo").forEach((el) => {
		el.required = false;
	});

	$(".trojkat_p").hide();
	document.querySelectorAll(".trajkat_p").forEach((el) => {
		el.required = false;
	});
	$(".trapez_p").hide();
	document.querySelectorAll(".trapez_p").forEach((el) => {
		el.required = false;
	});

	$(".trojkat_o").hide();
	document.querySelectorAll(".trojkat_o").forEach((el) => {
		el.required = false;
	});
	$(".trapez_o").hide();
	document.querySelectorAll(".trapez_o").forEach((el) => {
		el.required = false;
	});

	if ($("#trojkat_p")[0].checked || $("#trojkat_o")[0].checked) {
		$(".trojkat").show();
		document.querySelectorAll(".trojkat").forEach((el) => {
			el.required = true;
		});
	}
	if ($("#prostokat_p")[0].checked || $("#prostokat_o")[0].checked) {
		$(".prostokat").show();
		document.querySelectorAll(".prostokat").forEach((el) => {
			el.required = true;
		});
	}
	if ($("#trapez_p")[0].checked || $("#trapez_o")[0].checked) {
		$(".trapez").show();
		document.querySelectorAll(".trapez").forEach((el) => {
			el.required = true;
		});
	}
	if ($("#kolo_p")[0].checked || $("#kolo_o")[0].checked) {
		$(".kolo").show();
		document.querySelectorAll(".kolo").forEach((el) => {
			el.required = true;
		});
	}

	if ($("#trojkat_p")[0].checked) {
		$(".trojkat_p").show();
		document.querySelectorAll(".trojkat_p").forEach((el) => {
			el.required = true;
		});
	}
	if ($("#trapez_p")[0].checked) {
		$(".trapez_p").show();
		document.querySelectorAll(".trapez_p").forEach((el) => {
			el.required = true;
		});
	}

	if ($("#trojkat_o")[0].checked) {
		$(".trojkat_o").show();
		document.querySelectorAll(".trojkat_o").forEach((el) => {
			el.required = true;
		});
	}
	if ($("#trapez_o")[0].checked) {
		$(".trapez_o").show();
		document.querySelectorAll(".trapez_o").forEach((el) => {
			el.required = true;
		});
	}
}
