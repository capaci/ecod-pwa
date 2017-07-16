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

    // $('ul.tabs').tabs({'select_tab': 'tab_id', 'swipeable': true});

    $('.timepicker').pickatime({
        default: 'now', // Set default time
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });
    

});
