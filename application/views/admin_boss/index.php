<script src="<?php echo base_url() ?>assets/vendor/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="<?php echo base_url() ?>assets/vendor/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
<link href="<?php echo base_url() ?>assets/vendor/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/ngy3lnp9j30bsphtqqr42tkm0xoixk5w3rprd27vjhfdhxo2/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ]
    });

</script>

<html>
<body>
<br>

<div class="row">
    <div class="panel panel-info ">
        <div class="panel-heading w3-theme">
            <i class="fa fa-user fa-2x "></i> ผู้บริหาร
            </span>

        </div>
        <div class="panel-body">

            <table id="table_data" class="table table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>ข้อความ</th>
                    <th>รูปภาพ</th>
                    <th>#</th>
                </tr>
                </thead>

            </table>
        </div>

    </div>

</div>


<div class="modal fade" id="frmModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มผู้บริหาร</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form id="frm_boss">
                <div class="modal-body">
                    <input type="hidden" id="action" value="insert">
                    <input type="hidden" class="form-control" id="row_id" placeholder="ROWID" value="">

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" placeholder="ID" value=""></div>
                    <div class="form-group">
                        <label for="name">ข้อความ</label>
                        <textarea class="form-control" id="name" placeholder="ข้อความ" value="" rows="10"></textarea>

                        <div class="form-group">
                            <label for="file">รูปภาพ</label>
                            <input type="hidden" class="form-control disabled" value="" id="file2">
                            <input type="file" class="form-control" id="file" name="file" placeholder="ไฟลล์" value="">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="btn_save">Save</button>
                        <button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <script src="<?php echo base_url() ?>assets/apps/js/admin_boss.js" charset="utf-8"></script>

    <!--         foreach ($invit_type as $r) {
                                    if ($outsite["invit_type"] == $r->id) {
                                        $s = "selected";
                                    } else {
                                        $s = "";
                                    }
                                    echo "<option value=" $r->id" $s > $r->name </option>";

    }
    -->