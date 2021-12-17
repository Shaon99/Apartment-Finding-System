@include('Frontend.master.head')

@yield('main-content')


@include('Frontend.master.footer')


<script>
    $(".alert:not(.not_hide)").delay(5000).slideUp(500, function() {
        $(this).alert('close');
    });
</script>



