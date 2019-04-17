
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo.ico">

  <title>Cost of living Calculator - First Steps in Melbourne</title>
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/firstStepForm.css">
  <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
  <form id="regForm" name="submit" method="POST" action="firstStepResult.php">
    <div class="form-group form1 tab" style="height: 100px">  
      <label for="" style="font-weight: bold;font-size: 35px" >1. In which univetsity will you be studying in Melbourne?</label>
      <select class="form-control univetsityList" id="university" name="university" style="width: 200px">
        <option>Please select</option>
        <option value="0">Monash University</option>
        <option value="1">University of Melbourne</option>
        <option value="2">RMIT University</option>
        <option value="3">Swinburne University of Technology</option>
        <option value="4">University of Divinity</option>
        <option value="5">Victoria University</option>
        <option value="6">Deakin University</option>
      </select>
    </div>
    <div class="form-group form2 tab">
      <label for="" style="font-weight: bold;font-size: 35px">2. Select you study campus</label>
      <select class="form-control custom-select" id="campus" name="campus" style="width: 200px">
      </select>
    </div>
    <!-- One "tab" for each step in the form: -->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >3. Where would you like to live?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="radio1" value="CityLiving" checked>
        <label class="form-check-label" for="exampleRadios1">
          City
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="radios" value="campusSuburb">
        <label class="form-check-label" for="exampleRadios2">
          The suburb of the campus
        </label>
      </div> 
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="radios" value="OtherSuburb">
        <label class="form-check-label" for="exampleRadios2">
          Other suburbs
        </label>
      </div>     
    </div>      

    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >4. Select the type of accommodation you like.</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radio1" value="house" checked>
        <label class="form-check-label" for="exampleRadios1">
          House
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radios" value="apartment">
        <label class="form-check-label" for="exampleRadios2">
          Apartment
        </label>
      </div>    
    </div>

    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >5. What's number of people you want to share?</label>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="number" value="0" class="custom-control-input" value="1"> 
        <label class="custom-control-label" for="customRadioInline1">None</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="1" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">One</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="two" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">two</label>
      </div>
    </div>
<!--transportation-->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 30px" >6. How many times will plan to go to the university per week?</label>
       <ul>
          <li>
            <input type="radio" name="transportTimes" value="01" checked/>
            <label for="transport_public_never">one</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="02" />
            <label for="transport_public_rarely">two</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="03" />
            <label for="transport_public_sometimes">three</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="04" />
            <label for="transport_public_often">four</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="05" />
            <label for="transport_public_often">five</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="06" />
            <label for="transport_public_often">six</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="07" />
            <label for="transport_public_often">seven</label>
          </li>
      </ul>
      <label for="" style="font-weight: bold;font-size: 30px" >7. Which way of transportation do you use?</label>
        <select class="form-control univetsityList" id="university" name="transSelect" style="width: 200px">
          <option value="onFoot/bicycle">OnFoot/bicycle</option>
          <option value="Public">Public transport</option>
          <option value="car">Car</option>
          <option value="taxi">Taxi</option>
        </select>
    </div>
    <!--Food-->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 30px" >8. How many time are you prefer to eat out per week?</label>
        <label for="formControlRange">Drag this slider to get the exact day.</label>
        <output id="dayOutput"></output>
      <input type="range" class="form-control-range" id="formControlRange" min="0" max="14" name="eatOutside" onchange="evalSlider()">
      <label class="form-check-label" for="exampleRadios1">
         Your preserence&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="vegan" checked="unchecked">Vegan<br>
      <input style="margin-left: 130px" class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="mm" checked="checked">Meat-lover
    
  </label>
      
    </div>

    <div style="overflow:auto;">
      <div style="float:right; margin-top: 20px">
        <button type="button" class="btn btn-primary btn-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" class="btn btn-primary btn-sm" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Circles -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>

</form>
</body>
<script type="text/javascript" src="js/firstStepForm.js"></script>
</html>