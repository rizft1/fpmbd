@section('title','Customer')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{ asset('style/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">NorthWind</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="charts.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Products <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Products</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="tables.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Employees <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Employees</a></li>
                <li><a href="#">Territories</a></li>
                <li><a href="#">Region</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="forms.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Customers <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Customers</a></li>
                <li><a href="#">Customer Demographics</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="typography.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-font"></i> Shippers <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Shippers</a></li>
                <li><a href="#">States</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Orders <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Orders</a></li>
                <li><a href="#">Order Details</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Customer</li>
            </ol>
          </div>
        </div><!-- /.row -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                        <tr>
                            <th>ID Customer<i class="fa fa-sort"></i></th>
                            <th>Company Name <i class="fa fa-sort"></i></th>
                            <th>Contact Name<i class="fa fa-sort"></i></th>
                            <th>Contact Title<i class="fa fa-sort"></i></th>
                            <th>Address<i class="fa fa-sort"></i></th>
                            <th>City<i class="fa fa-sort"></i></th>
                            <th>Region<i class="fa fa-sort"></i></th>
                            <th>Postal Code<i class="fa fa-sort"></i></th>
                            <th>Country<i class="fa fa-sort"></i></th>
                            <th>Phone<i class="fa fa-sort"></i></th>
                            <th>Fax<i class="fa fa-sort"></i></th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $datacustomer)
                        <tr>
                            <td><?= $datacustomer->customer_id ?></td>
                            <td><?= $datacustomer->company_name ?></td>
                            <td><?= $datacustomer->contact_name ?></td>
                            <td><?= $datacustomer->contact_title ?></td>
                            <td><?= $datacustomer->address ?></td>
                            <td><?= $datacustomer->city ?></td>
                            <td><?= $datacustomer->region ?></td>
                            <td><?= $datacustomer->postal_code ?></td>
                            <td><?= $datacustomer->country ?></td>
                            <td><?= $datacustomer->phone ?></td>
                            <td><?= $datacustomer->fax ?></td>
                            <td class="text-center">
                                <a href="{{ route('edit', $datacustomer->customer_id ) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i></a></td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm"></i> Add New Shipper</button>
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->

    <!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="tambahBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahBarangLabel">New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('customer/add_customer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="customerid">ID Customer</label>
                    <input type="text" name="customerid" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="companyname">Company Name</label>
                    <input type="text" name="companyname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="contactname">Contact Name</label>
                    <input type="text" name="contactname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="contacttitle">Contact Title</label>
                    <input type="text" name="contacttitle" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="region">Region</label>
                    <input type="text" name="region" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" name="postalcode" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" name="fax" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
      </form>
    </div>
  </div>
</div>


    <!-- JavaScript -->
    <script src="{{ asset('style/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.js') }}"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="{{ asset('style/js/morris/chart-data-morris.js') }}"></script>
    <script src="{{ asset('style/js/tablesorter/jquery.tablesorter.js') }}"></script>
    <script src="{{ asset('style/js/tablesorter/tables.js') }}"></script>

  </body>
</html>
