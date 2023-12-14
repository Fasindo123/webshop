<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php print_link(HOME_PAGE) ?>">
            <img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" />
            </a>
            <?php 
            if(user_login_status() == true ){ 
            ?>
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            </button>
            <button type="button" id="sidebarCollapse" class="btn btn-dark">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php 
                            if(!empty(USER_PHOTO)){
                            ?>
                            <img class="img-fluid" style="height:30px;" src="<?php print_link(set_img_src(USER_PHOTO,30,30)); ?>" />
                                <?php
                                }
                                else{
                                ?>
                                <span class="avatar-icon"><i class="fa fa-user"></i></span>
                                <?php
                                }
                                ?>
                                <span>Hello <?php echo ucwords(USER_NAME); ?> !</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php print_link('account') ?>"><i class="fa fa-user"></i> Fiókom</a>
                                <a class="dropdown-item" href="<?php print_link('index/logout?csrf_token=' . Csrf::$token) ?>"><i class="fa fa-sign-out"></i> Kijelentkezés</a>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php 
                } 
                ?>
            </div>
        </div>
        <?php 
        if(user_login_status() == true ){ 
        ?>
        <nav id="sidebar" class="navbar-dark bg-dark">
            <ul class="nav navbar-nav w-100 flex-column align-self-start">
                </ul>
                <?php Html :: render_menu(Menu :: $navbarsideleft  , "nav navbar-nav w-100 flex-column align-self-start"  , "accordion"); ?>
            </nav>
            <?php 
            } 
            ?>