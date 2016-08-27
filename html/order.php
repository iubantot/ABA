<script>
    function hide(btnCredit, btnLoan, stud, emp){
        document.getElementById("credit").style = "DISPLAY: none;";
        document.getElementById("loan").style = "DISPLAY: none;";
        document.getElementById("emp").style = "DISPLAY: none;";
        document.getElementById("stud").style = "DISPLAY: initial;";
        document.getElementById("salary").style = "DISPLAY: none;";
        document.getElementById("bal").style  = "DISPLAY: initial;";
    };
    function show(btnCredit, btnLoan, stud, emp){
        document.getElementById("credit").style = "DISPLAY: initial;";
        document.getElementById("loan").style = "DISPLAY: initial;";
        document.getElementById("emp").style = "DISPLAY: initial;";
        document.getElementById("stud").style = "DISPLAY: none";
        document.getElementById("salary").style = "DISPLAY: initial;";
        document.getElementById("bal").style  = "DISPLAY: none;";
    };
</script>
<div class="container">
	<div class="row form-group">
        <div class="col-xs-6">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">What's your status?</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">What are you looking for?</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text"></p>Finance</p>
                </a></li>
            </ul>
        </div>
	</div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1>What's your status?</h1>
				<br>
    <ul class="list-unstyled" id="activate-step-2">
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:hide("credit", "stud", "emp", "bal", "salary")'>I'm a Student</button>
    </li>
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:show("credit", "loan", "stud", "emp", "bal", "salary")'>I'm Self-Employed</button>
    </li>
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:show("credit", "loan", "stud", "emp", "bal", "salary")'>I'm an Employee</button>
    </li>
    </ul>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1 class="text-center">What are you looking for?</h1>

                <ul class="list list-unstyled" id="activate-step-3">
                <li>
			         <button class="btn btn-primary btn-lg">Savings Account</button>
                </li>
                <li>
                    <button  class="btn btn-primary btn-lg">Debit Card</button>
                </li>
                <li>
                    <button id="credit" class="btn btn-primary btn-lg">Credit Card</button>
                </li>
                <li>
                    <button id="loan" class="btn btn-primary btn-lg">Loan</button>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1 id="emp" class="text-center">Salary range</h1>
                <h1 id="stud" class="text-center">Minimum balance</h1>

                <ul id="salary" class="list list-unstyled">
                <li>
                    <button class="btn btn-primary btn-lg">10,000-15,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">16,000-20,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">21,000-50,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">51,000-99,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">100,000 and above</button>
                </li>
                </ul>

                <ul id="bal" class="list list-unstyled">
                <li>
                    <button class="btn btn-primary btn-lg">No minimum balance</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">500-1,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">2,000-4,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">5,000-9,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg">10,000 and above</button>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>