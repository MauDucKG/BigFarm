$(".btn-edit").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    var description = this.getAttribute('data-bs-id');
    var content = this.getAttribute('data-bs-content');
    var title = this.getAttribute('data-bs-title');

    $("#EditStudentModal input[name='id']").val(id);
    $("#EditStudentModal textarea[name='description']").val(description);
    $("#EditStudentModal textarea[name='content']").val(content);
    $("#EditStudentModal input[name='title']").val(title);
    $('#EditStudentModal').modal('show');
});

$(".btn-delete").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    $("#DeleteStudentModal input[name='id']").val(id);
    $('#DeleteStudentModal').modal('show');
});
$(".btn-hide").click(function (e) {
    var id = this.getAttribute('data-bs-id');
    $("#HideStudentModal input[name='id']").val(id);
    $('#HideStudentModal').modal('show');
});
$(document).ready(function () {
	$('#tab-new').DataTable();
});
