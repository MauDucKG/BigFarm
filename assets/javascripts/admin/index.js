$(".btn-edit").click(function (e) {
    const username = this.getAttribute('data-bs-username')
    // var username = $(this).data("username");
    console.log(username);
    $("#EditAdminModal input[name='username']").val(username);
    $('#EditAdminModal').modal('show');
});

$(".btn-delete").click(function (e) {
    const username = this.getAttribute('data-bs-username')
    //console.log(username);
    $("#DeleteAdminModal input[name='username']").val(username);
    $('#DeleteAdminModal').modal('show');
});