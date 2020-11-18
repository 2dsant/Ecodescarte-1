$(document).ready(function(){
    $('#select').on('change',function(){

        var selectValor =  '.'+$(this).val();


        $('.cards-lugares').children('div').hide();
        $('.cards-lugares').children(selectValor).show();
    });

});