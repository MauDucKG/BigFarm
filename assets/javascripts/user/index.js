$(".btn-edit").click(function (e) {
	var email = this.getAttribute('data-bs-email')
	var fname = this.getAttribute('data-bs-fname')
	var lname = this.getAttribute('data-bs-lname')
	var gender = this.getAttribute('data-bs-gender')
	var age = this.getAttribute('data-bs-age')
	var phone = this.getAttribute('data-bs-phone')
	var img = this.getAttribute('data-bs-img')
	// console.log(email, fname, lname, gender, age, phone);
	$("#EditUserModal input[name='email']").val(email);
	$("#EditUserModal input[name='fname']").val(fname);
	$("#EditUserModal input[name='lname']").val(lname);
	if (gender)
		$('#EditUserModal #Nam').prop("checked", true); //Search checked input radio jquery
	else
		$('#EditUserModal #Nu').prop("checked", true);
	$("#EditUserModal input[name='age']").val(age);
	$("#EditUserModal input[name='phone']").val(phone);
	$("#EditUserModal input[name='img']").val(img);
	$('#EditUserModal').modal('show');
})

$(".btn-changepass").click(function (e) {
	var email = this.getAttribute('data-bs-email')
	$("#EditPassModal input[name='email']").val(email);
	$('#EditPassModal').modal('show');
})

$(".btn-delete").click(function (e) {
	var email = this.getAttribute('data-bs-email')
	var img = this.getAttribute('data-bs-img')
	$("#DeleteUserModal input[name='email']").val(email);
	$("#DeleteUserModal input[name='img']").val(img);
	$('#DeleteUserModal').modal('show');
})
$(document).ready(function () {
    $('#tab-user').DataTable();
});