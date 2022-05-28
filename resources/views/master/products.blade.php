@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <table id="example" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function () {
      
        // var table = $('#example').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: "{{ route('master.products.list') }}",
        //     columns: [
        //         {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        //         {data: 'name', name: 'name'},
        //         {data: 'gender', name: 'gender'},
        //         {data: 'email', name: 'email'},
        //         {data: 'phone', name: 'phone'},
        //         {
        //             data: 'action', 
        //             name: 'action', 
        //             orderable: true, 
        //             searchable: true
        //         },
        //     ]
        // });
        console.log("hy")
      
    });
</script>
@endsection