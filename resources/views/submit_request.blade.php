<!DOCTYPE html>
<html lang="en">

@include('includes/header')

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    @include('includes/navigation')
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add listing</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Basic info</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="Your last name">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" class="form-control" placeholder="Your telephone number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                    </div>
                </div>
                <!-- /row-->


                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-map-marker"></i>Select Maintenance </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>What type of Maintenance do you need?</label>
                            <select class="form-control">
                                <option value="">Select One</option>
                                <option value="New York">AC/Heating Issues </option>
                                <option value="Chicago">Plumbing Issue</option>
                                <option value="Miami">Eletrical Issues</option>
                                <option value="Los Angeles">Windows and Doors</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>How long did you notice this damage?</label>
                            <input type="text" class="form-control" placeholder="How many dats / Weeks">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select a prefered date for Inspection/Fixing</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select a prefered Time</label>
                            <input type="time" class="form-control" placeholder="Your zip code">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Upload a picture reference</label>
                            <form action="/file-upload" class="dropzone dz-clickable">
                                <input type="file" id="img" name="img" accept="image/*">
                                <div class="dz-default dz-message"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->



            <!-- /box_general-->
            <p><a href="#0" class="btn_1 medium">Submit Request </a></p>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
    @include('includes/footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    @include('includes/scripts')


</body>

</html>
