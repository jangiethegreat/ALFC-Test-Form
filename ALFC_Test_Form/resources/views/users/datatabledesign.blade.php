@extends('layouts.app')

@section('content')


<style>
    #example {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    #example thead {
        background-color: #f2f2f2;
    }

    #example th,
    #example td {
        padding: 8px;
        text-align: left;
        font-size: 12px;
        border-bottom: 1px solid #ddd;
        width: auto;
    }
    .adjustable-cell {
        display: inline-block;
        width: auto;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        
    }
    .adjustable-address {
        display: inline-block;
        width: auto;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .status {
            padding: .2rem 5px;
            border-radius: 3rem;
            display: inline-block;
            width: auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
            
    }
    .status.pending {
        background-color: #FEFFD1;
        color:#AB6C15;
        text-align: center;
    }
    .status.approved {
        background-color: #D8F4EB;
        color:#1F4E3E;
        text-align: center;
    }

    @media (max-width: 768px) {
            .adjustable-cell,
            .adjustable-address,
            .status {
                width: auto;
                display: block;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
        }
</style>

<div class="container">
    <div class="table-responsive">
        <table class="table" id="example">
            <thead>
                <tr>
                    <th>Name</th>
                    <th >Address</th>
                    <th>Birthdate</th>
                    <th>Contact No.</th>
                    <th>Company</th>
                    <th>Existing Insurance Provider</th>
                    <th>Status</th>
                    <th> Action </th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
        $(document).ready(function() {
                $('#example').DataTable({
                    processing: true,
                    serverSide: false,
                    ajax: "{{ route('fetch.data') }}",
                    columns: [
                        { 
                            data: null,
                            render: function(data, type, row) {
                                return '<span class="adjustable-cell">' + row.Name + '<br>' + '<span style="font-size: 10px; color: gray;">'+row.Policy +'</span>';
                            },
                            name: 'NamePolicy',
                            title: 'Name' 
                        },
                        {
                            data: null,
                            render: function(data,type,row){
                                return '<span class="adjustable-address">' + row.Address
                            },
                            name: 'Address',
                            title: '<span class="adjustable-cell">Address</span>'
                        },
                        { 
                            data: null,
                            render: function(data, type, row) {
                                return '<span class="adjustable-cell">' + row.Birthdate + '<br>' + '<span style="font-size: 10px; color: gray;">'+row.Birthplace +'</span>';
                            },
                            name: 'Birthdate', 
                            title: 'Birthdate'
                        },

                        { data: 'Contact_No', name: 'Contact No.' },
                        { 
                            data: null,
                            render: function(data, type, row) {
                                return '<span class="adjustable-cell">' + row.Company + '<br>' + '<span style="font-size: 10px; color: gray;">'+row.Position +'</span>';
                            },
                            name: 'Company', 
                            title: 'Company' 
                        },
                        {
                            data: null,
                            render: function(data,type,row){
                                return '<span class="adjustable-cell">' + row.Existing_Insurance_Provider
                            },
                            name: 'Existing Insurance Provider',
                            title: '<span class="adjustable-cell">Existing Insurance Provider</span>'
                        },

                        {
                            data: 'Status',
                            name: 'Status',
                            title: 'Status',
                            render: function(data,type,row){
                                if (data === 'Approved') {
                                        return '<span class="status approved" ><b>Approved</b></span>';
                                    }
                                else  {
                                    return '<span class="status pending">' + row.Status
                                    }
                            },
                            
                        },
                        {
                                data: null,
                                render: function(data, type, row) {
                                    return '<button class="btn btn-sm" style="background-color: transparent; color: #D3D3D3;" onclick="viewDetails(' + row.id + ')">View</button>';
                                },
                                title: 'Action',
                                orderable: false, 
                                searchable: false 
                            }
                    ]
                });
            });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

        
@endsection
