<?php
$office = $this->db->get('chospital')->result_array();
//echo "Year : ".$this->session->userdata('n_year');
?>

<div class="sidebar w3-theme-l5" role="navigation" style="padding-top: 15px;;background-color:transparent !important">
    <div class="panel panel-default">

        <div class="panel-body text-center">
            <img src="<?php echo base_url() . 'assets/images/users/' . $this->config->item('boss_id') . '.jpg'; ?>" class="img-responsive img-rounded" style="width:auto;height:auto;">
            <br> <?php echo $this->config->item('boss_name') . "<br>" . $this->config->item('boss_position'); ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="sidebar-nav navbar-collapse" id="left_slide">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url(); ?>"><i class="fas fa-chart-line"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/boss') ?>"><i class="fa fa-bus fa-fw"></i>
                            ผู้บริหารหน่วยงาน</a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('base_data/policy') ?>"><i class="fas fa-chart-line"></i> นโยบายผู้บริหาร</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/vision') ?>"><i class="fas fa-chart-line"></i> วิสัยทัศน์ พันธกิจ ค่านิยม</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/structure') ?>"><i class="fas fa-chart-line"></i>
                            โครงส้รางหน่วยงาน </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/authority') ?>"><i class="fas fa-chart-line"></i> อำนาจหน้าที่ </a>
                    </li>



                </ul>
            </div>
        </div>

    </div>

    <div class="panel panel-default">
        <div class="panel-heading"> <i class="fa fa-neuter"></i> ข่าวประชาสัมพันธ์ </div>
        <div class="panel-body">
            <div class="sidebar-nav navbar-collapse" id="left_slide">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url('news') ?>"><i class="fas fa-chart-line"></i>
                            ข่าวประชาสัมพันธ์ทั้งหมด </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('news/raw') ?>"><i class="fas fa-chart-line"></i>
                            กฏหมายสาธารณสุข</a>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    <!-- /.sidebar-collapse -->
</div>

<script src="<?php echo base_url() ?>assets/apps/js/search.js" charset="utf-8"></script>