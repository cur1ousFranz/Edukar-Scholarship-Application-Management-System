<x-navbar>
    <x-layout>

        <div class="d-flex justify-content-between">
            <h4 class="mt-3">Qualified Applicant List</h4>
            <div class="d-flex">
                <div>
                    <button class="btn btn-outline-success me-3"
                    data-bs-toggle="modal" data-bs-target="#message">
                        <i class="bi bi-envelope-plus-fill"></i>
                    </button>

                    {{-- MESSAGE MODAL --}}
                    <div class="modal fade" id="message">
                        <div class="modal-dialog modal-lg modal-dialog-centered text-center" >
                          <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                                <h4 class="modal-title">Create Announcement</h4>
                            </div>
                            <div class="modal-body">
                                <h5>Are you sure you want to proceed?</h5>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-danger"
                                data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-outline-primary"
                                form="checkboxForm" name="action" value="qualified">
                                    Send
                                </button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="scroll2 border">
                <table class="table table-striped table-bordered">
                    <thead class="text-center text-dark" id="applicantListHeader">
                        <tr>
                            <th scope="col" class="bg-light">Document</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Civil Status</th>

                            <th scope="col">Street</th>
                            <th scope="col">Barangay</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Region</th>
                            <th scope="col">Zipcode</th>

                            <th scope="col">Contact Number</th>
                            <th scope="col">Contact Email</th>

                            <th scope="col">Desired School</th>
                            <th scope="col">Course</th>
                            <th scope="col">HEI Type</th>
                            <th scope="col">School Last Attended</th>

                            <th scope="col">Nationality</th>
                            <th scope="col">Educational Attainment</th>
                            <th scope="col">No. Years in City</th>
                            <th scope="col">Family Income</th>
                            <th scope="col">Registered Voter</th>
                            <th scope="col">GWA</th>

                        </tr>
                    </thead>
                    {{-- RETRIEVING APPLICANT DATA ACCORDING TO ITS CURRENT ID IN LOOP --}}
                    <tbody class="text-center" id="applicantListHeader">
                        <?php

                    if(!$qualifiedApplicantList->isEmpty()){

                        foreach($qualifiedApplicantList as $qualifiedApplicantLists){
                            $applicant = Illuminate\Support\Facades\DB::table('applicants')
                                ->where('id', $qualifiedApplicantLists->applicants_id)
                                ->first();

                            $address = Illuminate\Support\Facades\DB::table('addresses')
                            ->where('applicants_id', $qualifiedApplicantLists->applicants_id)
                            ->first();

                            $school = Illuminate\Support\Facades\DB::table('schools')
                            ->where('applicants_id', $qualifiedApplicantLists->applicants_id)
                            ->first();

                            $contact = Illuminate\Support\Facades\DB::table('contacts')
                            ->where('applicants_id', $qualifiedApplicantLists->applicants_id)
                            ->first();

                            ?>
                                <tr>
                                    <td>
                                        <a class="text-decoration-none" href="/storage/{{ $qualifiedApplicantLists->document }}" target="_blank">View</a>
                                    </td>
                                    <td>{{ $applicant->first_name }}</td>
                                    <td>{{ $applicant->middle_name }}</td>
                                    <td>{{ $applicant->last_name }}</td>
                                    <td>{{ $applicant->age }}</td>
                                    <td>{{ $applicant->gender }}</td>
                                    <td>{{ $applicant->civil_status }}</td>
                                    <td>{{ $address->street }}</td>
                                    <td>{{ $address->barangay }}</td>
                                    <td>{{ $address->city }}</td>
                                    <td>{{ $address->province }}</td>
                                    <td>{{ $address->region }}</td>
                                    <td>{{ $address->zipcode }}</td>
                                    <td>{{ $contact->contact_number }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $school->desired_school }}</td>
                                    <td>{{ $school->course_name }}</td>
                                    <td>{{ $school->hei_type }}</td>
                                    <td>{{ $school->school_last_attended }}</td>
                                    <td>{{ $applicant->nationality }}</td>
                                    <td>{{ $applicant->educational_attainment }}</td>
                                    <td>{{ $applicant->years_in_city }}</td>
                                    <td>{{ $applicant->family_income }}</td>
                                    <td>{{ $applicant->registered_voter }}</td>
                                    <td>{{ $applicant->gwa }}</td>
                                </tr>
                        <?php

                        }

                    }   else{

                        ?>
                        <tr>
                            <td colspan="25">No submissions yet</td>
                        </tr>
                        <?php

                        }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
        {{-- <div class="container mt-3">
            {{ $applicantList->links('pagination::bootstrap-5') }}
        </div> --}}

    </x-layout>
</x-navbar>
