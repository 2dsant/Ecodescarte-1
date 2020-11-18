function selectPosto(combo){
    $('.cards-lugares').children('div').hide();
    $('.cards-lugares').children('.'+$(combo).val()).addClass('animate__animated animate__fadeIn').show();
}
