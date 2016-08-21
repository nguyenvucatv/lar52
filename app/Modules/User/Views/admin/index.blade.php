@extends('theme.admin.admin2.master')

@section('title','Users manager')

{{-- Style --}}
@section('style')

	
     
@stop

{{-- Content --}}
@section('content')	

     <div class="portlet-body">
          <div class="portlet light ">

          	{{-- Title --}}
	          <div class="portlet-title">
	               <div class="caption font-dark">
	                    <i class="fa fa-users" aria-hidden="true"></i>
	                    <span class="caption-subject bold uppercase"> User manager</span>
	               </div>

	               <div class="actions">
	               	<a href="{{route('user.admin.create')}}" class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Create</a>

	               	<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete user select</a>
	                    
	               </div>
	          </div>
               
               {{-- Body --}}
               <div class="portlet-body">
                    <div id="sample_3_wrapper" class="dataTables_wrapper no-footer">

                    	<div class="row">


                          <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_3" role="grid" aria-describedby="sample_3_info">
                                   
                                   <thead class="bg-green">                                        
                                        <tr role="row">
                                          <th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 20px;">
                                                  <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                       <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes">
                                                       <span></span>
                                                  </label>
                                             </th>

                                             <th class="text-center">Username</th>
                                             <th class="text-center">Email</th>
                                             <th class="text-center">Active</th>
                                             <th class="text-center">Action</th>
                                        </tr>
                                   </thead>
                                    @if (count($users) > 0)
                                      @foreach ($users as $user)                                       
                                      
                                       <tbody>

                                          <tr class="gradeX odd" role="row">
                                                 <td>
                                                     <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>

                                                <td>{{$user->name}}</td>

                                                <td>
                                                    <a href="mailto:{{$user->email}}"> {{$user->email}}</a>
                                                </td>

                                                <td class="text-center">
                                                  @if ($user->active == 1)
                                                    Yes
                                                  @else
                                                    No
                                                  @endif
                                                
                                                </td>
                                                <td class="text-center">
                                                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-search" aria-hidden="true"></i> View</a>

                                                  <a href="{{ route('user.admin.edit', $user->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                                  <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                                </td>
                                            </tr>                                   
                                        
                                       </tbody>
                                      @endforeach
                                    @endif

                        </table> 
                        
                    		                                   
                      </div>
                    </div>
               </div> 
          </div>      
     </div>
@stop

{{-- Script --}}
@section('script')	
	
@stop