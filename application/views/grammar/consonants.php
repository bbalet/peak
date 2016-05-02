
<style>
    @font-face { font-family: Bayon; src: url('<?php echo base_url(); ?>fonts/Bayon.ttf'); } 
    @font-face { font-family: Hanuman; src: url('<?php echo base_url(); ?>fonts/Hanuman.ttf'); }
    @font-face { font-family: Fasthand; src: url('<?php echo base_url(); ?>fonts/Fasthand.ttf'); }
    @font-face { font-family: Dangrek; src: url('<?php echo base_url(); ?>fonts/Dangrek.ttf'); }
    @font-face { font-family: Chenla; src: url('<?php echo base_url(); ?>fonts/Chenla.ttf'); }
    @font-face { font-family: Moulpali; src: url('<?php echo base_url(); ?>fonts/Moulpali.ttf'); }
    @font-face { font-family: Angkor; src: url('<?php echo base_url(); ?>fonts/Angkor.ttf'); }
    @font-face { font-family: Suwannaphum; src: url('<?php echo base_url(); ?>fonts/Suwannaphum.ttf'); }
    @font-face { font-family: Preahvihear; src: url('<?php echo base_url(); ?>fonts/Preahvihear.ttf'); }
    @font-face { font-family: Nokora; src: url('<?php echo base_url(); ?>fonts/Nokora.ttf'); }
    @font-face { font-family: Siemreap; src: url('<?php echo base_url(); ?>fonts/Siemreap.ttf'); }
    @font-face { font-family: Odor+Mean+Chey; src: url('<?php echo base_url(); ?>fonts/Odor+Mean+Chey.ttf'); }
    @font-face { font-family: Khmer; src: url('<?php echo base_url(); ?>fonts/Khmer.ttf'); }
    @font-face { font-family: Battambang; src: url('<?php echo base_url(); ?>fonts/Battambang.ttf'); }
    @font-face { font-family: Freehand; src: url('<?php echo base_url(); ?>fonts/Freehand.ttf'); }
    @font-face { font-family: Moul; src: url('<?php echo base_url(); ?>fonts/Moul.ttf'); }
    @font-face { font-family: Content; src: url('<?php echo base_url(); ?>fonts/Content.ttf'); }
    @font-face { font-family: Bokor; src: url('<?php echo base_url(); ?>fonts/Bokor.ttf'); }
    @font-face { font-family: Koulen; src: url('<?php echo base_url(); ?>fonts/Koulen.ttf'); }
    @font-face { font-family: Kdam+Thmor; src: url('<?php echo base_url(); ?>fonts/Kdam+Thmor.ttf'); }
    @font-face { font-family: Taprom; src: url('<?php echo base_url(); ?>fonts/Taprom.ttf'); }
    @font-face { font-family: Metal; src: url('<?php echo base_url(); ?>fonts/Metal.ttf'); }
    @font-face { font-family: Kantumruy; src: url('<?php echo base_url(); ?>fonts/Kantumruy.ttf'); }
    .kh { font-family: 'Hanuman', serif; font-size: 250%; }
    .word:hover {
        background:#EDEDED;
        border-color:#EDEDED;
        cursor:pointer;
    }
    .speaker:hover {
        cursor:pointer;
    }
</style>

<div class="container-fluid" id="wrap">

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>Khmer consonants</h1>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-8">
            <p>Select the sex of the native speaker by clicking on the either the male or female icon. Then click on the consonant to be pronounced.</p>
        </div>
        <div class="col-md-4">
            <div class="row-fluid">
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img id="female" src="<?php echo base_url(); ?>images/female.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img id="male" src="<?php echo base_url(); ?>images/male.png">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-6">
            <label for="transcript">Transcription System:</label>
            <select id="transcript" name="transcript">
                <option value="UNGEGN" selected>UNGEGN</option>
                <option value="IPA">IPA</option>
                <option value="None">Hide</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="font">Font family:</label>
            <select id="font" name="font">
                <option value="Bayon">Bayon</option>
                <option value="Hanuman" selected>Hanuman</option>
                <option value="Fasthand">Fasthand</option>
                <option value="Dangrek">Dangrek</option>
                <option value="Chenla">Chenla</option>
                <option value="Moulpali">Moulpali</option>
                <option value="Angkor">Angkor</option>
                <option value="Suwannaphum">Suwannaphum</option>
                <option value="Preahvihear">Preahvihear</option>
                <option value="Nokora">Nokora</option>
                <option value="Siemreap">Siemreap</option>
                <option value="Odor+Mean+Chey">Odor Mean Chey</option>
                <option value="Khmer">Khmer</option>
                <option value="Battambang">Battambang</option>
                <option value="Freehand">Freehand</option>
                <option value="Moul">Moul</option>
                <option value="Content">Content</option>
                <option value="Bokor">Bokor</option>
                <option value="Koulen">Koulen</option>
                <option value="Kdam+Thmor">Kdam Thmor</option>
                <option value="Taprom">Taprom</option>
                <option value="Metal">Metal</option>
                <option value="Kantumruy">Kantumruy</option>
            </select>
        </div>
    </div>

    <div class="row-fluid"><div class="col-md-12">&nbsp;</div></div>

    <div class="row-fluid">
        <div class="col-md-12">
            <table id="consonnants" class="table table-bordered">
                <tr>
                    <td class='word' data-id='ka'>
                        <span class="kh">ក</span><br /><br />
                        <span id="0">kâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='kha'>
                        <span class="kh">ខ</span><br /><br />
                        <span id="1">khâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ko'>
                        <span class="kh">គ</span><br /><br />
                        <span id="2">kô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='kho'>
                        <span class="kh">ឃ</span><br /><br />
                        <span id="3">khô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ngo'>
                        <span class="kh">ង</span><br /><br />
                        <span id="4">ngô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class='word' data-id='ca'>
                        <span class="kh">ច</span><br /><br />
                        <span id="5">châ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='cha'>
                        <span class="kh">ឆ</span><br /><br />
                        <span id="6">chhâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='co'>
                        <span class="kh">ជ</span><br /><br />
                        <span id="7">chô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='cho'>
                        <span class="kh">ឈ</span><br /><br />
                        <span id="8">chhô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='nyo'>
                        <span class="kh">ញ</span><br /><br />
                        <span id="9">nhô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class='word' data-id='da'>
                        <span class="kh">ដ</span><br /><br />
                        <span id="10">dâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ttha'>
                        <span class="kh">ឋ</span><br /><br />
                        <span id="11">thâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='do'>
                        <span class="kh">ឌ</span><br /><br />
                        <span id="12">dô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ttho'>
                        <span class="kh">ឍ</span><br /><br />
                        <span id="13">thô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='nno'>
                        <span class="kh">ណ</span><br /><br />
                        <span id="14">nâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class='word' data-id='ta'>
                        <span class="kh">ត</span><br /><br />
                        <span id="15">tâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='tha'>
                        <span class="kh">ថ</span><br /><br />
                        <span id="16">thâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='to'>
                        <span class="kh">ទ</span><br /><br />
                        <span id="17">tô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='tho'>
                        <span class="kh">ធ</span><br /><br />
                        <span id="18">thô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='no'>
                        <span class="kh">ន</span><br /><br />
                        <span id="19">nô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class='word' data-id='ba'>
                        <span class="kh">ប</span><br /><br />
                        <span id="20">bâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='pha'>
                        <span class="kh">ផ</span><br /><br />
                        <span id="21">phâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='po'>
                        <span class="kh">ព</span><br /><br />
                        <span id="22">pô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='pho'>
                        <span class="kh">ភ</span><br /><br />
                        <span id="23">phô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='mo'>
                        <span class="kh">ម</span><br /><br />
                        <span id="24">mô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class='word' data-id='yo'>
                        <span class="kh">យ</span><br /><br />
                        <span id="25">yô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ro'>
                        <span class="kh">រ</span><br /><br />
                        <span id="26">rô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='lo'>
                        <span class="kh">ល</span><br /><br />
                        <span id="27">lô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='vo'>
                        <span class="kh">វ</span><br /><br />
                        <span id="28">vô</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class='word' data-id='sa'>
                        <span class="kh">ស</span><br /><br />
                        <span id="29">sâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='ha'>
                        <span class="kh">ហ</span><br /><br />
                        <span id="30">hâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='la'>
                        <span class="kh">ឡ</span><br /><br />
                        <span id="31">lâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td class='word' data-id='qa'>
                        <span class="kh">អ</span><br /><br />
                        <span id="32">qâ</span>&nbsp;<span class="glyphicon glyphicon-volume-up"></span>
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/buzz.min.js"></script>
<script type="text/javascript">

    var transcripts = {
        'UNGEGN': ['kâ', 'khâ', 'kô', 'khô', 'ngô',
            'châ', 'chhâ', 'chô', 'chhô', 'nhô',
            'dâ', 'thâ', 'dô', 'thô', 'nâ',
            'tâ', 'thâ', 'tô', 'thô', 'nô',
            'bâ', 'phâ', 'pô', 'phô', 'mô',
            'yô', 'rô', 'lô', 'vô',
            'sâ', 'hâ', 'lâ', 'qâ'],
        'IPA': ['kɑ', 'kʰɑ', 'kɔ', 'kʰɔ', 'ŋɔ',
            'cɑ', 'cʰɑ', 'cɔ', 'cʰɔ', 'ɲɔ',
            'ɗɑ', 'tʰɑ', 'ɗɔ', 'tʰɔ', 'nɑ',
            'tɑ', 'tʰɑ', 'tɔ', 'tʰɔ', 'nɔ',
            'ɓɑ', 'pʰɑ', 'pɔ', 'pʰɔ', 'mɔ',
            'jɔ', 'rɔ', 'lɔ', 'ʋɔ',
            'sɑ', 'hɑ', 'lɑ', 'ʔɑ'],
        'None': ['', '', '', '', '',
            '', '', '', '', '',
            '', '', '', '', '',
            '', '', '', '', '',
            '', '', '', '', '',
            '', '', '', '',
            '', '', '', '']
    };

    var strSpeaker = "#female";

    function change_transcript(transcript_system) {
        var arrayLength = transcript_system.length;
        for (var ii = 0; ii < arrayLength; ii++) {
            var elemID = '#' + ii;
            $(elemID).html(transcript_system[ii]);
        }
    }

    $(function() {

//Female speaking http://www.reankhmer.com/References/khmer-alphabet-chart
//Numbers http://www.seasite.niu.edu/khmer/writingsystem/numbernew/num_set.htm
//http://opensource.faroemedia.com/selectator/
        $('#transcript').on('change', function() {
            switch ($(this).val()) {
                case 'UNGEGN':
                    change_transcript(transcripts.UNGEGN);
                    break;
                case 'IPA':
                    change_transcript(transcripts.IPA);
                    break;
                case 'None':
                    change_transcript(transcripts.None);
                    break;
            }
        });

        $('#font').on('change', function() {
            switch ($(this).val()) {
                case 'Bayon':
                    $('.kh').css("font-family", "'Bayon', cursive");
                    break;
                case 'Hanuman':
                    $('.kh').css("font-family", "'Hanuman', serif");
                    break;
                case 'Fasthand':
                    $('.kh').css("font-family", "'Fasthand', serif");
                    break;
                case 'Dangrek':
                    $('.kh').css("font-family", "'Dangrek', cursive");
                    break;
                case 'Chenla':
                    $('.kh').css("font-family", "'Chenla', cursive");
                    break;
                case 'Moulpali':
                    $('.kh').css("font-family", "'Moulpali', cursive");
                    break;
                case 'Angkor':
                    $('.kh').css("font-family", "'Angkor', cursive");
                    break;
                case 'Suwannaphum':
                    $('.kh').css("font-family", "'Suwannaphum', cursive");
                    break;
                case 'Preahvihear':
                    $('.kh').css("font-family", "'Preahvihear', cursive");
                    break;
                case 'Nokora':
                    $('.kh').css("font-family", "'Nokora', serif");
                    break;
                case 'Siemreap':
                    $('.kh').css("font-family", "'Siemreap', cursive");
                    break;
                case 'Odor+Mean+Chey':
                    $('.kh').css("font-family", "'Odor Mean Chey', cursive");
                    break;
                case 'Khmer':
                    $('.kh').css("font-family", "'Khmer', cursive");
                    break;
                case 'Battambang':
                    $('.kh').css("font-family", "'Battambang', cursive");
                    break;
                case 'Freehand':
                    $('.kh').css("font-family", "'Freehand', cursive");
                    break;
                case 'Moul':
                    $('.kh').css("font-family", "'Moul', cursive");
                    break;
                case 'Content':
                    $('.kh').css("font-family", "'Content', cursive");
                    break;
                case 'Bokor':
                    $('.kh').css("font-family", "'Bokor', cursive");
                    break;
                case 'Koulen':
                    $('.kh').css("font-family", "'Koulen', cursive");
                    break;
                case 'Kdam+Thmor':
                    $('.kh').css("font-family", "'Kdam Thmor', cursive");
                    break;
                case 'Taprom':
                    $('.kh').css("font-family", "'Taprom', cursive");
                    break;
                case 'Metal':
                    $('.kh').css("font-family", "'Metal', cursive");
                    break;
                case 'Kantumruy':
                    $('.kh').css("font-family", "'Kantumruy', sans-serif");
                    break;
            }
        });

        $("#consonnants").on("click", "td", function() {
            if (strSpeaker == "#female") {
                audioFile = "<?php echo base_url(); ?>audio/letter-f-" + $(this).data("id") + ".mp3";
            } else {
                audioFile = "<?php echo base_url(); ?>audio/letter-m-" + $(this).data("id") + ".mp3";
            }
            var mySound = new buzz.sound(audioFile);
            mySound.play();
        });

        $(strSpeaker).css("background-color", "yellow");

        $('#female').on('click', function() {
            $(strSpeaker).css("background-color", "white");
            strSpeaker = "#female";
            $(strSpeaker).css("background-color", "yellow");
        });

        $('#male').on('click', function() {
            $(strSpeaker).css("background-color", "white");
            strSpeaker = "#male";
            $(strSpeaker).css("background-color", "yellow");
        });
    });

</script>
