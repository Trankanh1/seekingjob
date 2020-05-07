var CommonHelper = new function __CommonHelper() {
	/**
	 * @desc Add commas for number
	 * @param n_str
	 * @returns {string}
	 */
	this.addCommas = function (n_str) {
		n_str += '';
		var x = n_str.split('.');
		var x1 = x[0];
		var x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		x1 = x1.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		return x1 + x2;
	};
	/**
	 * @desc Add common when key up
	 * @param name
	 * @param event
	 */
	this.addCommasKeyUpEvent = function (name, event) {
		if (event.which >= 37 && event.which <= 40) return;
		$("input[name^=" + name + "]").val(function (index, value) {
			return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		});
	};


	/**
	 * @param str
	 * @returns {string}
	 */
	this.capitalize = function (str) {
		if (typeof str !== 'string') return '';
		return str.charAt(0).toUpperCase() + str.slice(1)
	};
	/**
	 * @desc Remove commas, especially use for number contain commas
	 * @returns {*}
	 */
	this.removeCommas = function (str) {
		return str.replace(/,/g, '');
	};
	/**
	 * Format number for app expense
	 * @param number
	 * @returns {string}
	 */
	this.expenseFormatNumber = function (number) {
		if (number == null) {
			return `₫ <em> 0 </em>`;
		}
		return `₫ <em>${AP.data.numberFormat(parseFloat(number))} </em>`;
	};
	/**
	 * @param str
	 * @returns {*}
	 */
	this.purify = function (str) {
		return str.normalize("NFD")
			.replace(/[\u0300-\u036f]/g, "")
			.replace(/đ/g, "d")
			.replace(/Đ/g, "D");
	};
	/**
	 * @param selector
	 * @param input
	 */
	this.quickFilter = function (selector, input) {
		var value = CommonHelper.purify($(input).val().toLowerCase());
		$(selector).find("tbody tr").filter(function () {
			$(this).toggle(CommonHelper.purify($(this).text().toLowerCase()).indexOf(value) > -1)
		});
	}

};
