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
                        <a href="#" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>

                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
            </div>
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title"> In Progress
                        <a href="#" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>
                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
            </div>
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">Done
                        <a href="#" class="d-inline btn btn-sm btn-primary float-end e-2"><i class="feather-12" data-feather="plus-circle"></i>Add</a>
                    </h2>
                    <div class="card mt-3">
                        <div class="card-body">
                            <ul class="list-group ">
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <input type="checkbox" name="task" id="task" value="1" />
                                    <label class="strikethrough">Task</label>
                                </li>
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