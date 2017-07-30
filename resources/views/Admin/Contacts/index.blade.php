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
                    @if(count($contacts))
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Contact Name</th>
                        <th>Phone</th>
                        <th>Desc</th>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->contact_name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->desc}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="row col-md-offset-5">
                        No Data Found
                    </div>
                    @endif
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