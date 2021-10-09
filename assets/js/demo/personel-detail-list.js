/*

Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4

Version: 4.6.0

Author: Sean Ngu

Website: http://www.seantheme.com/color-admin/admin/

*/



var handleDataTableCombinationSetting = function() {

	"use strict";

    

	if ($('#data-table-combine').length !== 0) {

		var options = {

			dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex mr-0 mr-sm-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>',

			buttons: [

				

				{ extend: 'excel', className: 'btn-sm' },

				{ extend: 'pdf', className: 'btn-sm' },

				{ extend: 'print', className: 'btn-sm' }

			],

			responsive: false,

			autoFill: true,

			colReorder: true,

			keys: true,

			rowReorder: true,

			select: true,

			pageLength : 20

			

		};



		if ($(window).width() <= 767) {

			options.rowReorder = false;

			options.colReorder = false;

			options.autoFill = false;

		}

		$('#data-table-combine').DataTable(options);

	}

};



var TableManageCombine = function () {

	"use strict";

	return {

		//main function

		init: function () {

			handleDataTableCombinationSetting();

		}

	};

}();



var handleMenuMarker = function() {

	document.getElementById("personel").className = 'has-sub active';

	document.getElementById("detail").className = 'active';

	}


var handleReset = function() {
	$('[data-click="resetBtn"]').	click( function() {
		  document.getElementById("inputNopeg").value = "";
		  document.getElementById("inputName").value = '';
		  document.getElementById("inputNoAnggota").value = '';
		  document.getElementById("inputUnit").value = '';
		  document.getElementById("inputDinas").value = '';
		  document.getElementById("inputKPK").value = '';
		  document.getElementById("inputKoperasi").value = '';

		return false;
	});
}


$(document).ready(function() {

	TableManageCombine.init();

	handleMenuMarker();
	handleReset();

});