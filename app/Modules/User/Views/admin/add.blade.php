@extends('theme.admin.admin2.master')

@section('title','Create User')

{{-- Style --}}
@section('style')	
     
@endsection

{{-- Content --}}
@section('content')	
  
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-sm-offset-2 col-md-offset-3 col-sm-offset-4">
      <div class="portlet light ">
        <div class="portlet-title">
            <h4 class="text-center caption-subject bold uppercase">add new user</h4>
        </div>

        @include('theme.admin.admin2.errors')

        <div class="portlet-body form">
          <form role="form" action="{{route('user.admin.store')}}" method="POST">
            <input type="hidden" name="_token" id="input_token" value="{{csrf_token()}}">
            <div class="form-body"> 

              <div class="form-group">                        
                  <div class="input-group">
                      <span class="input-group-addon input-circle-left">
                          <i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                      <input type="text" name="name" value="{{old('name')}}" class="form-control input-circle-right" placeholder="Full name"> </div>
              </div>                   

              <div class="form-group">                        
                  <div class="input-group">
                      <span class="input-group-addon input-circle-left">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                      </span>
                      <input type="text" name="email" value="{{old('email')}}" class="form-control input-circle-right" placeholder="Email Address"> </div>
              </div>

              <div class="form-group">                        
                  <div class="input-group">
                      <span class="input-group-addon input-circle-left">
                          <i class="fa fa-key" aria-hidden="true"></i>
                      </span>
                      <input type="password" name="password" class="form-control input-circle-right" placeholder="Password"> </div>
              </div>    

              <div class="form-group">                        
                  <div class="input-group">
                      <span class="input-group-addon input-circle-left">
                          <i class="fa fa-key" aria-hidden="true"></i>
                      </span>
                      <input type="password" name="confirmpassword" class="form-control input-circle-right" placeholder="Confirm Password"> </div>
              </div>           
               
              <div class="form-group">                  
                  <div class="mt-checkbox-list">
                      <label class="mt-checkbox mt-checkbox-outline"> Active
                          <input type="checkbox" value="0" name="active" id="checkbox">
                          <span></span>
                      </label>                      
                  </div>
              </div>
                
              <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <a href="{{route('user.admin.index')}}" class="btn btn-default pull-right">Cancel</a>                  
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  
     
@endsection

{{-- Script --}}
@section('script')	
	<script>
    $(document).ready(function(){
      $(#checkbox).click(function(){
          if(this.checked) {
            $(#checkbox).value('1')
          }else{
            $(#checkbox).value('0')
          }
      })
    }); 
  </script>
@endsection