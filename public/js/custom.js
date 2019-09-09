// $(document).ready(function() {
//     $("#checkAll").click(function () {
//         $('input:checkbox').prop('checked', this.checked);
//     });
// });

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
            alert(" Please check at least one game to delete")
        } else {
            if (confirm("Are you sure wanna to process action ?")) {
                // var strIds = idArr.join(",");

                // switch (action) {
                //     case '1':
                //         deleteAll(idArr);
                //         break;
                // }
                $.ajax({
                    url: '/game/delete-multiple',
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
            url: '/game/get-by-id/' + editId,
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

    $('.btn-update').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        var name = $('name').val();
        var category = $('category').val();
        var thumbnail = $('thumbnail').val();
        var price = $('price').val();

        if (name !== '' && category !== '' && thumbnail !== '' && price !== '') {
            $.ajax({
                url: '/game/' + editId,
                type: 'PUT',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    name: name,
                    category: category,
                    thumbnail: thumbnail,
                    price: price
                },
                success: function (data) {
                    alert(data);
                }
            });
        } else {
            alert('Fill all fields');
        }
    })
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
