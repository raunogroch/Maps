$('#map').on('click', '#deletedot', function(){
    deleteMarkers();
});




$('#map').on('click', '#loaddot', function(){
    var data = {
        '_token': $('.map').data('token'),
        latitude: $('.map').data('lat'),
        longitude: $('.map').data('lng'),
        name: $('#info_dot').val()
    }
    ajax_callback(data, 'save_dot', 'POST')
});

function ajax_callback(data, url, method){
    $.ajax({
        type : method,
        url  : url,
        data:  data,
        success :   function (data) {
            ajax_response(data, method);
        }
    });
}

function ajax_response(data, method) {
    switch (method){

        // case 'metodo_llamada': {
        //     if(data.status == true)
        //         respuesta verdadera
        //         $('#id_relacional').html(data.message);
        //     if(data.status == false)
        //         respuesta falsa
        //         $('#id_relacional').html('<span class="text-black text_car">'+data.message+'</span>');
        // }break;

        case 'save_dot': {
            if(data.status == true)
                alert('verdadero')
            if(data.status == false)
                alert('falso')
        }break;
    }
}
