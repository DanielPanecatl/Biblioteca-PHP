$( document ).ready ( function(){
	$('select').material_select();
	$(".button-collapse").sideNav();
	$(".dropdown-button").dropdown();
	$('input#input_text, textarea#textarea1').characterCounter();
	$('.parallax').parallax();

})
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});