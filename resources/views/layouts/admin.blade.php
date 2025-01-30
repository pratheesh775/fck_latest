<!DOCTYPE html>
<html lang="en">

@include('admin.partial._header')

<body>
    <div class="container-scroller">
        @include('admin.partial._navbar')
        <!-- </div> -->
        <div class="container-fluid page-body-wrapper">
            @include('admin.partial._side_menu')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('admin.partial.footer_js')

</body>

</html>