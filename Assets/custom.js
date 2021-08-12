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



    var selectArea = "-1";
    var selectBoxCount = "0";
    var textarea = '<div class="col-12 d-flex custom-textarea"><textarea style="width: 100%;"></textarea></div><br>';
    var selectInput = '<div class="col-12 d-flex custom-textarea"><input class="form-control select-input"></input></div><br>';
    //var productCheckbox = "<div class='col-12 d-flex custom-checkbox'><input type='checkbox' id='"+ value.name +"' name='"+ value.name +"' value='"+ value.name +"'><label for='"+ value.name +"' data-id='"+ value.id +"'>"+ value.name +"</label><br></div>";


    $('.input-insert').click(function(){
        selectBoxCount = Number(selectBoxCount) + Number(1);
        var input = '<div class="col-12 d-flex new-input"><div class="col-4"><input class="form-control" type="text" placeholder="Hücre Adı" name="form_name" required></div><div class="col-4"><select class="custom-select" data-count="'+ selectBoxCount +'"><option value="-1">Seçiniz</option><option value="ürün">Ürün</option><option value="adet">Adet</option><option value="en">En</option><option value="boy">Boy</option><option value="Yön">Yön</option><option value="secim">Seçim</option><option value="tek-satir">Tek Satır</option><option value="coklu-satir">Çoklu Satır</option></select></div></div><br>';
        $('.form-add-button').append(input);

        $('.custom-select').on('change', function (e) {
            selectArea = $(this).val();
            var selectAttribute = $(this).attr('data-count');
            if(selectArea == "ürün"){
                $.ajax( {
                    type: 'POST',
                    dataType: 'json',
                    url: '/getproductlistwithajax',
                    success: function (data) {
                        $.each(data, function (key, value){
                            var productCheckbox = "<div class='col-12 d-flex custom-checkbox'><input type='checkbox' id='"+ value.name +"' name='"+ value.name +"' value='"+ value.name +"'><label for='"+ value.name +"' data-id='"+ value.id +"'>"+ value.name +"</label><br></div>";
                            $('.form-add-button').append(productCheckbox);
                        });
                    },
                    error: function (message) {
                        console.log('fail');
                    }
                });
            }
        });

    });

    $('.input-delete').click(function(){
        selectBoxCount = Number(selectBoxCount) - Number(1);
        $('.new-input:last-of-type').remove();
        $('.custom-textarea:last-of-type').remove();
        $('.form-add-button br:last-of-type').remove();
    });

})


