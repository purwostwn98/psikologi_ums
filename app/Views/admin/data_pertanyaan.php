<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<?php $locale = service('request')->getLocale();?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <a href="/admin/data-instrumen" class="btn btn-xs btn-secondary"><i class="fa fa-arrow-left text-110 align-text-bottom mr-1"></i> | Back</a>

        <h1 class="page-title text-primary-d2">
            Data Question <?= ucwords($data->nama_instrument) ?>
            <!-- <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
               
            </small> -->
        </h1>
        <button data-toggle="modal" data-target="#warningModal" class="btn btn-xs btn-primary"><i class="fa fa-plus text-110 align-text-bottom mr-1"></i> | Add Question</button>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <select class="ace-select text-dark-m1 bgc-default-l5 bgc-h-warning-l3  brc-default-m3 brc-h-warning-m1 form-control form-control-xs bahasa" id="form-field-select-11">
                    <option value="in">Indonesia</option>
                    <option value="en">English</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-bahasa" type="button"><i class="fa fa-calendar mr-1"></i> Go!</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!-- stat boxes -->
    <div class="row">
        <div class="col-12 tabel-pertanyaan">
            <table id="datatable" class="table table-border-y text-dark-m2 text-95 border-y-1 brc-secondary-l1">
                <thead class="text-secondary-m2 text-uppercase text-85">
                    <tr>
                        <th>No</th>
                        <th style="max-width: 500px;">Question</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data->data_pertanyaan as $key => $value) : ?>

                        <tr class="d-style bgc-h-default-l4">
                            <td class="pos-rel">
                                <?= $key + 1 ?>
                            </td>
                            <td>
                                <span class="text-105"><?= $value->soal ?></span>
                            </td>
                            <td>
                                <a onclick="Edit('<?= $value->action_delete ?>', '<?= $value->soal ?>','<?= $value->soal_eng ?>')"  data-toggle="modal" data-target="#editModal" href="#" class="btn btn-xs btn-warning text-white"><i class="fa fa-edit text-white"></i></a>
                                <a onclick="Delete('<?= $value->action_delete ?>')" data-toggle="modal" data-target="#dangerModal" href="#" class="btn btn-xs btn-danger text-white"><i class="fa fa-trash text-white"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal modal-lg fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-width-0 border-t-4 brc-primary-m2 px-3">
            <form action="" method="post">
                <input type="hidden" name="instrument" value="<?= $data->id_instrument ?>">
                <div class="modal-header py-2">
                    <i class="bgc-white fas fa-exclamation-circle mb-n4 mx-auto fa-3x text-primary-m2"></i>
                </div>

                <div class="modal-body text-center">
                    <p class="text-primary-d1 text-130 mt-3">
                        Add new question
                    </p>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Question in Indonesia</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea name="soal" required class="form-control" id="text_indo" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0"></label>
                    </div>

                    <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle_translate">
                            <label class="custom-control-label" for="toggle_translate">Auto translate by google translate</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Question in English</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea name="soal_eng" required class="form-control" id="text_eng" placeholder=""></textarea>
                    </div>
                </div>

                <div class="modal-footer bg-white justify-content-between px-0 py-3">
                    <button type="button" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-warning btn-a-light-danger" data-dismiss="modal">
                        <i class="fas fa-undo-alt mr-1 text-danger-m2"></i>
                        Cencel
                    </button>

                    <button type="submit" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-success btn-a-light-success">
                        Save
                        <i class="fa fa-arrow-right ml-1 text-success-m2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit data -->
<div class="modal modal-lg fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-width-0 border-t-4 brc-primary-m2 px-3">
            <form action="<?=base_url($locate.'/admin/edit-pertanyaan')?>" method="post">
                <input type="hidden" name="id_pertanyaan" id="id_pertanyaan_edit">
                <input type="hidden" name="instrument" value="<?= $data->id_instrument ?>">
                <div class="modal-header py-2">
                    <i class="bgc-white fas fa-exclamation-circle mb-n4 mx-auto fa-3x text-primary-m2"></i>
                </div>

                <div class="modal-body text-center">
                    <p class="text-primary-d1 text-130 mt-3">
                        Edit question
                    </p>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Question in Indonesia</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea name="soal" required class="form-control" id="text_indo_edit" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0"></label>
                    </div>

                    <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle_translate">
                            <label class="custom-control-label" for="toggle_translate">Auto translate by google translate</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Question in English</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea name="soal_eng" required class="form-control" id="text_eng_edit" placeholder=""></textarea>
                    </div>
                </div>

                <div class="modal-footer bg-white justify-content-between px-0 py-3">
                    <button type="button" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-warning btn-a-light-danger" data-dismiss="modal">
                        <i class="fas fa-undo-alt mr-1 text-danger-m2"></i>
                        Cencel
                    </button>

                    <button type="submit" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-success btn-a-light-success">
                        Save
                        <i class="fa fa-arrow-right ml-1 text-success-m2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal edit data -->


<!-- modal delete -->
<div class="modal fade" data-backdrop-bg="bgc-white" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="dangerModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content bgc-transparent brc-danger-m2 shadow">

            <div class="modal-header py-2 bgc-danger-tp1 border-0  radius-t-1">
                <h5 class="modal-title text-white-tp1 text-110 pl-2 font-bolder" id="dangerModalLabel">WARNING!</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body bgc-white-tp2 p-md-4 pl-md-5">

                <div class="d-flex align-items-top mr-2 mr-md-5">
                    <i class="fas fa-exclamation-triangle fa-2x text-warning-d2 float-rigt mr-4 mt-1"></i>
                    <div class="text-muted text-105">
                        are you sure you want to delete this question?

                        <div class="mt-2 d-none" id="id-danger-yes-input">
                            <div class="mb-1 text-grey-m2 text-90">Type YES to continue</div>
                            <input type="text" class="form-control form-control-sm brc-danger text-danger-m2" autocomplete="off">
                        </div>

                    </div>
                </div>
            </div>
            <form action="<?=base_url('/admin/delete-pertanyaan')?>" method="post">
                <input type="hidden" name="id_pertanyaan" id="id_pertanyaan">
                <input type="hidden" name="instrument" value="<?= $data->id_instrument ?>">
            <div class="modal-footer bgc-white-tp2 border-0">
                <button type="button" class="btn btn-md btn-wide btn-light-grey" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-md btn-danger" id="id-danger-yes-btn" >Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal delete -->

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
<script>
    $('.btn-bahasa').click(function(e) {
        e.preventDefault();
        var bahasa = $('.bahasa').val();
        $.ajax({
            url: "<?= site_url('dinamis/tabel-pertanyaan-bahasa'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                bahasa: bahasa
            },
            success: function(response) {
                // console.log(response);
                $('.tabel-pertanyaan').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });
</script>
<script>
    $("#toggle_translate").change(function() {
        if (this.checked) {
            var text = $('#text_indo').val()
            $.ajax({
                url: '<?= base_url("/translate-me") ?>',
                type: "GET",
                data: {
                    text: text
                },
                success: function(response) {
                    console.log('response', response)
                    $('#text_eng').val('sasa')
                },
            });

        }
    });

    $('#text_indo1').keyup(function() {
        var keyed = $(this).val();
        console.log(keyed)
        $.ajax({
            url: '<?= base_url("/translate-me") ?>',
            type: "GET",
            data: {
                text: keyed
            },
            success: function(response) {
                console.log(response)
                $('#text_eng').val('sasa')
            },

        });
        // $("#target").html(keyed);
    });
</script>
<script>
    function Delete(id_pertanyaan){
        $('#id_pertanyaan').val(id_pertanyaan)
    }

    function Edit(id_pertanyaan, soal, soal_eng){
        $('#id_pertanyaan_edit').val(id_pertanyaan)
        $('#text_indo_edit').val(soal)
        $('#text_eng_edit').val(soal_eng)

    }
</script>
<?= $this->endSection(); ?>