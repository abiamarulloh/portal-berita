
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">News</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data News</h6>
            <a href="<?= base_url('news/add') ?>" class="btn btn-primary btn-icon-split">
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
                    <?php foreach ($news_list as $news_item): ?>
                    <tr>
                        <td><?= $news_item->title; ?></td>
                        <td class="text-center"><img src="<?= base_url("assets") ?>/image_uploaded/<?= $news_item->image ?>" class="img-thumbnail w-25" alt=""></td>
                        <td><?= $news_item->description ?></td>
                        <td><?= $news_item->tags ?></td>
                        <td><?= $news_item->author ?></td>
                        <td><?= date('m/d/Y', $news_item->create_at)  ?></td>
                        <td><?= $news_item->update_at > 0 ? date('m/d/Y', $news_item->update_at) : "-"  ?></td>
                        <td>
                            <a href="<?= base_url('news/edit/') . $news_item->id ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('news/delete/') . $news_item->id ?>" onclick="return confirm('Yakin ingin hapus ? ')" class="badge badge-danger">Delete</a>
                            <a href="<?= base_url('news/single/') . $news_item->id ?>" class="badge badge-primary">Preview</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
