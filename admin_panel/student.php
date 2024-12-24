<?php include('partials/_header.php') ?>

<!-- confirm edit alert modal-->
<div class="modal fade" id="edit-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to Edit Student Details?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="confirm-edit-btn">Edit</button>
            </div>
        </div>
    </div>
</div>
<!-- end of onfirm edit alert modal-->

<!-- alert to delete teacher  -->
<div class="modal fade" id="delete-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to delete Student?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="deleteTeacherWithIdSeted()">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- end of alert to delete teacher -->
<!--add new student model -->


<div class="modal" style="z-index: 2000;" id="addTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Student Details</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="general-form" novalidate>
                <div class="modal-body">
                    <div class="container my-3">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name"
                                        aria-label="First name" id="fname" name="fname" required>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name"
                                        aria-label="Last name" id="lname" name="lname" required>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="father" class="form-label">Father name</label>
                            <input type="text" class="form-control" id="father" aria-describedby="emailHelp"
                                name="father" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" aria-describedby="emailHelp"
                                        name="dob" required>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                                <div class="col-6 student-image">

                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" style="width:100%;" required>
                                        <option selected disabled value="">--select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="class" class="form-label">Class</label>
                                    <select class="form-select" id="class" name="class" style="width:100%;" required>

                                        <option selected disabled value="">---select--</option>
                                        <!-- <option value="12">12</option>
                                        <option value="11">11</option>
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="pg">pg</option>
                                        <option value="lkg">lkg</option>
                                        <option value="ukg">ukg</option> -->
                                        <?php include('partials/select_classes.php') ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="section" class="form-label">Section</label>
                                    <select class="form-select" id="section" name="section" style="width:100%;"
                                        required>
                                        <option selected disabled value="">--select--</option>
                                        <!-- <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option> -->
                                        <?php include('partials/selelct_section.php') ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3" id="uploadImageField">
                            <div class="mb-3">
                                <label for="image" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="uploadImage" name="image" placeholder="file"
                                    accept=".png, .jpeg, .jpg">

                            </div>

                        </div>


                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="general-info-btn">
                        <div><i class='bx bxs-chevrons-right'></i><span> next</span></div>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- personal information -->
<div class="modal" style="z-index: 2000;" id="personalInformationModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Address Details</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="personal-form" novalidate>
                <div class="modal-body">
                    <div class="container my-3">

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Enter phone number" required>
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback" id="phone-mdg">
                                Please enter a valid 10-digit phone number.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" aria-describedby="emailHelp"
                                name="address" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">City</label>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" id="city" aria-describedby="emailHelp"
                                name="city" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" id="zip" aria-describedby="emailHelp"
                                name="zip" placeholder="ZIP" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" aria-label="Default select example" id="state" name="state"
                                required>
                                <option selected disabled value="">--select--</option>
                                <option value="Hariyana">Hariyana</option>
                                <option value="UP">UP</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Panjab">Panjab</option>
                                <option value="Gujrat">Gujrat</option>
                            </select>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="button" onclick="backToStudentDetail()" class="btn btn-secondary">
                        <div><i class='bx bxs-chevrons-left'></i><span>Back</span></div>
                    </button>
                    <button type="button" class="btn btn-primary" id="personal-info-btn">
                        <div><i class='bx bxs-chevrons-right'></i><span> next</span></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of personal information-->

<!-- Guardian information -->
<div class="modal" style="z-index: 2000;" id="guardian_information" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Emergency Contact Details</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="guradian-form" novalidate>
                <div class="modal-body">

                    <div class="container my-3">
                        <div class="mb-3">
                            <label for="guardian" class="form-label">Guardian name</label>
                            <input type="text" class="form-control" id="guardian" aria-describedby="emailHelp"
                                name="guardian" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="gphone" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="gphone" name="gphone"
                                placeholder="Enter phone number" required>
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback" id="phone-g">
                                Please enter a valid 10-digit phone number.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="gaddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="gaddress" aria-describedby="emailHelp"
                                name="gaddress" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="city-info" class="form-label">City</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="City name"
                                        aria-label="First name" id="gcity" name="gcity" required>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Zip code"
                                        aria-label="Last name" id="gzip" name="gzip" requireds>
                                    <div class="invalid-feedback">
                                        required!
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="relation" class="form-label">Relationship to Student</label>
                            <input type="text" class="form-control" id="relation" aria-describedby="emailHelp"
                                name="relation" required>
                            <div class="invalid-feedback">
                                required!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="backToAddressDetail()">
                        <div><i class='bx bxs-chevrons-left'></i><span>Back</span></div>
                    </button>
                    <button type="button" class="btn btn-primary" id="guardian-form-btn"><span>Submit </span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of Guardian information-->


<!-- end of add new student model -->

<!-- Remove student model -->
<div class="modal removeTeacherModal" style="z-index: 2000;" id="removeStudentModel" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-danger fs-5" id="exampleModalLabel">Delete Student</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="remove-student-form" novalidate>
                <div class="modal-body">
                    <div class="container my-3">

                        <div class="mb-3">
                            <label for="student-id" class="form-label">Student ID</label>
                            <input type="text" class="form-control remove_student_id" id="student-id" aria-describedby="" required>
                            <div class="invalid-feedback">
                                Please provide a valid Student ID.
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" id="remove-student-btn">
                        <div><span>Delete Student</span></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end of Remove student model -->

<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<input type="hidden" value="3" id="checkFileName">
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>

    <!-- End of Navbar -->

    
    <main>
        <div class="header">
            <div class="left">
                <h1>Students</h1>
            </div>
        </div>
        <div class="bottom-data">

            <div class="orders">
                <!-- Tab panes -->
                <div class="tab-content">

                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="showAttendence">
                            <br>
                            <div class="header">
                                <i class='bx bx-receipt'></i>
                                <h3>Courses </h3>
                                <a href="#" class="add" data-bs-toggle="modal" data-bs-target="#add-subject"
                                    onclick="removeValidations()">
                                    <i class='bx bx-plus'></i>
                                    <span>Add Student</span>
                                </a>
                            </div>

                            <!-- <hr><br> -->
                            <!-- <div class="container" style="display: flex;">

                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="class" class="col-form-label">Courses </label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="courseId" name="courseId" required>
                                            <option selected disabled value="">--select Courses--</option>
                                            <?php include('../assets/select_courses.php'); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                <a class="find" id="find-btn">
                                    <i class='bx bx-search-alt'></i>
                                    <span>Find</span>
                                </a>
                            </div> -->


                            <hr class="text-danger">

                            <div class="container">
                                <br>
                                <!-- Take attendence -->
                                <div class="attendenceTable" style="display: block;">
                                    <div class="header">
                                        <i class='bx bx-list-ul'></i>
                                        <h3 id="subject-table-header">All Students</h3>
                                    </div>

                                    <hr class="text-danger">
                                    <!--table-->
                                    <div class="students-table subject-table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="thead col-4">SL</th>
                                                    <th scope="col" class="thead col-5">Course Name</th>
                                                    <th scope="col" class="thead col-5">background</th>
                                                    <th scope="col" class="thead col-3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include('../assets/fetchCourse.php'); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--END table-->
                                    <div id="dataNotAvailable">

                                        <div class="_flex-container box-hide">

                                            <div class="no-data-box">
                                                <div class="no-dataicon">
                                                    <i class='bx bx-data'></i>
                                                </div>
                                                <p>No Data</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>

                            <hr class="text-danger">
                        </div>
                    </div>


                </div>

            </div>


        </div>

    </main>


</div>


<script src="../assets/js/student.js"></script>
<?php include('partials/_footer.php'); ?>