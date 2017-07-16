$(document).ready(function() {
    $(".button-collapse").sideNav();

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    $('select').material_select();

    // $('input[type=radio][name=gender]').change(function() {
    $('.gender-select__button').change(function() {
        if (this.value == 'custom') {
            $('#custom-gender').removeClass('hide');
            $('#custom-gender').find('#custom-gender__input').focus();
            $('.gender-select').addClass('hide');
        }
    });

    $('#custom-gender .close').click(function(e) {
        e.preventDefault();

        $('#custom-gender').addClass('hide');
        $('.gender-select').removeClass('hide');
    });
});
