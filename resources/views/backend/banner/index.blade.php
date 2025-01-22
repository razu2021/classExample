@extends('layouts.adminmaster')
@section('admin_content')

          <!-- Content wrapper -->
          <div class="content-wrapper mb-5">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card mb-5">
                {{-- table header  --}}
                <div class="row pt-2 pb-2">
                    <div class="col-lg-8">
                        <div class="table_title">
                            <h5>Banner information</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table_title d-flex justify-content-end">
                            <button class="btn btn-success mx-2 text-white"> <a href="{{route('banner.add')}}" class="text-white">Add Banner Information </a></button>
                        </div>
                    </div>

                </div>

               
               
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                   
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>01</strong></td>
                        <td>banner all</td>
                        <td> banner info</td>
                        <td><span class="badge bg-label-primary me-1">01-10-2025</span></td>
                        <td><span class="badge bg-label-primary me-1">active</span></td>
                        <td>
                         <button class="btn btn-success">Action </button>
                        </td>
                      </tr>

                    

                     
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

@endsection