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
                                <label for="" class="form-label">Name Task</label>
                                <div class="input-group mb-3"><span class="input-group-text" id="name_task"><i data-feather="user">Edit</i></span>
                                    <input type="text" name="name_task" class="form-control" placeholder="Name" value="<?= $dotaskid['nama_task'] ?>" aria-label="Nametask" aria-describedby="name_task" />
                                </div>
                                <label for="" class="form-label">Sub Task</label>
                                <div class="html-editor sh-19" name="content" id="quillEditor"></div>

                                <ul class="list-group ">

                                    <li class="list-group-item list-group-item-success">
                                        <input type="checkbox" name="task" id="task" value="<?= $dotaskid['nama_task'] ?>" />
                                        <label class="strikethrough"><?= $dotaskid['nama_task'] ?>
                                            <a href="<?= base_url('dotask/edit/') . $dotaskid['id'] ?>" class="btn btn-warning ml-4"><i data-feather="edit">Edit</i></a>
                                            <a href="" class="btn btn-danger float-right"><i data-feather="trash-2">Delete</i></a>

                                        </label>

                                    </li>

                                </ul>
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