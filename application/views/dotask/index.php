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
            <div class="col-12 col-xl-3">
                <!-- Sales & Stocks Charts Start -->
                <div class="mb-5">
                    <h2 class="small-title">To Do (Plan)</h2>
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group ">
                                <?php foreach ($dotask as $dt) : ?>
                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $dt['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $dt['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $dt['id'] ?>" class="btn btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <a href="" class="btn btn-danger float-right"><i data-feather="trash-2">Delete</i></a>

                                        </label>

                                    </li>
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
                    <h2 class="small-title">Do Today</h2>

                    <div class="card">
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
                    <h2 class="small-title"> In Progress</h2>
                    <div class="card">
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
                    <h2 class="small-title">Done</h2>
                    <div class="card">
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