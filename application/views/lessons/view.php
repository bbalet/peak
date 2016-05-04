<?php
/**
 * This view allows to display a lesson
 * @copyright  Copyright (c) 2016 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/karthanea
 * @since      0.1.0
 */
?>

<style>
    .khm {
        font-family: 'Noto Sans Khmer', serif; font-size: 200%;
        color: red;
    }
    .kh {
        font-family: 'Noto Sans Khmer', serif; font-size: 200%;
        color: black;
    }
    .kh.selected, .khm.selected {
         color: blue;
    }
    
    #gloss  { 
        /*display: block;*/
    }
    #gloss  td {
        /*display: inline-block;*/
        padding: 5px;
        text-align: center;
    }
</style>

<div class="container-fluid" id="wrap">

<div class="row-fluid">
    <div class="col-md-12">
        
        <h1>Lesson number <span class="text-muted">1</span></h1>
        <h2>The pagoda of my village</h2>
        
            <table id="gloss">
                    <tr>
                        <td id="t1" class="khm">វត្ត</td>
                        <td id="t2" class="khm">នៅ</td>
                        <td id="t3" class="khm">ភូមិ</td>
                        <td id="t4" class="khm">ខ្ញុំ</td>
                    </tr>
                    <tr>
                        <td>pagoda</td>
                        <td>in</td>
                        <td>village</td>
                        <td>my</td>
                    </tr>
            </table>
        
            <audio id="audioSource" src="<?php echo base_url(); ?>audio/text-m-lesson1.mp3" controls></audio>
        
            <table id="gloss">
                    <tr>
                        <td id="w1" class="kh">នៅ</td>
                        <td id="w2" class="kh">ភូមិ</td>
                        <td id="w3" class="kh">ខ្ញុំ</td>
                        <td id="w4" class="kh">មាន</td>
                        <td id="w5" class="kh">វត្ត</td>
                        <td id="w6" class="kh">មួយ</td>
                        <td id="w7" class="kh">ឈ្មោះ</td>
                        <td id="w8" class="kh">វត្ត</td>
                        <td id="w9" class="kh">គ</td>
                        <td class="kh">។</td>
                    </tr>
                    <tr>
                        <td>nɨw</td>
                        <td>pʰim</td>
                        <td>kɲom</td>
                        <td>miən</td>
                        <td>ʋɔːt</td>
                        <td>muəj</td>
                        <td>cmuə̆h</td>
                        <td>ʋɔːt</td>
                        <td>kɔː</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>in/into</td>
                        <td>village</td>
                        <td>me/(my)</td>
                        <td>there is</td>
                        <td>pagoda</td>
                        <td>one/(a)</td>
                        <td>named</td>
                        <td>pagoda</td>
                        <td>ka</td>
                        <td>.</td>
                    </tr>
                    
                    <tr>
                        <td id="w10" class="kh">សាលារៀន</td>
                        <td id="w11" class="kh">ខ្ញុំ</td>
                        <td id="w12" class="kh">នៅ</td>
                        <td id="w13" class="kh">ក្នុង</td>
                        <td id="w14" class="kh">វត្ត</td>
                        <td id="w15" class="kh">នោះ</td>
                        <td id="w16" class="kh">សង់</td>
                        <td id="w17" class="kh">ឡើង</td>
                        <td id="w18" class="kh">ដោយ</td>
                    </tr>
                    <tr>
                        <td>saːliəriən</td>
                        <td>kɲom</td>
                        <td>nɨw</td>
                        <td>kʰnoŋ</td>
                        <td>ʋɔːt</td>
                        <td>nuə̆h</td>
                        <td>sɑŋ</td>
                        <td>lɑŋ</td>
                        <td>ɗaoj</td>
                    </tr>
                    <tr>
                        <td>school</td>
                        <td>me/(my)</td>
                        <td>in</td>
                        <td>inside</td>
                        <td>pagoda</td>
                        <td>this</td>
                        <td>build</td>
                        <td>erect/grow</td>
                        <td>by</td>
                    </tr>
            </table>
    </div>
</div>
    
<div class="row-fluid">
    <div class="col-md-12">
        <p>.</p>
    </div>
</div>
    

    
<div class="row-fluid">
    <div class="col-md-12">
        <p>Do not hesitate to use the dictionary from the menu bar.</p>
    </div>
</div>
    
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/popcorn-complete.min.js"></script>
<script type="text/javascript">
var pop = Popcorn("#audioSource");

var wordTimes = {
    "t1": { start: 1.404, end: 1.870 },
    "t2": { start: 1.871, end:  2.237 },
    "t3": { start: 2.238, end: 2.512 },
    "t4": { start: 2.513, end: 3.055 },
    
    "w1": { start: 3.447, end: 3.964 },
    "w2": { start: 3.956, end: 4.382 },
    "w3": { start: 4.383, end: 4.604 },
    "w4": { start: 4.605, end: 4.974 },
    "w5": { start: 4.975, end: 5.335 },
    "w6": { start: 5.340, end: 5.859 },
    "w7": { start: 5.860, end: 6.251 },
    "w8": { start: 6.251, end: 6.543 },
    "w9": { start: 6, end: 7 },
    "w10": { start: 6, end: 7 },
    "w11": { start: 6, end: 7 },
    "w12": { start: 6, end: 7 },
    "w13": { start: 6, end: 7 },
    "w14": { start: 6, end: 7 },
    "w15": { start: 6, end: 7 },
    "w16": { start: 6, end: 7 },
    "w17": { start: 6, end: 7 },
    "w18": { start: 6, end: 7 }
};

$.each(wordTimes, function(id, time) {
     pop.footnote({
        start: time.start,
        end: time.end,
        text: '',
        target: id,
        effect: "applyclass",
        applyclass: "selected"
    });
});

//pop.play();

$('.kh, .khm').click(function() {
    //TODO get the ID of the element that was clicked on, and find out the start postion from wordTimes
    var audio = $('#audioSource');
    audio[0].currentTime = parseFloat($(this).data('start'), 10);
    audio[0].play();
});
</script>
