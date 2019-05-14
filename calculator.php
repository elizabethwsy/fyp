<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>
  <title>SurvivEEE | Calculator</title>
</head>
<body>

  <style>
#class-name {
  margin-left: 5px;
  font-size: 1.2rem;
  font-weight: bold;
}

.course {
  width: 400px;
  height: 35px;
  padding-left: 5px;
  margin-left: 10px;
  margin-right: 50px;
  font-size: 20px;
  border: 1px solid gray;
  border-radius: 4px;
}

.units {
  width: 100px;
  height: 35px;
  margin-right: 50px;
  font-size: 20px;
  border: 1px solid gray;
  border-radius: 4px;
}

.block {
  margin-bottom: 20px;
}


.result {
  width: 90px;
  padding-top: 10px;
  border: 1px solid black;
  text-align: center;
  margin: 20px auto 20px auto;
}

.outer-block{
  overflow-y: scroll;
}

#gpa {
  font-size: 1.6rem;
  color: black;
  text-shadow: none;
  padding: 0;
}

.grade-select {
  border: 1px solid gray;
  border-radius: 4px;
  height: 28px;
  width: 90px;
}

.calculator{
  height:100vh;
  background: linear-gradient(0deg,rgba(4, 32, 42, 0.3), rgba(255, 255, 255, .1)), url(images/calculator.jpg);
  display: flex;
  justify-content: left;
  align-items: flex-start;
  background-repeat: no-repeat;
  position: relative;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;

}

.calculator>*:first-child {
    align-self: flex-end;
}


.landing-text-bg h4{
    color: #fff;
    padding-top: 1rem;
    font-size: 1.2rem;
    text-align: justify;
    line-height: 1.3;
    margin-top: 0;
    z-index: 4;

}

.landing-text-bg{
  width: 48%;
  padding-left: 8%; 
}

.cal-landing-text{
  color: #fff;
  font-family: 'Fira Sans Condensed';
  font-size: 560%;
  font-weight: 600;
  letter-spacing: 2px;
  text-align: left;
  line-height: .9;
  margin-bottom: 10px;
  text-shadow: 0px 0px 4px #222;
  width: 45%;
}


.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 15px;
}


.switch input {
  display: none;
}


/* The slider */

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left:4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked+.slider {
  background-color: #9AAFBB;
}

input:focus+.slider {
  box-shadow: 0 0 1px #9AAFBB;
}

input:checked+.slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
}


/* Rounded sliders */

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#menu2 {
display:none;
}


.gpa-calculators{
  padding: 2.4rem;
  border-radius: 10px;
  box-shadow: 0 2px 6px 0 rgba(0,0,0,.30);
  background-color: rgba(255, 255, 255, .95); 
}

.gpa-calculators p, .gpa-calculators label, .gpa-calculators .btn{
  color: #000;
  text-shadow: none;
}

input{
  width: 60px;
  background: transparent;
  border-bottom: 1px #000 solid;
  color: #000;
}
/* Hide default HTML checkbox */



/*------------------ RESPONSIVE ---------------------*/


@media screen and (max-width: 768px){

  .cal-landing-text{
    width: 0%;
  }

  .landing-text-bg {
    width: 100%;
    padding:2rem;
    align-self: center;
  }

  .landing-text-bg h4{
    font-size: 1.4rem;
  }

}

@media screen and (max-width: 575px){
  .landing-text-bg {
    padding: 1.5rem;
  }

  .landing-text-bg h4{
    font-size: 1.2rem;
    text-align: center;
  }

  .gpa-calculators {
    padding: 1.4rem;
  }
}



@media screen and (min-width: 769px) and (max-width: 992px){
  .landing-text-bg {
    width: 100%;
    padding:2rem;
    align-self: center;
  }
}

</style>


  <div class="wrapper">
    <!-- Navbar -->
    <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <div id="content" class="content">
      <div class="landing-header home-landing calculator" id="calculator">
          <h2 class="cal-landing-text pl-3">GPA Calculator</h2>
        <div class="landing-text-bg " >
            <h4 class="p-3">Calculate your cumulative GPA, and see how your current (and future) grades will affect your performance.</h4>
          <div class="gpa-calculators" style="overflow-y: scroll;">
            <form>
              <label class="switch">
                <input type="checkbox" id="toggle" checked="true" />
                <div class="slider round"></div>
              </label>
            </form>
            <div class="row" id="menu1">
              <div class="col-12" style=" overflow-y: scroll; ">
                <p style="text-align: justify;">Use this tool to calculate your current semester grade point averages. 
                To calculate GPA for the current semester enter the AUs and grades in the rows. (+) Add courses if you take more modules.</p>
                <div class='outer-box'>
                  <div class='inner-box'>
                    <p id="class-name">Current GPA</p>
                    <form class='block'>
                      <label>Units</label>
                      <input type="text" class='units'>
                      <label>Grade</label>
                      <select class='grade-select'>
                        <option value="">Select</option>
                        <option value="5.0">A+</option>
                        <option value="5.0">A</option>
                        <option value="4.5">A-</option>
                        <option value="4.0">B+</option>
                        <option value="3.5">B</option>
                        <option value="3.0">B-</option>
                        <option value="2.5">C+</option>
                        <option value="2.0">C</option>
                        <option value="1.5">C-</option>
                        <option value="1.0">D</option>
                        <option value="0.0">F</option>
                      </select>
                    </form>
                  <div class="add-course"></div>
                  </div>
                  <div class='btn btn-dark clone' id="add" style="color: #fff">(+) Add Course</div>
                  <div class="btn btn-light remove">remove</div>
                  <div class='result'>
                    <h3 id="gpa">GPA</h3>
                  </div>
                </div>
              </div>
            </div>
        <div class="row" id="menu2">
          <div class="calctarget col-12 p-0">
            <p>NTU GPA Target Calculator allows you to calculate what the average grades you need in the upcoming semesters in order to achieve your desired GPA or class.</p>
          </div>
            <div id="calcframe" class="calcframeh">
              <div class="row">
                <div class="input_block r_cgpa col-md-6" style="display: inline-block;">
              <input type="text"  id="start_gpa" style="float:left;">
              <br>
              <label for="start_gpa">Current cGPA</label>
            </div>
            <div class="input_block r_credits col-md-6" style="display: inline-block;">
              <input type="text" id="start_credits" style="float: right;"><br>
              <label for="start_credits">Graded AUs earned to Date</label>
            </div>
              </div>

            <div class="row">
            <div style="clear:both;border-bottom: 1px solid rgba(155,179,202,0.45);margin-bottom:10px;">
            </div>
            <p id="q1">
              I need to take <span class="out">??</span> more AUs if I want to raise my GPA by <input type="text" id="q1_point_amount" value="0.2"> points at an average GPA of <input type="text" id="q1_gpa_average">
              
            </p>
            <p id="q2">
              I'm taking <input type="text" id="q2_credits" value="16" /> AUs this semester. To raise my GPA by <input type="text" id="q2_point_amount" value="0.2"> points <span id="q2_point_amount_out"></span>, I need a <span class="out">??</span> for this semester.
            </p>
            <p id="q3">
              I'm left with <input type="text" id="q3_credits" value="16"> AUs this semester. Best possible GPA is <span class="out">??</span>
            </p>
            <p style="text-align:center; margin-bottom:0"><button id="calc-do" class="btn btn-dark" style="color: #fff">Calculate</button></p><p style="margin-bottom:0" id="errors"></p>
          </div>
             <div style="clear:both"></div>
           </div>
          </div>
        </div>
      </div>
        </div>

<!-- Footer -->
  <?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->

<script>
  var $oBox = $('.inner-box');
var $gpa = $('#gpa');
var $result = $('.result').hide();



$('.outer-box').on('click', '.remove', function() {
  $('.remove').closest('.outer-box').find('.block').not(':first').last().remove();
});
$('.outer-box').on('click', '.clone', function() {
  $('.clone').closest('.outer-box').find('.block').first().clone().appendTo('.add-course').find("input[type='text']").val("");
});

$oBox.on('keyup', '.units', function() {
  $gpa.text(getTotal());
});

$oBox.on("change", ".grade-select", function() {
  $gpa.text(getTotal());
  $result.is(":hidden") && $result.show();
});

function getTotal() {
  var gradeTotal = 0;
  var sum = 0;
  
  $(".units").each(function() {
    var $this = $(this);
    if(!isNaN($this.val()) && !isNaN($this.parent().find('.grade-select').val())) {
      sum += parseFloat($this.val() || 0) * parseFloat($this.parent().find('.grade-select').val() || 0);
      gradeTotal += parseFloat($this.val() || 0)
    }
  });
  return  (sum/gradeTotal).toFixed(2);
}



(function($) {
  $(document).ready(function() {
    var $frame = $('div#calcframe');
    $frame.html('<div class"row"><div class="input_block r_cgpa col-md-6" style="display: inline-block;"><input type="text" id="start_gpa" /><br /><label for="start_gpa">Current cGPA</label></div><div class="input_block r_credits col-md-6"style="display: inline-block;" ><input type="text" id="start_credits" /><br /><label for="start_credits">Graded AUs earned to Date</label></div></div><div style="clear:both;border-bottom: 1px solid rgba(155,179,202,0.45);margin-bottom:10px;" ></div>');
    $frame.append('<p id="q1">I need to take <span class="out">??</span> more AUs if I want to raise my GPA by <input type="text" id="q1_point_amount" value="0.2" /> points at an average GPA of <input type="text" id="q1_gpa_average"></p>');
    $frame.append('<p id="q2">I\'m taking <input type="text" id="q2_credits" value="16" /> AUs this semester. To raise my GPA by <input type="text" id="q2_point_amount" value="0.2" /> points <span id="q2_point_amount_out"></span>, I need a <span class="out">??</span> for this semester.</p>');
    $frame.append('<p id="q3">I\'m left with <input type="text" id="q3_credits" value="16" /> AUs this semester. Best possible GPA is <span class="out">??</span></p>');
    $frame.append('<p style="text-align:center; margin-bottom:0"><button id="calc-do" class="btn btn-dark" style="color: #fff;">Calculate</button></p><p style="margin-bottom:0" id="errors"></p>');

    $(document).on('change', 'div#calcframe input', doCalc); // Update calculation when numbers change
    $frame.children('#calc-do').click(doCalc); // Update calculation when button is clicked
    
    // Check for auto-fill
    if (window.location.hash != '') window.location.hash = decodeURIComponent(window.location.hash);
    if (window.location.hash != '' && window.location.hash.indexOf('|') > 0) {
      var hash = window.location.hash.substring(1);
      var pipe = hash.indexOf('|');
      var GPA = hash.substring(0,pipe);
      var credits = hash.substring(pipe+1);
      
      var $frame = $('div#calcframe');
      $frame.find('#start_gpa').val(GPA);
      $frame.find('#start_credits').val(credits);
      doCalc();
    }
  });


  $(function() {
  $("#toggle").click(function() {
    if ($(this).is(":checked")) {
      $("#menu1").show();
      $("#menu2").hide();
    } else {
      $("#menu1").hide();
      $("#menu2").show();
    }
  });
});


  
  function doCalc() {
    var $frame = $('div#calcframe');
    $frame.find('#errors').html('');
    var $inputs = $frame.find('input');
    if ($inputs.filter('#start_gpa').val() == '') return false;
    if ($inputs.filter('#start_credits').val() == '') return false;
    
    var startGPA = parseFloat($inputs.filter('#start_gpa').val());
    var startCredits = parseFloat($inputs.filter('#start_credits').val());
    
    // Q1
    if ($inputs.filter('#q1_point_amount').val() == '') $inputs.filter('#q1_point_amount').val('0.5');
    var targetGPA = parseFloat($inputs.filter('#q1_point_amount').val()) + parseFloat($inputs.filter('#start_gpa').val());
    if ($inputs.filter('#q1_gpa_average').val() == '') $inputs.filter('#q1_gpa_average').val(roundNumber(targetGPA+0.1, 2));
    
    $frame.find('span#q1_point_amount_out').html(' ('+roundNumber(targetGPA, 2)+')');
    
    var GPAavg = parseFloat($inputs.filter('#q1_gpa_average').val());
    if (GPAavg <= targetGPA) {
      // Impossible
      $frame.find('#q1 span.out').html('??').removeClass('warning');
      $frame.find('#errors').html('Average GPA must be more than the target GPA. ');
    } else {
      // (GPA * hours + Avg * X)/(hours + X) = targetGPA
      // GPA * hours + Avg * X = targetGPA * hours + targetGPA * X
      // GPA * hours - targetGPA * hours = X(targetGPA - Avg)
      // (hours(GPA - targetGPA))/(targetGPA - Avg) = X
      var credits = (startCredits * (startGPA - targetGPA)) / (targetGPA - GPAavg);
      $frame.find('#q1 span.out').html(roundNumber(credits, 1));
      if (credits > 21) {
        $frame.find('#q1 span.out').addClass('warning');
        $frame.find('#errors').html('High number of credits required for that average. ');
      } else {
        $frame.find('#q1 span.out').removeClass('warning');
      }
    }
    
    // Q2
    if ($inputs.filter('#q2_credits').val() == '') $inputs.filter('#q2_credits').val('16');
    if ($inputs.filter('#q2_point_amount').val() == '') $inputs.filter('#q2_point_amount').val('0.5');

    var targetGPA = parseFloat($inputs.filter('#q2_point_amount').val()) + parseFloat($inputs.filter('#start_gpa').val());
    $frame.find('span#q2_point_amount_out').html(' ('+roundNumber(targetGPA, 2)+')');
    var credits = parseFloat($inputs.filter('#q2_credits').val());
    // (GPA * hours + X * credits)/(hours + credits) = targetGPA
    // GPA * hours + X * credits = targetGPA * (hours + credits)
    // X * credits = targetGPA(hours + credits) - GPA * hours
    // X = (targetGPA(hours + credits) - GPA * hours)/credits
    var GPAavg = (targetGPA * (startCredits + credits) - startGPA * startCredits)/credits;
    $frame.find('#q2 span.out').html(roundNumber(GPAavg, 2));
    if (GPAavg > 5) {
      $frame.find('#q2 span.out').addClass('warning');
      $frame.find('#errors').append('Impossibly high GPA needed to achieve that. ');
    } else {
      $frame.find('#q2 span.out').removeClass('warning');
    }
    
    // Q3
    if ($inputs.filter('#q3_credits').val() == '') $inputs.filter('#q3_credits').val('16');
    var credits_left = parseFloat($inputs.filter('#q3_credits').val());
    // (5*credits_left) = maxSem
    // (startGPA * startCredits + maxSem )/ (startCredits + credits_left) 
    var maxGPA = (startGPA * startCredits + 5 * credits_left)/ (startCredits + credits_left);
    $frame.find('#q3 span.out').html(roundNumber(maxGPA, 2));
  }
  
  function roundNumber(val, precision) {
    var rounded = Math.round(val*Math.pow(10,precision))/Math.pow(10,precision);
    rounded = rounded+''; // Make into a string
    if (rounded.indexOf('.') < 0) {
      return rounded+'.'+Array(precision+1).join('0');
    } else if (rounded.length - rounded.indexOf('.') -1 < precision) {
      var delta = rounded.length - rounded.indexOf('.') - 1;
      return rounded+Array(precision - delta +1).join('0');
    } else {
      return rounded;
    }
  }
})(jQuery)


</script>