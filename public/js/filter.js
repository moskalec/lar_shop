$(document).ready(function () {
    $(document).on('click', '.category_checkbox', function() {
        let ids = [];
        let counter = 0;
        $('.category_checkbox').each(function () {
            if($(this).is(':checked')) {
                ids.push($(this).attr('id'));
                counter++;
            }
        });
        if (counter > 0) {
            $('.products_div').empty();
            fetchFilteredProducts(ids);
        }
        if (counter === 0) {
            $('.products_div').empty();
            fetchAll();
        }
    });
});

function fetchFilteredProducts(id) {
    console.log(id);
    $.ajax({
        type: 'GET',
        url: '/products/filter/' + id,
        success: function (response) {

            response = JSON.parse(response);
            console.log(response);
            if (response.length === 0) {
                $('.products_div').empty().append('No products');
            } else {
                response.forEach(element => {
                    $('.products_div').append('<div>'+
                        '<h2><a href="'+'/products/'+element['id']+'">'+element['title']+'</a></h2>'+
                        '<p>'+element['description']+'</p>'+
                        '</div>'
                    );
                });
            }
        }
    });
}

function fetchAll() {
    $.ajax({
        type: 'GET',
        url: '/products/all',
        success: function (response) {
            response = JSON.parse(response);
            response.forEach(element => {
                $('.products_div').append('<div>'+
                    '<h2><a href="'+'/products/'+element['id']+'">'+element['title']+'</a></h2>'+
                    '<p>'+element['description']+'</p>'+
                    '</div>'
                );
            });
        }
    });
}
