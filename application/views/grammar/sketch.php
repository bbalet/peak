<style>
    @font-face { font-family: Hanuman; src: url('<?php echo base_url(); ?>fonts/NotoSansKhmer-Regular.ttf'); } 
    .kh { font-family: 'Noto Sans Khmer', serif; font-size: 600%; }
    .word:hover {
        background:#EDEDED;
        border-color:#EDEDED;
        cursor:pointer;
    }
</style>

<div class="container-fluid" id="wrap">

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>How to draw the consonants?</h1>
        </div>
    </div>

    <div class="row-fluid"><div class="col-md-12">&nbsp;</div></div>

    <div class="row-fluid">
        <div class="col-md-12">
            <label for="letter">Pick a letter:</label>
            <select class="form-control" id="letter"  name="letter" multiple>
                <option value="ka" selected><span class="kh">ក</span> ka</option>
                <option value="kha"><span class="kh">ខ</span> kha</option>
                <option value="ko"><span class="kh">គ</span> ko</option>
                <option value="kho"><span class="kh">ឃ</span> kho</option>
            </select>
        </div>
    </div>

    <div class="row-fluid"><div class="col-md-12">&nbsp;</div></div>
    
    <div class="row-fluid">
        <div class="col-md-12">
            <p></p>
            <p>Try to draw the letter into the right box. Erase by clicking on the erase button or by pressing <span class="muted">ESC</span> key.</p>
        </div>
    </div>
    
    <div class="row-fluid">
        <div class="col-md-12">
            <object id="imgLetter" type="image/svg+xml" data="<?php echo base_url(); ?>/letters/ka.svg" width="200px" height="200px"></object>
            <canvas id="sketch" width="200px" height="200px" style="border: 1px solid #ccc; cursor: url('<?php echo base_url(); ?>images/pen.gif'), auto;"></canvas>
            <button id="cmdErase" class="btn btn-large btn-danger" type="button"><span class="glyphicon glyphicon-trash"></span> &nbsp;Erase</button>
        </div>
    </div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/sketch.min.js"></script>
<script type="text/javascript">
    $(function() {

        //Select another letter and clear the sketch
        $("#letter option").click(function() {
            var selectedLetter = '<?php echo base_url(); ?>letters/' + $(this).val() + '.svg';
            $('#imgLetter').prop('data', selectedLetter);
            $('#sketch').sketch().actions = [];
            $('#sketch').sketch().redraw();
        });

        //Init the draw pad
        $('#sketch').sketch();

        //Erase the content of the draw pad when clicking on erase button
        $("#cmdErase").click(function() {
            $('#sketch').sketch().actions = [];
            $('#sketch').sketch().redraw();
        });

        //Erase the content of the draw pad when typing Escape Key
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $('#sketch').sketch().actions = [];
                $('#sketch').sketch().redraw();
            }
        });
    });
</script>
