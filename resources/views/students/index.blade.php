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
            <th rowspan="1" colspan="1">Last Name</th>
            <th rowspan="1" colspan="1">First Name</th>
            <th rowspan="1" colspan="1">Middle Name</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Last Name</th>
            <th rowspan="1" colspan="1">First Name</th>
            <th rowspan="1" colspan="1">Middle Name</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($students as $student)
        <tr role="row">
            <td>{{$student->last_name}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->middle_name}}</td>
        </tr>
        @endforeach
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