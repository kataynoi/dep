
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading w3-theme"><?php echo $news->topic; ?></div>
        <div class="panel-body">
            <?php echo $news->detail . "<br>";
            if (!empty($news->file)) {
                echo "<a style='color:green;'  href='" . base_url('assets/uploads/') . $news->file . "'><i class='fa fa-save'> Download</i><a/>";
            }
            ?>
        </div>
        <div class="panel-footer">
            <?php
            echo '<i class="fa fa-eye" aria-hidden="true"> &nbsp;</i><span >' . $news->read . ' view</span>&nbsp;&nbsp;&nbsp;';
            echo '<i class="fa fa-calendar" aria-hidden="true"> </i><span > ' . to_thai_date_short($news->date_sent) . '</span>';
            echo '<span class="pull-right w3-text-color" > <i class="fa fa-user" aria-hidden="true"> </i> ' . get_user_name($news->user_id) . '</span>';
            ?>
        </div>
    </div>
</div>