$(document).ready(function () {
	$('#tab-company').DataTable();
});
$(".btn-edit").click(function (e) {
	var id = this.getAttribute('data-bs-id');
	var name = this.getAttribute('data-bs-name');
	var address = this.getAttribute('data-bs-address');
	// console.log(id, name, address);
	$("#EditCompanyModal input[name='id']").val(id);
	$("#EditCompanyModal input[name='name']").val(name);
	$("#EditCompanyModal input[name='address']").val(address);
	$('#EditCompanyModal').modal('show');
})

$(".btn-delete").click(function (e) {
	var id = this.getAttribute('data-bs-id');
	$("#DeleteCompanyModal input[name='id']").val(id);
	$('#DeleteCompanyModal').modal('show');
})