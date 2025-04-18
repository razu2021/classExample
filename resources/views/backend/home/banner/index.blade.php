@extends('layouts.adminmaster')
@section('admin_contents')
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- table start here  --}}
                <div class="card">
                   <div class="row pt-2">
                    <div class="col-lg-6">
                        <h3 class="card-header">All Information</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="button d-flex justify-content-end mt-2 ">
                            <a href="{{url('home-banner/add')}}}"><button class="btn btn-warning ">Recycle</button></a>
                            <a href="{{url('home-banner/add')}}"><button class="btn btn-success mx-4">Add Item</button></a>
                        </div>
                    </div>
                   </div> 
                    <div class=" text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Banne Heading</th>
                            <th>Banner Title</th>
                            <th>Banner Caption</th>
                            <th>Banner image</th>
                            <th>Public Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                          @foreach ($all as $data)
                            <tr>
                              <td>{{ $data->banner_id }}</td>
                              <td>{{$data->banner_heading}}</td>
                              <td>{{$data->banner_title}} </td>
                              <td>{{Str::words($data->banner_caption ,10)}} </td>
                              <td>{{$data->banner_image}} </td>
                              <td>{{$data->public_status}} </td>
                              <td><span class="badge bg-label-primary me-1">Active</span></td>

                              <td>
                                <div class="btn-group">
                                  <button type="button"class="btn btn-primary dropdown-toggle"data-bs-toggle="dropdown"aria-expanded="false">Primary </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('home-banner/edit')}}">Edit</a></li>
                                    <li><a class="dropdown-item" href="{{url('home-banner/view')}}">view</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    <li>
                                      <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                  </ul>
                                </div>
                              </td>
                            </tr>

                          @endforeach


 


                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!--/ Basic Bootstrap Table -->
                {{-- table start  end here  --}}
            </div>
        </div>
    </div>
</section>




@endsection