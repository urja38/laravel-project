<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-6Gmde4bdYoR28hUs5QlZn5XpeWZZVZIB0AblzjMyK8bxg3zjK0eE+9lf4l+bmA22" crossorigin="anonymous" />

    <!-- Bootstrap 5.3.3 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-tn6Uu17aKHYOi3ST5Se8EnmpIPy+LTKLoLTU1cqF+q5QYiwFmJ4r6Cd4b1EFz0gL5" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <div align="center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Details
            </button>
        </div>

        <!-- Add details Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="studentForm">
                            @csrf
                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" class="form-control" id="first_name" />
                            </div>
                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" class="form-control" id="last_name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="contact_number" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit details Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editFormId">
                        <div class="mb-3">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" name="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="editContactNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="editContactNumber" name="contact_number">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>contact_number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="getAllData"></tbody>
        </table>

        <script>
            $(document).ready(function () {
                fetchData();
            });
            function fetchData() {
                $.ajax({
                    url: "/ajax-form",
                    type: "get",
                    datatype: "json",
                    success: function (response) {
                        $("#getAllData").html(response);
                        console.log(response);
                    },
                });
            }

            function editData(){
                var id = 
                $.ajax({
                    url: "/ajax-form",
                    type: "get",
                    datatype: "json",
                    success: function (response) {
                        $("#getAllData").html(response);
                        console.log(response);
                    },
                });
            }
        </script>

        <script type="text/javascript">
            $("#studentForm").submit(function (e) {
                e.preventDefault();
                let firstname = $("#first_name").val();
                let lastname = $("#last_name").val();
                let email = $("#email").val();
                let phone = $("#contact_number").val();
                let _token = $("input[name=_token]").val();

                $.ajax({
                    url: "{{route('form.store')}}",
                    type: "POST",
                    data: {
                        first_name: firstname,
                        last_name: lastname,
                        email: email,
                        contact_number: phone,
                        _token: _token,
                    },
                    success: function (response) {
                        $("#exampleModal").modal("hide");
                        fetchData();
                        console.log(response);
                        $("#studentForm")[0].reset();
                    },
                });
            });
        </script>

<script>
    function fetchData() {
    $.ajax({
        url: "/ajax-form",
        type: "GET",
        datatype: "json",
        success: function (response) {
            $("#getAllData").html(response);
            console.log(response);
        },
    });
}
</script>

<script>
$(document).on("click", ".edit-button", function() {
                let id = $(this).data("id");
                let firstName = $(this).data("first_name");
                let lastName = $(this).data("last_name");
                let email = $(this).data("email");
                let contactNumber = $(this).data("contact_number");

                $("#editFormId").val(id);
                $("#editFirstName").val(firstName);
                $("#editLastName").val(lastName);
                $("#editEmail").val(email);
                $("#editContactNumber").val(contactNumber);

                $("#editModal").modal("show");
            });

    $("#editForm").submit(function(e) {
        e.preventDefault();

        let id = $("#editFormId").val();
        let firstName = $("#editFirstName").val();
        let lastName = $("#editLastName").val();
        let email = $("#editEmail").val();
        let contactNumber = $("#editContactNumber").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url: `/form/${id}`,
            type: "PUT",
            data: {
                first_name: firstName,
                last_name: lastName,
                email: email,
                contact_number: contactNumber,
                _token: _token,
            },
            success: function(response) {
                if (response.success) {
                    $("#editModal").modal("hide");
                    let row = $(`#form-${id}`);
                    row.find("td:nth-child(2)").text(firstName);
                    row.find("td:nth-child(3)").text(lastName);
                    row.find("td:nth-child(4)").text(email);
                    row.find("td:nth-child(5)").text(contactNumber);

                    // alert("Form updated successfully.");
                    fetchData();

                } else {
                    alert("Failed to update the form.");
                }
            },
            error: function(response) {
                console.error("Error:", response);
                alert("An error occurred. Please try again.");
            }
        });
    });


S

           function deleteData(id){
                if (confirm("Are you sure you want to delete this item?")) {
                    $.ajax({
                        url: '/delete/' + id,
                        type: "DELETE",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                     },
                        success: function(response) {
                            if (response.success) {
                                $(`#form-${id}`).remove();
                                alert("Form deleted successfully.");
                                fetchData();
e
                            } else {
                                alert("Failed to delete the form.");
                            }
                        },
                        error: function(response) {
                            console.error("Error:", response);
                            alert("An error occurred. Please try again.");
                        }
                    });
                }
            }

</script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Sr0ko5blR1x3gDkZCZ1UPQsmA13gW6GVmWjzzYd0Z0Qy+N7t5Rj7PV7ywDk+2MYx" crossorigin="anonymous"></script>
</body>
    </body>
</html>
