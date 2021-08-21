    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel"> 
                <div class="pull-left image">
                    <img src="images/profiles/<?php echo $profile_pic; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $fullname; ?></p>
                   
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    <br></br>
                </div>
            </div>
            
            <ul class="sidebar-menu"><!-- sidebar menu: : style can be found in sidebar.less -->
            
                <li class="header">NAVEGACIÓN</li>

                <li class="<?php if(isset($active1)){echo $active1;}?>">
                    <a href="home.php"><i class="fa fa-user"></i> <span>Mi perfil</span></a>
                </li>

                <li class="<?php if(isset($active7)){echo $active7;}?>">
                    <a href="userprofiles.php"><i class="fa fa-users"></i> <span>Control de COVID-19</span></a>
                </li>

                <li class="<?php if(isset($active6)){echo $active6;}?>">
                    <a href="about.php"><i class="fa fa-smile-o"></i> <span>Acerca del autor</span></a>
                </li>

            </ul>
        </section><!-- /.sidebar -->
    </aside>
