<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">To Do Plan</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Plan</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="Interface.Plugins.html">Plugins</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.Plugins.Datatables.html">Datatables</a></li> -->
                                </ul>
                            </nav>
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                            <!-- Add New Button Start -->
                            <a href="<?= base_url('dotask/add') ?>" type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">
                                <i data-cs-icon="plus"></i>
                                <span>Add New</span>
                            </a>
                            <!-- Add New Button End -->
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Content Start -->
                <div class="data-table-boxed">
                    <!-- Controls Start -->
                    <div class="row mb-2">
                        <!-- Search Start -->

                    </div>
                    <!-- Controls End -->

                    <!-- Table Start -->
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <!-- Sales & Stocks Charts Start -->
                            <div class="mb-5">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div>
                                            <table id="datatables" class="data-table nowrap hover">
                                                <thead>
                                                    <tr>
                                                        <th class="fw-bolder text-medium text-uppercase">No</th>
                                                        <th class="fw-bolder text-medium text-uppercase">Task</th>
                                                        <th class="fw-bolder text-medium text-uppercase">Due Date</th>
                                                        <th class="fw-bolder text-medium text-uppercase">Due Time</th>
                                                        <th class="fw-bolder text-medium text-uppercase">Status</th>
                                                        <th class="fw-bolder text-medium text-uppercase">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    ?>
                                                    <?php foreach ($dotask as $dt) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td>
                                                                <?php if ($dt['mark_done'] == NULL) : ?>

                                                                    <span class="badge rounded-pill bg-primary"><?= $dt['nama_task'] ?> </span>
                                                                <?php else : ?>
                                                                    <span class="badge rounded-pill bg-success strikethoug" style="text-decoration: line-through;"><?= $dt['nama_task'] ?></span>
                                                                <?php endif ?>
                                                            </td>
                                                            <td><?= $dt['due_date'] ?></td>
                                                            <td><?= $dt['due_time'] ?></td>
                                                            <td>
                                                                <?php if ($dt['mark_done'] == NULL) : ?>

                                                                    <span class="badge rounded-pill bg-primary">Ready To Do</span>
                                                                <?php else : ?>
                                                                    <span class="badge rounded-pill bg-success ">DONE</span>
                                                                <?php endif ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('dotask/edit/') . $dt['id'] ?>" class="btn btn-sm btn-warning ml-4">Edit</a>
                                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletemod<?= $dt['id']; ?>">Delete</button>
                                                                <?php if ($dt['mark_done'] == NULL) : ?>
                                                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#markdone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Done</i></button>
                                                                <?php else : ?>
                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#undone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Undone</i></button>
                                                                <?php endif ?>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade" id="deletemod<?= $dt['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabelDefault">Delete Data <?= $dt['nama_task'] ?></h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                            <!-- <i data-cs-icon="close"></i> -->
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure to delete data <strong><?= $dt['nama_task'] ?></strong></div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <a href="<?= base_url('dotask/delete/') . $dt['id']; ?>" class="btn btn-primary">Save changes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- MODAL UNDONE -->
                                                        <div class="modal fade" id="undone<?= $dt['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabelDefault">Undone <?= $dt['nama_task'] ?></h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure undone this task <strong><?= $dt['nama_task'] ?></strong> ? </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <a href="<?= base_url('dotask/markundone/') . $dt['id']; ?>" class="btn btn-primary">Save changes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- MODAL MARK DONE -->
                                                        <div class="modal fade" id="markdone<?= $dt['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabelDefault">Mark Done <?= $dt['nama_task'] ?></h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Are you sure done this task <strong><?= $dt['nama_task'] ?></strong> ? </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <a href="<?= base_url('dotask/markdone/') . $dt['id']; ?>" class="btn btn-primary">Save changes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Table End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Sales & Stocks Charts End -->
                        </div>


                    </div>

                </div>
                <!-- Content End -->
            </div>
        </div>
    </div>
</main>