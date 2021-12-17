@extends('manager.master.master')

@section('main_content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
          
              
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
                                            <th>Seller Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Status Change</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($seller as $item)
                                            <tr data-id="{{$item->id}}">
                                                <td>{{ $item->id }}</td>

                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->city }}</td>
                                                <td><img class="rounded-circle mr-1" height="50px" width="60px"
                                                    src="{{ URL::to('/uploads/seller_image/' . $item->image) }}">
                                            

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
                      url: `/manager/sellerstatus/${id}`,
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
