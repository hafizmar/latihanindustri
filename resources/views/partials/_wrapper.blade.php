<div id="wrapper">
@include('partials._nav')

<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">

@include('partials._noti')

</div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>@yield('maintitle')</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html"><span class="fa fa-dashboard"></span></a>
                </li>
                <li class="active">
                    <strong>@yield('breadcrumb')</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="" class="btn btn-primary">This is action area</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content  animated fadeInRight">
        @yield('content')
    </div>

    @include('partials._footer')

</div>
</div>
