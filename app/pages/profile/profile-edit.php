<?php


if (!logged_in()) {
	redirect('login');
}

$id = $_GET['id'] ?? $_SESSION['USER']['id'];

$row = db_query("select * from users where id = :id limit 1", ['id' => $id]);

if ($row) {
	$row = $row[0];
}
?>



<?php if (!empty($row)): ?>
	<div class="d-flex justify-content-center mx-auto">

		<div class="row col-md-12">

			<div class="h2 d-flex text-center">Edit Profile</div>

			<form method="post" onsubmit="myaction.collect_data(event, 'profile-edit')">
				<table class="table table-striped">
						<div class="col-md-12">
					<tr>
						<th colspan="2">User Details:</th>
					</tr>
					<tr>
						<th><i class="bi bi-envelope"></i> Email</th>
						<td>
							<input value="<?= $row['email'] ?>" type="text" class="form-control" name="email"
								placeholder="Email">
							<div><small class="js-error js-error-email text-danger"></small></div>
						</td>
					</tr>
					<tr>
						<th><i class="bi bi-person-circle"></i> Username</th>
						<td>
							<input value="<?= $row['username'] ?>" type="text" class="form-control" name="username"
								placeholder="Username">
							<div><small class="js-error js-error-firstname text-danger"></small></div>
						</td>
					</tr>
					<tr>
						<th><i class="bi bi-key"></i> Password</th>
						<td>
							<input type="password" class="form-control" name="password"
								placeholder="Password (leave empty to keep old password)">
							<div><small class="js-error js-error-password text-danger"></small></div>
						</td>
					</tr>
					<tr>
						<th><i class="bi bi-key-fill"></i> Retype Password</th>
						<td>
							<input type="password" class="form-control" name="retype_password"
								placeholder="Retype Password">
						</td>
					</tr>

				</table>

				<div class="progress my-3 d-none">
					<div class="progress-bar" role="progressbar" style="width: 50%;">Working... 25%</div>
				</div>

				<div class="p-2">

					<button class="btn btn-primary float-end">Save</button>

					<a href="<?= ROOT ?>/home">
						<label class="btn btn-secondary">Back</label>
					</a>

				</div>
			</form>

		</div>
	</div>


<?php else: ?>
	<div class="text-center alert alert-danger">That profile was not found</div>
	<a href="index.php">
		<button class="btn btn-primary m-4">Home</button>
	</a>
<?php endif; ?>


<script>

	function display_image_edit(file) {
		var reader = new FileReader();
		reader.onload = function (e) {
			document.querySelector('.js-image-edit').src = e.target.result;
		}
		reader.readAsDataURL(file);
	}
	var myaction =
	{
		collect_data: function (e, data_type) {
			e.preventDefault();
			e.stopPropagation();

			var inputs = document.querySelectorAll("form input, form select");
			let myform = new FormData();
			myform.append('data_type', data_type);

			for (var i = 0; i < inputs.length; i++) {
				myform.append(inputs[i].name, inputs[i].value);
			}

			myaction.send_data(myform);
		},

		send_data: function (form) {
			for (var p of form) {
				let name = p[0];
				let value = p[1];

				console.log(name, value)
			}

			var ajax = new XMLHttpRequest();
			console.log(ajax);
			document.querySelector(".progress").classList.remove("d-none");

			//reset the prog bar
			document.querySelector(".progress-bar").style.width = "0%";
			document.querySelector(".progress-bar").innerHTML = "Working... 0%";

			ajax.addEventListener('readystatechange', function () {

				if (ajax.readyState == 4) {
					if (ajax.status == 200) {
						//all good
						myaction.handle_result(ajax.responseText);
					} else {
						console.log(ajax);
						alert("An error occurred");
					}
				}
			});

			ajax.upload.addEventListener('progress', function (e) {

				let percent = Math.round((e.loaded / e.total) * 100);
				document.querySelector(".progress-bar").style.width = percent + "%";
				document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
			});

			ajax.open('post', 'ajax', true);
			ajax.send(form);
		},

		handle_result: function (result) {
			console.log(result);
			var obj = JSON.parse(result);
			if (obj.success) {
				alert("Profile edited successfully");
				window.location.reload();
			} else {

				//show errors
				let error_inputs = document.querySelectorAll(".js-error");

				//empty all errors
				for (var i = 0; i < error_inputs.length; i++) {
					error_inputs[i].innerHTML = "";
				}

				//display errors
				for (key in obj.errors) {
					document.querySelector(".js-error-" + key).innerHTML = obj.errors[key];
				}
			}
		}
	};



</script>