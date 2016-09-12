@extends('layouts.app')

@section('htmlheader_title')
    Students
@endsection

@section('contentheader_title')
    Students
@endsection

@section('contentheader_description')
    List of students
@endsection

@section('main-content')
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr role="row">
            <th rowspan="1" colspan="1">First Name</th>
            <th rowspan="1" colspan="1">Middle Name</th>
            <th rowspan="1" colspan="1">Last Name</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th rowspan="1" colspan="1">First Name</th>
            <th rowspan="1" colspan="1">Middle Name</th>
            <th rowspan="1" colspan="1">Last Name</th>
        </tr>
        </tfoot>
        <tbody>
        <tr role="row" class="odd">
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
        </tr>
        <tr role="row" class="even">
            <td>Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
        </tr>
        <tr role="row" class="odd">
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
        </tr>

        </tbody>
    </table>
@endsection



@section('scripts')
    @include('layouts.partials.scripts')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@endsection