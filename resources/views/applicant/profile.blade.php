<x-navbar>
    <x-layout class="h-100">

        <div class="conntainer mb-5">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle" width="150px"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body border-top border-top-4 border-bottom border-bottom-4 border-primary">
                            <div class="container d-flex justify-content-between mt-3">
                                <h2>Profile</h2>
                                <a href="/profiles/{{ $applicant->id }}/edit"
                                    style="font-size: 16px; text-decoration: none;">
                                    <i class="bi bi-pencil-square">&nbsp;</i>Edit Profile</a>
                            </div>
                            <div class="container mb-4 mt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <label for="first_name">
                                                <h6>First Name</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="first_name"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="middle_name">
                                                <h6>Middle Name</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="middle_name"
                                                name="middle_name" value="" style="background-color: #fff;"
                                                readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="last_name">
                                                <h6>Last Name</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="last_name"
                                                name="last_name" value="" style="background-color: #fff;"
                                                readonly>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <div>
                                                    <label for="age">
                                                        <h6>Age</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="age" name="age" value=""
                                                        style="background-color: #fff;" readonly>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div>
                                                    <label for="gender">
                                                        <h6>Gender</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="gender" value="" style="background-color: #fff;"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <div>
                                                    <label for="civil_status">
                                                        <h6>Civil Status</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="civil_status" value="" style="background-color: #fff;"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div>
                                                    <label for="nationality">
                                                        <h6>Nationality</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="nationality" value="" style="background-color: #fff;"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label for="educational_attainment">
                                                <h6>Educational Attainment</h6>
                                            </label>
                                            <input class="form-control form-control" type="text"
                                                id="educational_attainment" value=""
                                                style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="desired_school">
                                                <h6>Desired School</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="desired_school"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="school_last_attended">
                                                <h6>School Last Attended</h6>
                                            </label>
                                            <input class="form-control form-control" type="text"
                                                id="school_last_attended" value="" style="background-color: #fff;"
                                                readonly>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <div>
                                                    <label for="hei_type">
                                                        <h6>HEI Type</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="hei_type" name="hei_type" value=""
                                                        style="background-color: #fff;" readonly>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div>
                                                    <label for="gwa">
                                                        <h6>General Weighted Avg</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="gwa" name="gwa" value=""
                                                        style="background-color: #fff;" readonly>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- NEXT COLUMN --}}
                                    <div class="col-6">

                                        <div>
                                            <label for="course_name">
                                                <h6>Course</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="course_name"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="contact_number">
                                                <h6>Contact Number</h6>
                                            </label>
                                            <input class="form-control form-control" type="text"
                                                id="contact_number" value="" style="background-color: #fff;"
                                                readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="email">
                                                <h6>Email</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="email"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <div>
                                                    <label for="years_in_city">
                                                        <h6>No. years in city</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="years_in_city" value=""
                                                        style="background-color: #fff;" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <label for="family_income">
                                                        <h6>Family Income</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="family_income" value=""
                                                        style="background-color: #fff;" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label for="street">
                                                <h6>Street</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="street"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="barangay">
                                                <h6>Barangay</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="barangay"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="city">
                                                <h6>City</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="city"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="mt-2">
                                            <label for="province">
                                                <h6>Province</h6>
                                            </label>
                                            <input class="form-control form-control" type="text" id="province"
                                                value="" style="background-color: #fff;" readonly>
                                        </div>

                                        <div class="row mt-2">

                                            <div class="col-6">
                                                <div>
                                                    <label for="region">
                                                        <h6>Region</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="region" value="" style="background-color: #fff;"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div>
                                                    <label for="zipcode">
                                                        <h6>Zipcode</h6>
                                                    </label>
                                                    <input class="form-control form-control" type="text"
                                                        id="zipcode" value="" style="background-color: #fff;"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </x-layout>
</x-navbar>
