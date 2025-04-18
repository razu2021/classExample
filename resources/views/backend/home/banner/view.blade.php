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
                        <h3 class="card-header">View All Information</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="button d-flex justify-content-end mt-2 ">
                            <a href="{{url('home-banner/all')}}"><button class="btn btn-success mx-4">All Information</button></a>
                        </div>
                    </div>
                   </div> 
                    <div class=" text-nowrap">
                      <table class="table">
                        <tbody class="table-border-bottom-0">
                         
                            <tr>
                                <td <strong>Banner Heading </strong></td>
                                <td><strong>:</strong></td>
                                <td>Banner Heading  </td>
                            </tr>
                            {{-- row end --}}
                            <tr>
                                <td <strong>Banner Title</strong></td>
                                <td><strong>:</strong></td>
                                <td>Banner Titele  </td>
                            </tr>
                            {{-- row end --}}
                            <tr>
                                <td <strong>Banner Description</strong></td>
                                <td><strong>:</strong></td>
                                <td>Banner Description  </td>
                            </tr>
                            {{-- row end --}}
                         
                          
                         



                         
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