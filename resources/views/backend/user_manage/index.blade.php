@extends('layouts.adminmaster')
@section('admin_content')
          <!-- Content wrapper -->
          <div class="content-wrapper mb-5">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card mb-5">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($userdata as $data)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$data->id}}</strong></td>
                        <td>{{$data->name}}</td>
                        <td> {{$data->email}}</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                         <button class="btn btn-success">Action </button>
                        </td>
                      </tr>

                      @endforeach

                     
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

@endsection