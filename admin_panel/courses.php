<?php include('partials/_header.php') ?>
<?php
include('../assets/config.php');
?>
<!-- confirm edit alert modal-->
<div class="modal fade" id="edit-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to Edit this Subject?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="confirm-edit-btn">Edit</button>
            </div>
        </div>
    </div>
</div>
<!-- end of onfirm edit alert modal-->

<!-- alert to delete subject  -->
<div class="modal fade" id="delete-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to delete this Subject?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="deleteSubject()">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- end of alert to delete subject -->

<!-- add subject modal-->
<div class="modal modal-md" style="z-index: 2000;" id="add-subject" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Courses</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="create-subject-form" novalidate>
                <div class="modal-body">
                    <div class="container my-3">

                        <div class="mb-3">
                            <label for="subject" class="form-label">Course Name</label>
                            <input type="text" class="form-control" name="subject" id="newSubjectName"
                                aria-describedby="emailHelp" required>
                            <div class="invalid-feedback">
                                This field can't be empty!
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="add-subject-btn">
                        <div><i class='bx bx-book-add'></i>&nbsp;&nbsp;<span>Add</span></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of upload syllabus label-->

<!-- edit uploaded notes -->
<div class="modal modal-md" style="z-index: 2000;" id="edit-subject" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit course</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="editSubjectForm" novalidate>
                <div class="modal-body">
                    <div class="container my-3">
                        <div class="mb-3">
                            <label for="subject" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="subject-edited-name" name="subject"
                                aria-describedby="emailHelp" required>
                            <div class="invalid-feedback">
                                Please select course.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="save-new-subject-name">
                        <div><span>Save</span></div>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of edit uploaded notes-->
<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<input type="hidden" value="4" id="checkFileName">
<!-- End of Sidebar -->



<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Courses</h1>
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
                                    <span>Add</span>
                                </a>
                            </div>

                            <hr><br>
                            <div class="container" style="display: flex;">

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
                            </div>


                            <hr class="text-danger">

                            <div class="container">
                                <br>
                                <!-- Take attendence -->
                                <div class="attendenceTable" style="display: block;">
                                    <div class="header">
                                        <i class='bx bx-list-ul'></i>
                                        <h3 id="subject-table-header">All Courses</h3>
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
<script>
    let selectedCourseId;

    // Open the Edit Modal
    function openEditModal(courseId, courseName) {
        selectedCourseId = courseId;
        document.getElementById('subject-edited-name').value = courseName;
        const editModal = new bootstrap.Modal(document.getElementById('edit-subject'));
        editModal.show();
    }

    // Save Edited Course
    document.getElementById('save-new-subject-name').addEventListener('click', () => {
        const updatedName = document.getElementById('subject-edited-name').value.trim();

        if (!updatedName) {
            alert('Subject name cannot be empty.');
            return;
        }

        // AJAX request to update the course
        fetch('../assets/updateCourse.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id: selectedCourseId, name: updatedName }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Course updated successfully.');
                    location.reload();
                } else {
                    alert('Failed to update the course.');
                }
            })
            .catch(error => console.error('Error:', error));
    });

    // Open the Delete Modal
    function openDeleteModal(courseId) {
        selectedCourseId = courseId;
        const deleteModal = new bootstrap.Modal(document.getElementById('delete-confirmation-modal'));
        deleteModal.show();
    }

    // Confirm and Delete the Course
    function deleteSubject() {
        // AJAX request to delete the course
        fetch('../assets/deleteCourse.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id: selectedCourseId }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Course deleted successfully.');
                    location.reload();
                } else {
                    alert('Failed to delete the course.');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('add-subject-btn').addEventListener('click', () => {
            const courseName = document.getElementById('newSubjectName').value.trim();

            if (!courseName) {
                alert('Course name cannot be empty.');
                return;
            }

            fetch('../assets/addCourses.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name: courseName }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Course added successfully.');
                        location.reload(); // Refresh the page to update the list
                    } else {
                        alert('Failed to add the course.');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });

</script>

<!-- <script src="../assets/js/subjects.js"></script> -->
<?php include('partials/_footer.php'); ?>