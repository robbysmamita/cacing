<?php

// $url = "https://indonesia-public-static-api.vercel.app/api/heroes";
// $url = "https://jibs.my.id/api/harga_komoditas";
// $url = "http://hero.ardhacodes.com/hero.json";

// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// $resp = curl_exec($curl);
// curl_close($curl);
// $result = json_decode($resp, true);
// var_dump($result);
// die
// var_dump($resp);
// die;
// var_dump($dotask);
// die;
?>

<main>
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Do Task</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Do Task</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Tour Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-end w-100 w-sm-auto" id="dashboardTourButton">
                        <span>Take a Tour</span>
                        <i data-cs-icon="flag"></i>
                    </button>
                    <!-- Tour Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <?php if ($this->session->flashdata('dotask')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>
                Data has been <strong><?= $this->session->flashdata('dotask') ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">To Do (Plan)
                        <a href="<?= base_url('dotask/add') ?>" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>

                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <?php foreach ($dotask as $dt) : ?>
                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $dt['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $dt['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $dt['id'] ?>" class="btn btn-sm btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemod<?= $dt['id']; ?>"><i data-feather=" trash-2">Delete</i></button>
                                            <?php if ($dt['mark_done'] == NULL) : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#markdone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Done</i></button>

                                            <?php else : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#undone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Undone</i></button>

                                            <?php endif ?>
                                            <!-- <a href="" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#myModal<?= $dt['id'] ?>"><i data-feather=" trash-2">Delete</i></a> -->

                                        </label>

                                    </li>
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

                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
            </div>
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">Do Today
                        <a href="<?= base_url('dotask/adddotoday') ?>" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>

                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <?php foreach ($dotoday as $today) : ?>
                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $today['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $today['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $today['id'] ?>" class="btn btn-sm btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemod<?= $today['id']; ?>"><i data-feather=" trash-2">Delete</i></button>
                                            <?php if ($today['mark_done'] == NULL) : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#todaydone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Done</i></button>
                                            <?php else : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#todayundone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Undone</i></button>
                                            <?php endif ?>
                                            <!-- <a href="" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#myModal<?= $today['id'] ?>"><i data-feather=" trash-2">Delete</i></a> -->

                                        </label>

                                    </li>
                                    <div class="modal fade" id="deletemod<?= $today['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Delete Data <?= $today['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <!-- <i data-cs-icon="close"></i> -->
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure to delete data <strong><?= $today['nama_task'] ?></strong></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/delete/') . $today['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="undone<?= $today['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Undone <?= $today['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure undone this task <strong><?= $today['nama_task'] ?></strong> ? </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/markundone/') . $today['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="markdone<?= $today['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Mark Done <?= $today['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure done this task <strong><?= $today['nama_task'] ?></strong> ? </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/markdone/') . $today['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">In progress
                        <a href="<?= base_url('dotask/addinprogress') ?>" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>

                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <?php foreach ($progress as $prog) : ?>
                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $prog['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $prog['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $prog['id'] ?>" class="btn btn-sm btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemod<?= $prog['id']; ?>"><i data-feather=" trash-2">Delete</i></button>
                                            <?php if ($prog['mark_done'] == NULL) : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#markdone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Done</i></button>

                                            <?php else : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#undone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Undone</i></button>

                                            <?php endif ?>
                                            <!-- <a href="" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#myModal<?= $prog['id'] ?>"><i data-feather=" trash-2">Delete</i></a> -->

                                        </label>

                                    </li>
                                    <div class="modal fade" id="deletemod<?= $prog['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Delete Data <?= $prog['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <!-- <i data-cs-icon="close"></i> -->
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure to delete data <strong><?= $prog['nama_task'] ?></strong></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/delete/') . $prog['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="undone<?= $prog['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Undone <?= $prog['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure undone this task <strong><?= $prog['nama_task'] ?></strong> ? </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/markundone/') . $prog['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="markdone<?= $prog['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Mark Done <?= $prog['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure done this task <strong><?= $prog['nama_task'] ?></strong> ? </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/markdone/') . $prog['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">Done
                        <a href="<?= base_url('dotask/addone') ?>" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>
                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <?php foreach ($done as $d) : ?>
                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $d['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $d['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $d['id'] ?>" class="btn btn-sm btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemod<?= $d['id']; ?>"><i data-feather=" trash-2">Delete</i></button>

                                            <?php if ($d['mark_done'] == NULL) : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#markdone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Done</i></button>

                                            <?php else : ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#undone<?= $dt['id']; ?>"><i data-feather=" trash-2">Mark Undone</i></button>

                                            <?php endif ?>
                                            <!-- <a href="" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#myModal<?= $d['id'] ?>"><i data-feather=" trash-2">Delete</i></a> -->

                                        </label>

                                    </li>
                                    <div class="modal fade" id="deletemod<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabelDefault">Delete Data <?= $d['nama_task'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure to delete data <strong><?= $d['nama_task'] ?></strong></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="<?= base_url('dotask/delete/') . $d['id']; ?>" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
            </div>

        </div>



    </div>
</main>
<!-- Layout Footer Start -->