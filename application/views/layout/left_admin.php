<div class="sidebar w3-theme-l5" role="navigation" >
    <div class="sidebar-nav navbar-collapse" id="left_slide">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" id="txt_search_link" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="btn_search_link">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo site_url('admin'); ?>"><i class="fas fa-chart-line"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i> จัดการแฟ้มพื้นฐาน<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url('admin_hospital') ?>"><i
                                class="fa fa-angle-double-right  "></i> หน่วยบริการ </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_employee_type') ?>"><i class="fa fa-angle-double-right  "></i>
                            ประเภทพนักงาน</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->

            </li>

            <li>
                <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i> ข้อมูบลพื้นฐาน<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url('admin_boss') ?>"><i
                                class="fa fa-angle-double-right  "></i> ผู้บริหาร</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_policy') ?>"><i
                                class="fa fa-angle-double-right  "></i> นโยบายผู้บริหาร</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_structure') ?>"><i
                                class="fa fa-angle-double-right  "></i> โครงสร้างหน่วยงาน</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_authority') ?>"><i
                                class="fa fa-angle-double-right  "></i> อำนาจหน้าที่</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_vision') ?>"><i
                                class="fa fa-angle-double-right  "></i> วิสัยทัศน์ พันธกิจ ค่านิยม</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->

            </li>
            <li>
                <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i> ข่าวประชาสัมพพันธ์ News<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url('admin_news_category') ?>"><i
                                class="fa fa-angle-double-right  "></i> หมวดหมู่ ข่าว</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('news') ?>"><i
                                class="fa fa-angle-double-right  "></i> เพิ่มข่าว</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->

            </li>

            <li>
                <a href="<?php echo site_url('admin_link') ?>"><i class="fa fa-bus fa-fw"></i> จัดการ Link </a>
            </li>
            <li>
                <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i> ตัวชี้วัดสำคัญ<span
                        class="fa arrow"></span</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url('admin_ita_index') ?>"><i
                                class="fa fa-angle-double-right  "></i> ประเภทตัวชี้วัด</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_ita_ebit') ?>"><i
                                class="fa fa-angle-double-right  "></i> กลุ่มตัวชี้วัด</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_ita_ebit_items') ?>"><i class="fa fa-angle-double-right  "></i>
                        รายการตัวชี้วัด</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->

            </li>
            <li>
                <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i>
                    จัดการสิทธิ์การใช้งานระบบ<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url('admin_user') ?>"><i class="fa fa-angle-double-right  "></i> จัดการ
                            Users </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_role') ?>"><i class="fa fa-angle-double-right  "></i>
                            จัดการระดับสิทธิ์การใช้งาน </a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="<?php echo site_url('admin_employee') ?>"><i class="fa fa-user fa-fw"></i> จัดการข้อมูลพนักงาน</a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

