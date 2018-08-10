@extends('layouts.admin')

@section('main')
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">DASHBOARD</h1>
            <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
        </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
        <div class="col-md-4">
            <div class="main-box mb-red">
                <a href="#">
                    <i class="fa fa-bolt fa-5x"></i>
                    <h5>1102 Order</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box mb-dull">
                <a href="#">
                    <i class="fa fa-plug fa-5x"></i>
                    <h5>500 Product</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box mb-pink">
                <a href="#">
                    <i class="fa fa-dollar fa-5x"></i>
                    <h5>12.542$ Cash</h5>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-8">
            <h2>Last Order</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>User No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="label label-danger">Mark</span></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><span class="label label-info">100090</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>100090</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td><span class="label label-danger">the Bird</span> </td>
                            <td>@twitter</td>
                            <td>100090</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span class="label label-success">Mark</span></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><span class="label label-info">100090</span></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Larry</td>
                            <td><span class="label label-primary">the Bird</span></td>
                            <td>@twitter</td>
                            <td>100090</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><span class="label label-warning">Jacob</span></td>
                            <td><span class="label label-success">Thornton</span></td>
                            <td>@fat</td>
                            <td><span class="label label-danger">100090</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Larry</td>
                            <td><span class="label label-primary">the Bird</span></td>
                            <td>@twitter</td>
                            <td>100090</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><span class="label label-warning">Jacob</span></td>
                            <td><span class="label label-success">Thornton</span></td>
                            <td>@fat</td>
                            <td><span class="label label-danger">100090</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><span class="label label-success">Mark</span></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><span class="label label-info">100090</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div id="comments-sec">
                <h4><strong>Compose Support Ticket </strong></h4>
                <hr />
                <div class="form-group  ">
                    <label>Please Write a Subject Line</label>
                    <input type="text" class="form-control" required="required" placeholder="Enter Subject Of Ticket" />
                </div>
                <div class="form-group ">
                    <label>Please Enter Issue</label>
                    <textarea class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Compose &amp; Send Ticket</button>
                </div>
            </div>
        </div>
    <hr />
</div>
@stop()