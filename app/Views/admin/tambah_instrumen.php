<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Form Add New Instrument
        </h1>
    </div>
    <hr class="my-4">
    <!-- stat boxes -->
    <div style="font-size: 14px;" class="row">
        <div class="col-12">
            <form action="">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label style="font-weight: bold;" for="id-form-field-1" class="mb-0">Instrument Name</label>
                    </div>

                    <div class="col-sm-9">
                        <input type="text" class="form-control col-sm-8 col-md-6" id="id-form-field-1">
                    </div>
                </div>
                <hr class="my-2">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label style="font-weight: bold;" for="id-form-field-1" class="mb-0">Instrument Description</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 62px;"></textarea>
                    </div>
                </div>
                <hr class="my-2">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label style="font-weight: bold;" for="id-form-field-1" class="mb-0">Number of Answer Option</label>
                    </div>

                    <div class="col-sm-9">
                        <select class="form-control col-sm-8 col-md-6 jumlah_option" id="form-field-select-1">
                            <option value=""></option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                    </div>
                </div>
                <div class="form_label_value">

                </div>
                <hr class="my-2">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label style="font-weight: bold;" for="id-form-field-1" class="mb-0">Result Ranges</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Low</label>
                    </div>

                    <div class="col-sm-3">
                        <input type="number" name="low_bawah" class="form-control col-md-12" id="id-form-field-1" placeholder="Lower limit">
                    </div>
                    <div class="col-sm-3">
                        <input type="number" name="low_atas" class="form-control col-md-12" id="id-form-field-1" placeholder="Upper limit">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Medium</label>
                    </div>

                    <div class="col-sm-3">
                        <input type="number" name="medium_bawah" class="form-control col-md-12" id="id-form-field-1" placeholder="Lower limit">
                    </div>
                    <div class="col-sm-3">
                        <input type="number" name="medium_atas" class="form-control col-md-12" id="id-form-field-1" placeholder="Upper limit">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">High</label>
                    </div>

                    <div class="col-sm-3">
                        <input type="number" name="high_bawah" class="form-control col-md-12" id="id-form-field-1" placeholder="Lower limit">
                    </div>
                    <div class="col-sm-3">
                        <input type="number" name="high_atas" class="form-control col-md-12" id="id-form-field-1" placeholder="Upper limit">
                    </div>
                </div>
                <hr class="my-2">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label style="font-weight: bold;" for="id-form-field-1" class="mb-0">Result Description</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Low</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 62px;"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">Medium</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 62px;"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                        <label for="id-form-field-1" class="mb-0">High</label>
                    </div>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 62px;"></textarea>
                    </div>
                </div>
                <div class="my-2 border-t-1 brc-grey-l1 bgc-grey-l3 py-3">
                    <div class="offset-md-3 col-md-9">
                        <button class="btn btn-info" type="button">
                            <i class="fa fa-check mr-1"></i>
                            Submit
                        </button>

                        <button class="btn btn-secondary ml-3" type="reset">
                            <i class="fa fa-undo mr-1"></i>
                            Reset
                        </button>
                    </div>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $('.jumlah_option').change(function(e) {
        e.preventDefault();
        var jumlah = $('.jumlah_option').val();
        $.ajax({
            url: "<?= site_url('dinamis/form-answer-option'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                jumlah: jumlah
            },
            success: function(response) {
                // console.log(response);
                $('.form_label_value').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });
</script>
<?= $this->endSection(); ?>