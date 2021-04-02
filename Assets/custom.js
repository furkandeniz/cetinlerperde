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
        if(beforeSelected = 'width-and-height-area'){
            $('.width-and-height-area').css('display','none');
            $('.height-area').css('display','none');
            $('.width-area').css('display','none');
        }
        if(value == 'width-and-height-area'){
            $('.width-and-height-area').css('display','block');
            $('.height-area').css('display','block');
            $('.width-area').css('display','block');
        }else {
            $('.' + value).css('display','block');
        }
        beforeSelected = value;
    });
})


