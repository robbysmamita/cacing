<br>
<br>
<br>
<br>
<br>
<div id="root" class="h-100">
    <!-- Background Start -->
    <div class="fixed-background"></div>
    <!-- Background End -->

    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0 h-100">
            <!-- Left Side Start -->
            <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                <div class="min-h-100 d-flex align-items-center">
                    <div class="w-100 w-lg-75 w-xxl-50">
                        <div>
                            <div class="mb-5">
                                <h1 class="display-3 text-white">Login Pages</h1>
                                <h1 class="display-3 text-white">Login To create To do</h1>
                            </div>
                            <p class="h6 text-white lh-1-5 mb-5">
                                Create To Do
                            </p>
                            <div class="mb-5">
                                <!-- <a class="btn btn-lg btn-outline-white" href="index.html">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                    <div class="sw-lg-50 px-5">
                        <div class="sh-11">
                            <a href="#">
                                <div class="logo-default"></div>
                            </a>
                        </div>
                        <?= $this->session->flashdata('users') ?>
                        <div class="mb-5">
                            <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                            <h2 class="cta-1 text-primary">let's get started!</h2>
                        </div>
                        <div class="mb-5">
                            <p class="h6">Please use your credentials to login.</p>
                            <p class="h6">
                                If you are not a member, please
                                <a href="<?= base_url('auth/register') ?>">register</a>
                                .
                            </p>
                        </div>
                        <div>
                            <form id="loginForm" method="POST" class="tooltip-end-bottom" novalidate>
                                <div class="mb-3 filled form-group tooltip-end-top">
                                    <i data-cs-icon="email"></i>
                                    <input class="form-control" placeholder="Email" name="email" />
                                    <small class="text-danger"><?= form_error('email') ?></small>
                                </div>
                                <div class="mb-3 filled form-group tooltip-end-top">
                                    <i data-cs-icon="lock-off"></i>
                                    <input class="form-control pe-7" name="password" type="password" placeholder="Password" />
                                    <small class="text-danger"><?= form_error('password') ?></small>
                                    <!-- <a class="text-small position-absolute t-3 e-3" href="Pages.Authentication.ForgotPassword.html">Forgot?</a> -->
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
</div>