@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 741px;">
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
                        <p style="border-bottom: 1px solid #E2E2E2; width: 680px;margin-top:-30px"></p>
                        </div>


                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                        <div class ="row row-space">
                        <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 680px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class ="row row-space">
                        <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 680px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                        <div class ="row row-space">
                        <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 680px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div>
                        <p style="color: #4A4A4A; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; height: 23px; flex-shrink: 0; margin-top: 56px; margin-bottom: 56px; ">
                            Agent Profile <br>
                            <span style="width: 577px; flex-shrink: 0; color: #414141; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 500; line-height: normal;">
                                Please input the personal information of the agent in the designated fields below.
                            </span>                            
                        </p>
                        <p style="border-bottom: 1px solid #E2E2E2; width: 680px;margin-top:-30px"></p>
                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class ="row row-space">
                        <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 680px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class ="row row-space">
                            <div class="col-4" style="margin-right:-11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4" style="margin-right: -11px;">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                            <label class="label" style="color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" style="width: 214px; height: 38px; background: #F4F4F4;">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                        <p style="color: #4A4A4A; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; height: 23px; flex-shrink: 0; margin-top: 56px; margin-bottom: 56px; ">
                            Agent Profile <br>
                            <span style="width: 577px; flex-shrink: 0; color: #414141; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 500; line-height: normal;">
                                Please input the personal information of the agent in the designated fields below.
                            </span>                            
                        </p>
                        <p style="border-bottom: 1px solid #E2E2E2; width: 680px;margin-top:-30px"></p>
                        </div>

                        <div class ="row row-space">
                            <div class="col-6" style="margin-right:-11px;">
                                <input type="checkbox" id="checkBox" disabled>
                                <span style="width: 99px; height: 12px; flex-shrink: 0; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">
                                    Valid ID
                                </span>
                                <button onclick="document.getElementById('fileInput').click()">Upload File</button>
                            <input type="file" id="fileInput" onchange="checkFile()" style="display: none;">
                        </div>
                        
                        <div class="col-6" style="margin-right:-11px;">
                            <input type="checkbox" id="checkBox" disabled>
                            <span style="width: 99px; height: 12px; flex-shrink: 0; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">
                                    Proof of Bank Account (Online / Bank Book)
                                </span>
                                <button onclick="document.getElementById('fileInput').click()">Upload File</button>
                                <input type="file" id="fileInput" onchange="checkFile()" style="display: none;">
                            </div>
                        </div>

                        <div class ="row row-space">
                            <div class="col-6" style="margin-right:-11px;">
                                    <input type="checkbox" id="checkBox" disabled>
                                    <span style="width: 99px; height: 12px; flex-shrink: 0; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">
                                    1x1 Picture
                                </span>
                                    <button onclick="document.getElementById('fileInput').click()">Upload File</button>
                                <input type="file" id="fileInput" onchange="checkFile()" style="display: none;">
                            </div>

                            <div class="col-6" style="margin-right:-11px;">
                                <input type="checkbox" id="checkBox" disabled>
                                <span style="width: 99px; height: 12px; flex-shrink: 0; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">
                                    Advance Commission Limit Guidelines
                                </span>
                                    <button onclick="document.getElementById('fileInput').click()">Upload File</button>
                                <input type="file" id="fileInput" onchange="checkFile()" style="display: none;">
                            </div>

                        </div>
                            <div class ="row row-space">
                                <div class="col-6" style="margin-right:-11px;">
                                    <input type="checkbox" id="checkBox" disabled>
                                    <span style="width: 99px; height: 12px; flex-shrink: 0; color: #626262; font-family: Montserrat; font-size: 10px; font-style: normal; font-weight: 400; line-height: normal;">
                                    Signed MOA / Proposal
                                </span>
                                    <button onclick="document.getElementById('fileInput').click()">Upload File</button>
                                <input type="file" id="fileInput" onchange="checkFile()" style="display: none;">
                            </div>
                        </div>




                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkFile() {
            const fileInput = document.getElementById('fileInput');
            const checkBox = document.getElementById('checkBox');

            if (fileInput.value) {
                checkBox.disabled = false;
                checkBox.checked = true;
            } else {
                checkBox.disabled = true;
                checkBox.checked = false;
            }
        }
    </script>
@endsection
