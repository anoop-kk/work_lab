@include('layouts.Admin.admin')
<style>
    .panel-body {
        padding: 15px;
        background: white;
    }
</style>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="panel-body">
                    <form class="form-horizontal form-label-left" method="POST">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact_name">Contact Name<span class="required" style="font-color:red">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="contact_name" id ="contact_name" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone<span class="required alert-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="phone" id ="phone" class="form-control">
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<!-- ./wrapper -->
@include('layouts.Admin.scripts')
@include('layouts.Admin.dashboard_script')
@include('layouts.Admin.footer')
@include('layouts.Admin.site_footer')