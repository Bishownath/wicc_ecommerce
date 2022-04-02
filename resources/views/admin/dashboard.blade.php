{{-- header --}}
<x-header-component></x-header-component>


<!-- Sidebar -->
<x-sidebar-component></x-sidebar-component>

<!-- Topbar - navbar-->
<x-navbar-component></x-navbar-component>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    {{-- index page --}}
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
    @yield('content')
    <x-footer-component></x-footer-component>

    <x-common-component></x-common-component>
    <script>
        $("#myAlert").fadeTo(2000, 500).slideUp(500, function() {
            $("#myAlert").slideUp(500);
        });
        $('.alert').alert();
    </script>
    </body>

    </html>
