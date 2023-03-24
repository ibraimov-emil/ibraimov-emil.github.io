	window.onscroll = function () {
		const scrolIng = pageYOffset;
		if (scrolIng == 0) {

			document.getElementsByClassName("header")[0].id = "footerOff";
			document.getElementsByClassName("device")[0].id = "footerOff";
			document.getElementsByClassName("footerInfo")[0].id = "footerInfOff";
		} else {

			document.getElementsByClassName("header")[0].id = "footer";
			document.getElementsByClassName("device")[0].id = "footer";
			document.getElementsByClassName("footerInfo")[0].id = "footerInf";
		}
	}
