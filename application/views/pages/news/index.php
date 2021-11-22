
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">News</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data News</h6>
            <a href="<?= base_url('add') ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add News</span>
            </a>
      </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Tags</th>
                        <th>Author</th>
                        <th>Start date</th>
                        <th>Update date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Tags</th>
                        <th>Author</th>
                        <th>Start date</th>
                        <th>Update date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td class="text-center"><img src="<?= base_url("assets") ?>/image_uploaded/dummy.png" class="img-thumbnail w-25" alt=""></td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td class="text-center"><img src="<?= base_url("assets") ?>/image_uploaded/dummy.png" class="img-thumbnail w-25" alt=""></td>
                        <td>Tokyo</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>
                             <a href="">Edit</a>
                                <a href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
