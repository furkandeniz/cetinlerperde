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

    var input = '<div class="col-12 d-flex new-input"><div class="col-4"><input class="form-control" type="text" placeholder="Hücre Adı" name="form_name" required></div><div class="col-4"><select class="custom-select"><option value="ürün">Ürün</option><option value="adet">Adet</option><option value="en">En</option><option value="boy">Boy</option><option value="Yön">Yön</option><option value="secim">Seçim</option><option value="tek-satir">Tek Satır</option></select></div></div><br>';
    $('.input-insert').click(function(){
        $('.form-add-button').append(input);
    });

    $('.input-delete').click(function(){
        $('.new-input:last-of-type').remove();
        $('.form-add-button br:last-of-type').remove();
    });

})


