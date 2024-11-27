<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
<link rel="stylesheet" href="admin/pages/style.css">

    <div class="table-container" id="student" style="display:none;">
            <div class="label-container">
                <span class="label fw-bold fs-4 w-100% text-success">Student Information</span>
            </div>

            <div class="table-responsive table-scroll" class="text-align">
                <table id="studentTable" class="table dt-responsive responsive table-hover table-style display data-height-750" style="width:100%">


            <div style="text-align: center;">

            <thead>
            <tr>
                    <th><b>Photo</th>        
                    <th><b>Student No</b></th>        
                    <th><b>Last Name</b></th>
                    <th><b>First Name</b></th>
                    <th><b>Middle Name</b></th>
                    <th><b>Suffix</b></th>
                    <th><b>Year Level</b></th>
                    <th><b>Strand</b></th>
                    <th><b>Gender</b></th>
                    <th><b>Email</b></b></th>
                    <th><b>LRN</b></th>
                    <th><b>Birthday</b></th>
                    <th><b>Contact No</b></th>
                    <th><b>Address</b></th>
                    <th><b>Guardian Address</b></th>
                    <th><b>Guardian Contact Number</b></th>
                    <th><b>Action</b></th>
            </tr>
        </thead>
        </div>

        <tbody>
            <tr>
                    <td><em>No Image</em></td>
                    <td>1-223070</td>
                    <td>Hoshino</td>
                    <td>Yoji</td>
                    <td>Esta</td>
                    <td><em>None</em></td>
                    <td>11</td>
                    <td>ICT</td>
                    <td>Male</td>
                    <td>y.hoshino@gmail.com</td>
                    <td>123123123</td>
                    <td>May 19, 2003</td>
                    <td>09213034194</td>
                    <td>BLK 10 LOT 12 Villa Mercedes USA</td>
                    <td>BLK 10 LOT 12 Villa Mercedes USA</td>
                    <td>091234569</td>
                    <td>
                        <a href=""><i class="fa-duotone fa-pen fa-xl" style="--fa-primary-color: #5288e5; --fa-secondary-color: #357efd; --fa-secondary-opacity: 0.4;"></i></a>
                        <a href=""><i class="fa-duotone fa-trash fa-xl" style="--fa-primary-color: #ff0000; --fa-primary-opacity: 0.8; --fa-secondary-color: #ff0000; --fa-secondary-opacity: 0.4;"></i></a>
                    </td>
            </tr>
            <tr>
                    <td><em>No Image</em></td>
                    <td>1-202020</td>
                    <td>Salutillo</td>
                    <td>Christine</td>
                    <td>Dayundon</td>
                    <td><em>None</em></td>
                    <td>11</td>
                    <td>ICT</td>
                    <td>Female</td>
                    <td>c.salutillo@gmail.com</td>
                    <td>123412341234</td>
                    <td>Nov 08, 2001</td>
                    <td>09213034194</td>
                    <td>BGC - Bagong Golden City</td>
                    <td>BGC - Bagong Golden City</td>
                    <td>091234569</td>

                    <td>
                        <a href=""><i class="fa-duotone fa-pen fa-xl" style="--fa-primary-color: #5288e5; --fa-secondary-color: #357efd; --fa-secondary-opacity: 0.4;"></i></a>
                        <a href=""><i class="fa-duotone fa-trash fa-xl" style="--fa-primary-color: #ff0000; --fa-primary-opacity: 0.8; --fa-secondary-color: #ff0000; --fa-secondary-opacity: 0.4;"></i></a>
                    </td>
            </tr>
            <tr>
                    <td><em>No Image</em></td>
                    <td>1-303030</td>
                    <td>Amar</td>
                    <td>Eleuterio</td>
                    <td>Delos Reyes</td>
                    <td><em>Jr.</em></td>
                    <td>11</td>
                    <td>ICT</td>
                    <td>Male</td>
                    <td>e.amar@gmail.com</td>
                    <td>123451234512345</td>
                    <td>March 05, 2002</td>
                    <td>09213034194</td>
                    <td>Riverside - Riverstone</td>
                    <td>Riverside - Riverstone</td>
                    <td>091234569</td>

                    <td>
                        <a href=""><i class="fa-duotone fa-pen fa-xl" style="--fa-primary-color: #5288e5; --fa-secondary-color: #357efd; --fa-secondary-opacity: 0.4;"></i></a>
                        <a href=""><i class="fa-duotone fa-trash fa-xl" style="--fa-primary-color: #ff0000; --fa-primary-opacity: 0.8; --fa-secondary-color: #ff0000; --fa-secondary-opacity: 0.4;"></i></a>
                    </td>
                </tr>
        </tbody>
        <tfoot>
        </tfoot>
        </table>
        </div>
    </div>

    <script>
    // $(document).ready(function () {
    //     var table = $('#dtPluginExample').DataTable({
    //     });
    // });

    new DataTable('#studentTable');
    </script>