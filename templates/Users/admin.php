<?php
?>
<div class="d-sm-flex align-items-center justify-content-lg-center mb-4">

    <h1 class="h3 mb-0 text-gray-800 text-align-center">Welcome! Here is your admin dashboard.</h1>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card w-75">
        <div class="card shadow mb-0">
            <!-- Card Header - Accordion -->
            <a href="#manageusers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="manageusers">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage users and products</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="manageusers" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List users</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List products</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'UsersProducts', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List users and products</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card w-75">
        <div class="card shadow mb-0">

            <!-- Card Header - Accordion -->
            <a href="#managemodules" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="managemodules">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage modules</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="managemodules" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Modules', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List modules</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'ProductsModules', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List products modules</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="card w-75">
        <div class="card shadow mb-0">
            <!-- Card Header - Accordion -->
            <a href="#manageusers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="manageusers">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage payments</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="manageusers" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Payments', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List payments</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'Payments', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List payments providers</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>



