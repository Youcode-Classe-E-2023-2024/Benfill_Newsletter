const roleSelect = document.querySelectorAll('.roleSelect')


roleSelect.forEach((elm) => {
    $(elm).on('change', () => {
        let roleValue = (elm.value);
        let userId = $(elm).data('user-id');
        changeRole(roleValue, userId);
    });
});

function changeRole(roleValue, userId) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/role",
        type: "put",
        data: {roleValue, userId},
        success: (data) => {
            console.log(data)
        }
    })
}

