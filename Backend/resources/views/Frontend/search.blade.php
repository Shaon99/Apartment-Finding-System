@extends('Frontend.master.master')

@section('main-content')
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Search By District</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Search By District</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car-dealer-form-inner mt-3 mb-2">
                <form action="#" id="search" class="ltn__car-dealer-form-box row">
                    @csrf
                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-4 col-md-6">
                        <select class="nice-select" name="name" id="selectname">
                            <option selected disabled>Choose District</option>
                            @foreach ($district as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger errorname"></span>
                    </div>
                    <div
                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-4 col-md-6">
                        <select class="nice-select" name="type" id="selecttype">
                            <option selected disabled>Choose Property Type (Sell/Rent)</option>
                            <option value="0">Rent</option>
                            <option value="1">Sell</option>

                        </select>
                        <span class="text-danger errortype"></span>

                    </div>

                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-4 col-md-6">
                        <div class="btn-wrapper text-center mt-0">
                            <button type="submit"
                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Find Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

    <div class="mt-2 ltn__category-area ltn__product-gutter section-bg-1--- pb-50">
        <div class="container" id="searchappend">

        </div>
    </div>
    

        <script>
           
            $(document).on('submit', '#search', function(e) {
            e.preventDefault();
            let name = $('#selectname').val();
            let type = $('#selecttype').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: `/search/result`,
                data: {
                    name: name,
                    type: type

                },
                success: (data) => {
                    $('#searchappend').html(
                        data
                    )
                    $('.errorname').text('');
                    $('.errortype').text('');

                },
                error: (error) => {

                    if (typeof(error.responseJSON.errors.name) !== "undefined") {
                        $('.errorname').text(error.responseJSON.errors.name);
                    } else {
                        $('.errorname').text('');
                    }

                    if (typeof(error.responseJSON.errors.type) !== "undefined") {
                        $('.errortype').text(error.responseJSON.errors.type);
                    } else {
                        $('.errortype').text('');
                    }
                }
            })
            });
          
        </script>

    @endsection
