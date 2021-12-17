@extends('seller.master.master')

@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <a class="btn btn-success btn-rounded" href="{{ route('seller.apartment') }}"><i class="fa fa-plus">
                        </i>&nbsp ADD Apartment</a>

                </h3>
              
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Apartment Name</th>
                                            <th>Price</th>
                                            <th>Sell/Rent</th>
                                            <th>Apartment Type</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Status Change</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($apartment as $item)
                                            <tr>

                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->apartment_name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td class="text-capitalize">
                                                    <span
                                                        class="badge badge-info">{{ $item->rent_sell == '0' ? 'Rent' : '' }}</span>
                                                    <span
                                                        class="badge badge-primary">{{ $item->rent_sell == '1' ? 'Sell' : '' }}</span>
                                                </td>
                                              
                                                <td class="text-capitalize">
                                                    <span
                                                        class="badge badge-danger">{{ $item->type == '0' ? 'Residential' : '' }}</span>
                                                    <span
                                                        class="badge badge-warnning">{{ $item->type == '1' ? 'commercial' : '' }}</span>
                                                </td>
                                              
                                                <td>{{ $item->city }}</td>

                                                <td class="text-capitalize">
                                                    <span
                                                        class="badge badge-danger">{{ $item->status == '0' ? 'deactive' : '' }}</span>
                                                    <span
                                                        class="badge badge-success">{{ $item->status == '1' ? 'active' : '' }}</span>
                                                </td>
                                                <td class="text-capitalize">
                                                    <select  class="form-control form-control-sm bg-info text-white" data-id="{{$item->id}}" id="selectStatus">
                                                        <option class="text-white" value="0" {{$item->status == 0 ? 'selected' : ''}}>Deactive</option>                                                                  
                                                        <option value="1" {{$item->status == 1 ? 'selected' : ''}}>Active</option>                                                  
                                
                                                      </select>
                                                </td>




                                                <td>
                                                    <a href="{{ route('seller.viewApartment',$item->id) }}"> <button class="btn btn-outline-primary">View</button></a>

                                                    <a href="{{ route('seller.apartmentEdit',$item->id) }}">
                                                        <button class="btn btn-outline-primary">Edit</button></a>
                                                </td>
                                            @empty
                                                <td colspan="5" class="text-center">No data Available</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
           
          $(document).ready(function () {
              $(document).on('change','#selectStatus',function () {
                  let status = $(this).val();
                  let id = $(this).attr('data-id');
                  let selectUpdate = $(this).parent().prev();
          
                  $.ajax({
                      type: 'GET',
                      url: `/Seller/status/${id}`,
                      data: {status: status},
                      success: (data) => {
                        toastr.options = {
                    "timeOut": "2000",
                    "closeButton": true,
                };
                toastr['info']('Status Successfully Updated!!!');
                      
                          if (status == '0'){
                                      $(selectUpdate).html(`
                                      <span class="badge bg-danger text-white">Deactive</span>
                                  `)
                                  }else if (status == '1') {
                                      $(selectUpdate).html(`
                                      <span class="badge bg-success text-white">Active</span>
                                  `)
                                  }
                      },
                      error: (error) => {
                          console.log(error);
                      }
                  })
              });
          });
          </script>

    @endsection
