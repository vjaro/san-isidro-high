@extends('layouts.app')

@section('htmlheader_title')
    Create Students
@endsection

@section('contentheader_title')
    Create a new student
@endsection

@section('contentheader_description')
    This section allows you to create a new student entry
@endsection

@section('main-content')

   <div class="box box-primary">
       <div class="box-header with-border">
           <h3 class="box-title">Student Information</h3>
       </div>
       <form role="form">
           <div class="box-body">
               <div class="form-group">
                   <label for="studentFirstName">First Name</label>
                   <input type="text" class="form-control" id="studentFirstName" placeholder="Enter first name">
               </div>
               <div class="form-group">
                   <label for="studentMiddlename">Middle Name</label>
                   <input type="text" class="form-control" id="studentMiddlename" placeholder="Enter middle name">
               </div>
               <div class="form-group">
                   <label for="studentLastName">Last Name</label>
                   <input type="text" class="form-control" id="studentLastName" placeholder="Enter last name">
               </div>
           </div>
           <!-- /.box-body -->

           <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </form>
   </div>
@endsection