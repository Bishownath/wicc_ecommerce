@include('vendors.layouts.common.header')
<!-- Begin Page Content -->
@if (session()->has('success'))
    <div class="alert alert-success" id="myAlert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('success') }}
    </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

@include('sweetalert::alert')
@yield('contents')
<!-- /.container-fluid -->

@include('vendors.layouts.common.footer')
<script>
    $("#myAlert").fadeTo(2000, 500).slideUp(500, function() {
        $("#myAlert").slideUp(500);
    });
    $('.alert').alert();
</script>
