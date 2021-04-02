/**
 * Created by furka on 21.03.2021.
 */
$(document).ready(function () {
    var beforeSelected = '';
    $('#method').on('change', function(){

        var value = $('#method').val();
        if(beforeSelected != ''){
            $('.' + beforeSelected).css('display','none');
        }
        $('.' + value).css('display','block');
        beforeSelected = value;
    });
})


