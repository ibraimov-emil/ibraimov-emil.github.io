const onOff = {
	come: null,
	elem: null,
	online: false,
	toCome: document.getElementsByClassName("toCome"),
	toComeBlock: document.getElementsByClassName("toComeBlock"),
	toComeContainer: document.getElementsByClassName("toComeContainer"),
	on: function (eventObj) {
		this.elem = eventObj;
		this.toCome[0].id = "on";
		this.toComeContainer[0].id = "on";
		this.come = document.getElementsByClassName(this.elem + '');
		this.come[0].id = 'on';
		this.online = true;
	},
	off: function () {
		this.toComeContainer[0].id = "off";
		this.toCome[0].id = "off";
		this.come[0].id = 'off';
		this.online = false;
	},
}
