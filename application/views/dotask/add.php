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
                    <h1 class="mb-0 pb-0 display-4" id="title">Add Do Task</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Do Task</a></li>
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

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
                                <label for="" class="form-label">Name Task</label>
                                <div class="input-group mb-3"><span class="input-group-text" id="name_task"><i data-feather="user">Edit</i></span>
                                    <input type="text" name="name_task" class="form-control" placeholder="Name Task" aria-label="Nametask" aria-describedby="name_task" />
                                </div>
                                <small class="text-danger"><?= form_error('name_task') ?></small>

                                <label for="" class="form-label">Sub Task</label>
                                <div class="html-editor sh-19 mb-3" id="quillEditor">
                                    <input type="text" name="content">
                                </div>

                                <label for="" class="form-label">Date</label>
                                <div class="row g-3 input-daterange" id="datePickerRange">
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="text" class="form-control" name="start_date" />
                                            <span>START DATE</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('start_date') ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="text" class="form-control" name="due_date" />
                                            <span>END DATE</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('due_date') ?></small>
                                    </div>
                                </div>

                                <label for="" class="form-label">Time</label>
                                <div class="row g-3 input-daterange" id="datePickerRange">
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="time" class="form-control" name="start_time" />
                                            <span>START TIME</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('start_time') ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3 top-label">
                                            <input type="time" class="form-control" name="due_time" />
                                            <span>END TIME</span>
                                        </label>
                                        <small class="text-danger"><?= form_error('due_time') ?></small>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="status" value="1" />
                                <button type="submit" class="btn btn-primary float-start">SAVE</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>
</main>
<!-- Layout Footer Start -->