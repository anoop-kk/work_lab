@include('layouts.Admin.admin')

<!-- Main content -->
<section class="content">
    
        @if (\Session::has('success'))
        <div class="callout callout-info">
        <div class="alert alert-success" role="alert">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        </div>
        @endif

        @if (\Session::has('warning'))
        <div class="callout callout-info">
        <div class="alert alert-warning" role="alert">
            <ul>
                <li>{!! \Session::get('warning') !!}</li>
            </ul>
        </div>
        </div>
        @endif
    
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                
            </div>
        </div>
        <div class="box-body">
            Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<!-- ./wrapper -->
@include('layouts.Admin.scripts')
@include('layouts.Admin.dashboard_script')
@include('layouts.Admin.footer')
@include('layouts.Admin.site_footer')