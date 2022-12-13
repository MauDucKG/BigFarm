$(".btn-edit").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    var content = this.getAttribute('data-bs-content');
    // console.log(content);
    $("#EditCommentModal input[name='id']").val(id);
    $("#EditCommentModal input[name='title']").val(content);
    $('#EditCommentModal').modal('show');
});

$(".btn-delete").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    $("#DeleteCommentModal input[name='id']").val(id);
    $('#DeleteCommentModal').modal('show');
});
$(".btn-hide").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    $("#HideCommentModal input[name='id']").val(id);
    $('#HideCommentModal').modal('show');
});
$(document).ready(function () {
    $('#tab-comment ').DataTable();
});