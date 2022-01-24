<?php

// $url = "https://indonesia-public-static-api.vercel.app/api/heroes";
// $url = "https://jibs.my.id/api/harga_komoditas";

// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// //for debug only!
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// $resp = curl_exec($curl);
// curl_close($curl);
// var_dump($resp);
// // var_dump($resp);
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
                            <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
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

        <div class="row">
            <div class="col-12 col-xl-12">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">To Do (Plan)</h2>
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="users_id" class="form-control" placeholder="Name Task" aria-label="username_id" value="<?= $this->session->userdata('username_id') ?>" aria-describedby="username_id" />
                                <label for="" class="form-label">Name Task</label>
                                <div class="input-group mb-3"><span class="input-group-text" id="name_task"><i data-feather="user">Edit</i></span>
                                    <input type="text" name="name_task" class="form-control" placeholder="Name Task" aria-label="Nametask" value="<?= $dotaskid['nama_task'] ?>" aria-describedby="name_task" />
                                </div>
                                <small class="text-danger"><?= form_error('name_task') ?></small>

                                <label for="" class="form-label">Sub Task</label>
                                <textarea name="content" id="content" rows="10" cols="80"><?= $dotaskid['content'] ?></textarea>
                                <small class="text-danger"><?= form_error('content') ?></small>


                                <label for="" class="form-label">Date</label>
                                <div class="row g-3 input-daterange" id="datePickerRange">
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="text" class="form-control flatpickr" name="start_date" value="<?= $dotaskid['start_date'] ?>" />
                                            <span>START DATE</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('start_date') ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="text" class="form-control flatpickr" name="due_date" value="<?= $dotaskid['due_date'] ?>" />
                                            <span>DUE DATE</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('due_date') ?></small>
                                    </div>
                                </div>

                                <label for="" class="form-label">Time</label>
                                <div class="row g-3 input-daterange" id="datePickerRange">
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="time" class="form-control flatpickrtime" name="start_time" value="<?= $dotaskid['start_time'] ?>" />
                                            <span>START TIME</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('start_time') ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="time" class="form-control flatpickrtime" name="due_time" value="<?= $dotaskid['due_time'] ?>" />
                                            <span>END TIME</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('due_time') ?></small>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="status" value="1" />
                                <button type="submit" class="btn btn-primary float-start">SAVE</button>
                                <a href="<?= base_url('dotask') ?>" class="btn btn-success ms-2">BACK</a>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- Sales & Stocks Charts End -->
            </div>


        </div>



    </div>
</main>
<!-- Layout Footer Start -->