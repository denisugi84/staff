/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.6.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/admin/
*/

// IE8 browser support
if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function(elt /*, from*/) {
    	var len = this.length >>> 0;
    	var from = Number(arguments[1]) || 0;
    	from = (from < 0) ? Math.ceil(from) : Math.floor(from);
    	if (from < 0)
      		from += len;

    	for (; from < len; from++) {
      		if (from in this && this[from] === elt)
        		return from;
    	}
    	return -1;
	};
}
if(typeof String.prototype.trim !== 'function') {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, ''); 
	}
}


var handleDatepicker = function() {
	$('#datepicker-default').datepicker({
		todayHighlight: true,
		autoclose:true,
		format: 'yyyy-mm-dd'
	});

};


var handleMenuMarker = function() {
	document.getElementById("admin").className = 'has-sub active';
	document.getElementById("users").className = 'active';
	}

var FormPlugins = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleDatepicker();
			handleMenuMarker();
	
		}
	};
}();



$(document).ready(function() {
	FormPlugins.init();

});