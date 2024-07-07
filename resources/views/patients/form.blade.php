<div class="mb-0">
    <!--begin::Row-->
    <div class="row gx-10 mb-5">
        <!--begin::Col-->
        <div class="col-lg-6">


            <label
                class="form-label fs-6 fw-bold text-gray-700 mb-3">Name <span class="text-danger">*</span></label>
            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" class="form-control form-control-solid  @error('name') is-invalid @enderror"
                       name="name"
                       value="{{old('name') ?? $patient->name}}"
                       placeholder="Full Name"/>


                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <!--end::Input group-->


            <label
                class="form-label fs-6 fw-bold text-gray-700 mb-3">Phone <span class="text-danger">*</span></label>
            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text"
                       class="form-control form-control-solid @error('contact_information') is-invalid @enderror"
                       name="contact_information"
                       placeholder="Contact information"
                       value="{{old('contact_information') ?? $patient->contact_information}}"

                />


                @error('contact_information')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <!--end::Input group-->


            <label
                class="form-label fs-6 fw-bold text-gray-700 mb-3">DOB <span class="text-danger">*</span></label>
            <!--begin::Input-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Datepicker-->
                <input
                    name="date_of_birth"
                    class="form-control form-control-transparent fw-bold pe-5 @error('date_of_birth') is-invalid @enderror"
                    placeholder="Select date of birth"
                    value="{{old('date_of_birth') ?? $patient->date_of_birth}}"


                />
                <!--end::Datepicker-->
                <!--begin::Icon-->
                <i class="ki-duotone ki-down fs-4 position-absolute end-0 ms-4"></i>


                <!--end::Icon-->


            </div>
            <br>
            @error('date_of_birth')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <!--end::Input-->


            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Medical
                History <span class="text-danger">*</span></label>

            <!--begin::Input group-->
            <div class="mb-5">
                                                        <textarea class="form-control form-control-solid"
                                                                  name="medical_history"
                                                                  rows="3"
                                                                  placeholder="Medical History">{{old('medical_history') ?? $patient->medical_history}}</textarea>


                @error('medical_history')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <!--end::Input group-->

        </div>
        <!--end::Col-->


        <!--begin::Col-->
        <div class="col-lg-6">


            <label
                class="form-label fs-6 fw-bold text-gray-700 mb-3">Country <span class="text-danger">*</span></label>
            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" class="form-control form-control-solid @error('country') is-invalid @enderror"
                       name="country"
                       placeholder="Country"
                       value="{{old('country') ?? $patient->country}}"


                />


                @error('country')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <!--end::Input group-->


            <label
                class="form-label fs-6 fw-bold text-gray-700 mb-3">City <span class="text-danger">*</span></label>
            <!--begin::Input group-->
            <div class="mb-5">
                <input type="text" class="form-control form-control-solid @error('city') is-invalid @enderror"
                       name="city"
                       placeholder="City"
                       value="{{old('city') ?? $patient->city}}"

                />


                @error('city')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <!--end::Input group-->


            <!--begin::Input group-->
            <div class="mb-5">
                <label for="exampleSelect" class="form-label">Gender <span class="text-danger">*</span></label>
                <select class="form-select form-select-solid @error('gender') is-invalid @enderror"
                        aria-label="Select example" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male"
                        {{ old('gender', isset($patient) ? $patient->gender : '') == 'male' ? 'selected' : '' }}
                    >Male
                    </option>
                    <option value="female"
                        {{ old('gender', isset($patient) ? $patient->gender : '') == 'female' ? 'selected' : '' }}


                    >Female
                    </option>
                    <option value="other"

                        {{ old('gender', isset($patient) ? $patient->gender : '') == 'other' ? 'selected' : '' }}


                    >Other
                    </option>

                </select>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <!--end::Input group-->

        </div>
        <!--end::Col-->


    </div>
    <!--end::Row-->


    <!--begin::Table wrapper-->
    <div class="table-responsive mb-10">
        <!--begin::Table-->
        <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700"
               data-kt-element="items">
            <!--begin::Table head-->
            <thead>
            <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                <th class="min-w-300px w-475px">Name</th>

                <th class="min-w-75px w-75px text-end">Action</th>
            </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
            @foreach($patient->medications as $medication)

                <tr class="border-bottom border-bottom-dashed"
                    data-kt-element="item">

                    <td class="pe-7">
                        <input type="text" class="form-control form-control-solid mb-2" name="medication_name[]"
                               placeholder="Medicine name" value="{{$medication->name}}"/>
                    </td>


                    <td class="pt-5 text-end">
                        <button type="button" class="btn btn-sm btn-icon btn-active-color-primary"
                                data-kt-element="remove-item">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>
            <!--end::Table body-->
            <!--begin::Table foot-->
            <tfoot>
            <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                <th class="text-primary">
                    <button class="btn btn-link py-1"
                            data-kt-element="add-item">Add Medication
                    </button>
                </th>

            </tr>
            </tfoot>
            <!--end::Table foot-->
        </table>
    </div>
    <!--end::Table-->
    <!--begin::Medications template-->
    <table class="table d-none" data-kt-element="item-template">
        <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
            <td class="pe-7">
                <input type="text" class="form-control form-control-solid mb-2"
                       name="medication_name[]" placeholder="Medicine name"/>
            </td>


            <td class="pt-5 text-end">
                <button type="button"
                        class="btn btn-sm btn-icon btn-active-color-primary"
                        data-kt-element="remove-item">
                    <i class="ki-duotone ki-trash fs-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                </button>
            </td>
        </tr>
    </table>
    <table class="table d-none" data-kt-element="empty-template">
        <tr data-kt-element="empty">
            <th colspan="5" class="text-muted text-center py-10">No
                Medications
            </th>
        </tr>
    </table>
    <!--end::Medications template-->

</div>
