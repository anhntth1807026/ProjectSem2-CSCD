// $(document).ready(function() {
//     $("#checkAll").click(function () {
//         $('input:checkbox').prop('checked', this.checked);
//     });
// });
var BASE_URL = 'http://127.0.0.1:8000';

$(document).ready(function () {
    $('.btn-delete').click(function () {
        if (confirm('Are you sure wanna delete this product ?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);

            $.ajax({
                url: '/admin/product/' + deleteId,
                method: 'DELETE',
                // type: 'POST',
                data: {
                    '_token': $('meta[name= csrf-token]').attr('content')
                },
                success: function (data) {
                    console.log(data);
                    currentItem.closest("tr").remove();
                },
                error: function (data) {
                    console.log('err', data);
                }
            });
        }
    });
});

$(document).ready(function () {
    // $("#search").on("keyup", function () {
    //     var value = $(this).val().toLowerCase();
    //     $("#myTable tr").filter(function () {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    // });

    $('#search').on("keyup", function () {
        search_table($(this).val());
    });

    function search_table(value) {
        $('#myTable tr').each(function () {
            var found = 'false';
            $(this).each(function () {
                if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                    found = 'true';
                }
            });
            if (found === 'true') {
                $(this).show();
            } else {
                $(this).hide();
            }
        })
    }
});

$(document).ready(function () {
    // $('#checkAll').on('click', function (e) {
    //     if ($(this).is(':checked', true)) {
    //         $(".checkbox").prop('checked', true);
    //     } else {
    //         $(".checkbox").prop('checked', false);
    //     }
    // });
    //
    // $('.checkbox').on('click', function () {
    //     if ($('.checkbox:checked').length == $('.checkbox').length) {
    //         $('#checkAll').prop('checked', true);
    //     } else {
    //         $('#checkAll').prop('cheked', false);
    //     }
    // });

    $('#checkAll').change(function () {
        $('.checkbox').prop('checked', $(this).is(':checked'));
    })

    $('.delete-all').on('click', function (e) {

        var idArr = [];
        $(".checkbox:checked").each(function () {
            idArr.push($(this).attr('data-id'));
        });

        if (idArr.length <= 0) {
            alert(" Please check at least one product to delete")
        } else {
            if (confirm("Are you sure wanna to process action ?")) {
                // var strIds = idArr.join(",");

                // switch (action) {
                //     case '1':
                //         deleteAll(idArr);
                //         break;
                // }
                $.ajax({
                    url: '/product/delete-multiple',
                    type: 'POST',
                    data: {
                        '_token': $('meta[name= csrf-token]').attr('content'),
                        'ids': idArr
                    },
                    success: function () {
                        $(".checkbox:checked").each(function () {
                            $(this).closest("tr").remove();
                        });
                        alert("Delete All Success with Ids :" + idArr)
                    },
                    error: function () {
                        alert("Error");
                    }

                })
            }
        }
    });

    $('.btn-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        $.ajax({
            url: '/product/get-by-id/' + editId,
            method: 'GET',
            success: function (response) {
                $('input[name="name"]').val(response.data.name);
                $('textarea[name="category"]').val(response.data.category);
                $('textarea[name="thumbnail"]').val(response.data.thumbnail);
                $('input[name="price"]').val(response.data.price);
                $('#exampleModal').modal('show');
            },
            error: function () {
                alert('Error');
            }
        });
    });


    $('#btn-search').click(function () {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('select[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/admin/product?page=${page}&pro_category_id=${categoryId}&keyword=${keyword}`;
    });
    $('#btn-search-list-product').click(function () {

        onSearch()
    });

    $('input[name="keyword"]').keypress(function (e) {
        if(e.keyCode === 13){
            onSearch()
        }
    });


    $('#select-category').on('change', function() {
         onSearch()
    });



    function onSearch() {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('select[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/List-Product?page=${page}&pro_category_id=${categoryId}&keyword=${keyword}`;

    }

    // $('.add-cart').click(function () {
    //     var shoppingCart = {};
    //     if (localStorage.getItem('shopping-cart') !== null){
    //         shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
    //     }
    //     var id = $(this).attr('data-id');
    //     var name = $(this).attr('data-name');
    //     var thumbnail = $(this).attr('data-thumbnail');
    //     var price = $(this).attr('data-price');
    //
    //     var cartItem = {
    //         'id' : id,
    //         'name': name,
    //         'price': price,
    //         'thumbnail': thumbnail,
    //         'quantity' : 1
    //     };
    //     if (shoppingCart[id] != null){
    //         var existCartItem = shoppingCart[id];
    //         cartItem = existCartItem;
    //         cartItem.quantity++;
    //     }
    //     console.log();
    //
    //     var countCart = Object.values(shoppingCart).reduce((a,b) => {
    //         return a + b.quantity
    //     }, 0);
    //
    //     $('#count-cart').html(countCart);
    //
    //     shoppingCart[id] = cartItem;
    //     localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
    //     alert('Add cart item success!');
    //
    //
    // });
    // $('.btn-update').click(function () {
    //     var editId = $(this).attr('id').replace('btn-edit-', '');
    //     var name = $('name').val();
    //     var category = $('category').val();
    //     var thumbnail = $('thumbnail').val();
    //     var price = $('price').val();
    //
    //     if (name !== '' && category !== '' && thumbnail !== '' && price !== '') {
    //         $.ajax({
    //             url: '/game/' + editId,
    //             type: 'PUT',
    //             data: {
    //                 _token: $('meta[name="csrf-token"]').attr('content'),
    //                 name: name,
    //                 category: category,
    //                 thumbnail: thumbnail,
    //                 price: price
    //             },
    //             success: function (data) {
    //                 alert(data);
    //             }
    //         });
    //     } else {
    //         alert('Fill all fields');
    //     }
    // })
});

function changeStatus(arrayId, status) {
    $.ajax({
        url: '/game/change-status',
        method: 'POST',
        data: {
            '_token': $('meta[name=csrf-token]').attr("content"),
            'ids': arrayId,
            'status': status
        },
        success: function () {
            alert("Thao tác thành công, reload lại page!");
            location.reload();
        },
        error: function () {
            alert("Thao tác thất bại, vui lòng thử lại sau");
        }
    });
};
// function deleteAll(idArr) {
//
// }


var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

