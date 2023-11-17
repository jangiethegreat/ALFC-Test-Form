@extends('layouts.app')

@section('content')
<style>
.custom-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  height: 19.048px;
  flex-shrink: 0;
  background-color: #DA2520;
  border: none;
  color: white;
  font-size: 14px;
  padding-left: 5px;
}

.custom-button .icon {
  width: 15px; /* Adjust the width and height of your icon */
  height: 15px;
  margin-right: -5px;
  vertical-align: middle;
}
.custom-button .button-text {
  color: #FFF;
  font-size: 8px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  width: 100%;
  height: 10px;
  flex-shrink: 0;
}
@media screen and (min-width: 900px) {
    .container{
    margin-top: 20px;

    }
}

@media screen and (min-width: 1920px) {
.container{
    transform: scale(1.25);
    position: center;
    margin-top: 200px;


}
}











</style>

    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-md-10">
                <div class="card" >
                    <div class="card-body">
                        <h2 style="color: #AB3333; font-family: Montserrat; font-size: 40px; font-style: normal; font-weight: 1000; line-height: normal; text-align: center; margin-top: 30px;">
                            Agent’s Application Form
                        </h2>
                        <div>
                        <p style="color: #4A4A4A; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; height: 23px; flex-shrink: 0; margin-top: 56px; margin-bottom: 56px; ">
                            Agent Profile <br>
                            <span style="width: 577px; flex-shrink: 0; color: #414141; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 500; line-height: normal;">
                                Please input the personal information of the agent in the designated fields below.
                            </span>                            
                        </p>
                        <p class="col-md-12" style="border-bottom: 1px solid #E2E2E2; "></p>
                        </div>


                        <div class ="row row-space">
                            <div class="col-md-4 mb-3">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                    @error('last_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>


                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Middle Name</label>
                                <input type="text" id="middle_name" name="middle_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                    @error('middle_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>



                        </div>

                        <div class ="row row-space">
                            <div class="col-md-12 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Address</label>
                                <input type="text" id="address" name="address" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>


                        <div class ="row row-space">
                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Contact Number</label>
                                <input type="text" id="contact_number" name="contact_number" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('contact_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">SSS No.</label>
                                <input type="text" id="sss_number" name="sss_number" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('sss_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">TIN</label>
                                <input type="text" id="tin_number" name="tin_number" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('tin_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class ="row row-space">
                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Date of Birth</label>
                                <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('date_of_birth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Place of Birth</label>
                                <input type="text" id="place_of_birth" name="place_of_birth" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('place_of_birth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            

                        </div>

                        <div class ="row row-space">
                            <div class="col-md-12 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Email Address</label>
                                <input type="text" id="email_address" name="email_address" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class ="row row-space">
                        <div class="col-md-4 mb-3" >
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Sex</label>
                            <input type="text" id="sex" name="sex" class="form-control" style=" height: 38px; background: #F4F4F4;">
                            @error('sex')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Civil Status</label>
                            <input type="text" id="civil_status" name="civil_status" class="form-control" style=" height: 38px; background: #F4F4F4;">
                            @error('civil_status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        </div>

                        <div class ="row row-space">
                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;"><br>Name of Spouse (maiden name)<br>First Name</label>
                                <input type="text" id="spouse_first_name" name="spouse_first_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('spouse_first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;"><br><br>Last Name spouse</label>
                                <input type="text" id="last_name_spouse" name="last_name_spouse" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('last_name_spouse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;"><br><br>Middle Name Spouse</label>
                                <input type="text" id="middle_name_spouse" name="middle_name_spouse" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('middle_name_spouse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>

                        <div class ="row row-space">
                        <div class="col-md-4 mb-3">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Existing Insurance Provider</label>
                            <input type="text" id="existing_insurance_provider" name="existing_insurance_provider" class="form-control" style=" height: 38px; background: #F4F4F4;">
                            @error('existing_insurance_provider')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>


                        <div class ="row row-space">
                        <div class="col-md-4 mb-3" >
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Bank Name</label>
                            <input type="text" id="bank_name" name="bank_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                            @error('bank_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-4 mb-3" >
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Account Number</label>
                            <input type="text" id="account_number" name="account_number" class="form-control" style=" height: 38px; background: #F4F4F4;">
                            @error('account_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        </div>

                        <div>
                        <p style="color: #4A4A4A; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; height: 23px; flex-shrink: 0; margin-top: 56px; margin-bottom: 56px; ">
                        Present Job <br>
                            <span style="width: 577px; flex-shrink: 0; color: #414141; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 500; line-height: normal;">
                            Please provide the current job information for the agent in the fields below.
                            </span>                            
                        </p>
                        <p class="col-md-12" style="border-bottom: 1px solid #E2E2E2;"></p>
                        </div>

                        <div class ="row row-space">
                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Name of Company</label>
                                <input type="text" id="company_name" name="company_name" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('company_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3" >
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Job Title</label>
                                <input type="text" id="job_title" name="job_title" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('job_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                        <div class ="row row-space">
                            <div class="col-md-12 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Business Address</label>
                                <input type="text" id="business_address" name="business_address" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('business_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class ="row row-space">
                            <div class="col-md-4 mb-3" style="margin-right: -11px;">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Telephone</label>
                                <input type="text" id="telephone" name="telephone" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3" style="margin-right: -11px;">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Phone Number</label>
                                <input type="text" id="phone_number_company" name="phone_number_company" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('phone_number_company')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">Fax</label>
                                <input type="text" id="fax" name="fax" class="form-control" style=" height: 38px; background: #F4F4F4;">
                                @error('fax')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div>
                        <p style="color: #4A4A4A; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; height: 23px; flex-shrink: 0; margin-top: 56px; margin-bottom: 56px; ">
                            Requirements <br>
                            <span style="width: 577px; flex-shrink: 0; color: #414141; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 500; line-height: normal;">
                            Please verify that the agent’s fulfilled requirements are marked as checked.                            </span>                            
                        </p>
                        <p  class="col-md-12" style="border-bottom: 1px solid #E2E2E2; "></p>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <input type="checkbox" id="validIDCheckBox" disabled>
                                        <span style="color: #626262; font-family: Montserrat; font-size: 10px; margin: 10px;">
                                            Valid ID
                                        </span>
                                    </div>
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <label for="fileInputForValidID" class="custom-button" style="display: flex; align-items: center; cursor: pointer;">
                                            <img src="{{ asset('assets/Upload.png') }}" alt="Icon" class="icon" style="margin-left: 7px; margin-right: 2px;">
                                            <span class="button-text" style="color: #FFF; font-family: Montserrat; font-size: 8px;">
                                                Choose a file...
                                            </span>
                                        </label>
                                        <input type="file" id="fileInputForValidID" onchange="checkFileForValidID()" style="display: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <input type="checkbox" id="bankProofCheckBox" disabled>
                                        <span style="width: 210px; color: #626262; font-family: Montserrat; font-size: 10px; margin-left: 5px;">
                                            Proof of Bank Account (Online / Bank Book)
                                        </span>
                                    </div>
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <label for="bankFileInput" class="custom-button" style="display: flex; align-items: center; cursor: pointer;">
                                            <img src="{{ asset('assets/Upload.png') }}" alt="Icon" class="icon" style="margin-left: 7px; margin-right: 2px;">
                                            <span class="button-text" style="color: #FFF; font-family: Montserrat; font-size: 8px; font-weight: 400;">
                                                Choose a file...
                                            </span>
                                        </label>
                                        <input type="file" id="bankFileInput" onchange="checkBankFile()" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space" style="margin-top: 15px;">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <input type="checkbox" id="picCheckBox" disabled>
                                        <span style="color: #626262; font-family: Montserrat; font-size: 10px; margin: 10px;">
                                            1x1 Picture
                                        </span>
                                    </div>
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <label for="picFileInput" class="custom-button" style="display: flex; align-items: center; cursor: pointer;">
                                            <img src="{{ asset('assets/Upload.png') }}" alt="Icon" class="icon" style="margin-left: 7px; margin-right: 2px;">
                                            <span class="button-text" style="color: #FFF; font-family: Montserrat; font-size: 8px;">
                                                Choose a file...
                                            </span>
                                        </label>
                                        <input type="file" id="picFileInput" onchange="checkPicFile()" style="display: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <input type="checkbox" id="commissionCheckBox" disabled>
                                        <span style="width: 210px; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal; margin-left: 5px;">
                                            Advance Commission Limit Guidelines
                                        </span>
                                    </div>
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <label for="commissionFileInput" class="custom-button" style="display: flex; align-items: center; cursor: pointer;">
                                            <img src="{{ asset('assets/Upload.png') }}" alt="Icon" class="icon" style="margin-left: 7px; margin-right: 2px;">
                                            <span class="button-text" style="color: #FFF; font-family: Montserrat; font-size: 8px; font-style: normal; font-weight: 400; line-height: normal;">
                                                Choose a file...
                                            </span>
                                        </label>
                                        <input type="file" id="commissionFileInput" onchange="checkCommissionFile()" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space" style="margin-top: 15px;">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <input type="checkbox" id="signedMOACheckBox" disabled>
                                        <span style="color: #626262; font-family: Montserrat; font-size: 10px; margin: 10px;">
                                            Signed MOA / Proposal
                                        </span>
                                    </div>
                                    <div class="col-6" style="display: flex; align-items: center;">
                                        <label for="fileInputMOA" class="custom-button" style="display: flex; align-items: center; cursor: pointer;">
                                            <img src="{{ asset('assets/Upload.png') }}" alt="Icon" class="icon" style="margin-left: 7px; margin-right: 2px;">
                                            <span class="button-text" style="color: #FFF; font-family: Montserrat; font-size: 8px;">
                                                Choose a file...
                                            </span>
                                        </label>
                                        <input type="file" id="fileInputMOA" onchange="checkSignedMOAFile()" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div style="display: flex; justify-content: flex-end; margin-top:50px; margin-bottom:10px;">
            
                        <button style="border-radius: 18px; background: transparent; width: 203px; height: 39px; flex-shrink: 0; border: none; outline: none;">
                            <span style="color: #B40C0C; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal;">
                                Cancel
                            </span>
                        </button>

                        <!-- to be change later -->
                        <form method="GET" action="{{ route('users.homepage') }}">
                            @csrf
                            <button style="border-radius: 18px; background: #980000; width: 203px; height: 39px; flex-shrink: 0; border: none; outline: none; margin-left: 10px;">
                                <span style="color: #FFF; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal;">
                                    Continue
                                </span>
                            </button>
                        </form>
                    </div>
           
            
            </div>
        </div>      
    </div>
</div>
    <script>
      function checkFileForValidID() {
        const fileInputForValidID = document.getElementById('fileInputForValidID');
        const validIDCheckBox = document.getElementById('validIDCheckBox');

        if (fileInputForValidID.files && fileInputForValidID.files.length > 0) {
            validIDCheckBox.disabled = false;
            validIDCheckBox.checked = true;
        } else {
            validIDCheckBox.disabled = true;
            validIDCheckBox.checked = false;
        }
    }

    function checkBankFile() {
        const bankFileInput = document.getElementById('bankFileInput');
        const bankProofCheckBox = document.getElementById('bankProofCheckBox');

        if (bankFileInput.files && bankFileInput.files.length > 0) {
            bankProofCheckBox.disabled = false;
            bankProofCheckBox.checked = true;
        } else {
            bankProofCheckBox.disabled = true;
            bankProofCheckBox.checked = false;
        }
    }
    function checkPicFile() {
    const picFileInput = document.getElementById('picFileInput');
        const picCheckBox = document.getElementById('picCheckBox');

        if (picFileInput.value) {
            picCheckBox.disabled = false;
            picCheckBox.checked = true;
        } else {
            picCheckBox.disabled = true;
            picCheckBox.checked = false;
        }
    }
    function checkCommissionFile() {
        const commissionFileInput = document.getElementById('commissionFileInput');
        const commissionCheckBox = document.getElementById('commissionCheckBox');

        if (commissionFileInput.files.length > 0) {
            commissionCheckBox.disabled = false;
            commissionCheckBox.checked = true;
        } else {
            commissionCheckBox.disabled = true;
            commissionCheckBox.checked = false;
        }
    }

    function checkSignedMOAFile() {
        const fileInputMOA = document.getElementById('fileInputMOA');
        const signedMOACheckBox = document.getElementById('signedMOACheckBox');

        if (fileInputMOA.files.length > 0) {
            signedMOACheckBox.disabled = false;
            signedMOACheckBox.checked = true;
        } else {
            signedMOACheckBox.disabled = true;
            signedMOACheckBox.checked = false;
        }
    }

    </script>
@endsection
