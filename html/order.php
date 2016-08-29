<script>
    var status, type, max, min;
    function userclick(num, btnCredit, btnLoan, stud, emp, bal, salary){
        if(num==1){
            status = "student";
            hide("credit", "stud", "emp", "bal", "salary");
        }
        else if(num==2){
            status = "self-employed";
            show("credit", "loan", "stud", "emp", "bal", "salary");
        }
        else{
            status = "employed";
            show("credit", "loan", "stud", "emp", "bal", "salary");
        }
    }
    function setAcct(num){
        if(num==1){
            type = "savings";
        }
        else if(num==2){
            type = "debit";
        }
        else if(num==3){
            type = "credit";
        }
        else{
            type = "loan";
        }
    }
    function setRange(num){
        if(num==1){
            max = 15000;
            min = 10000;
        }
        else if(num==2){
            max = 20000;
            min = 16000;
        }
        else if(num==3){
            max = 50000;
            min = 21000;
        }
        else if(num==4){
            max = 99000;
            min = 51000;
        }
        else if(num==5){
            min = 100000;
            max = 0;
        }
        else if(num==6)
            min = 0;
        else if(num==7){
            min = 500;
            max = 1999;
        }
        else if(num==8){
            min = 2000;
            max = 4999;
        }
        else if(num==9){
            min = 5000;
            max = 9,999;
        }
        else{
            min = 10000;
            max = 0;
        }


        window.location.href = "results.php?status=" + status +"&type=" + type +"&min=" + min +"&max=" + max;

        console.log(status);
        console.log(type);
        console.log(min + '-' + max);
    }

    function hide(btnCredit, btnLoan, stud, emp, bal, salary){
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

<!-- Title-->
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
                    <p class="list-group-item-text"></p>Monetary Range</p>
                </a></li>
            </ul>
        </div>
    </div>
    
    <!-- step 1 choices -->
    <div class="row setup-content" id="step-1">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1>What's your status?</h1>
                <br>
    <ul class="list-unstyled" id="activate-step-2">
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:userclick(1, "credit", "stud", "emp", "bal", "salary")'>I'm a Student</button>
    </li>
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:userclick(2, "credit", "loan", "stud", "emp", "bal", "salary")'>I'm Self-Employed</button>
    </li>
    <li>
      <button class="btn btn-primary btn-lg" onClick='javascript:userclick(3, "credit", "loan", "stud", "emp", "bal", "salary")'>I'm an Employee</button>
    </li>
    </ul>
            </div>
        </div>
    </div>
    
    <!-- step 2 choices -->
    <div class="row setup-content" id="step-2">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1 class="text-center">What are you looking for?</h1>

                <ul class="list list-unstyled" id="activate-step-3">
                <li>
                     <button class="btn btn-primary btn-lg" onClick='javascript:setAcct(1)'>Savings Account</button>
                </li>
                <li>
                    <button  class="btn btn-primary btn-lg" onClick='javascript:setAcct(2)'>Debit Card</button>
                </li>
                <li>
                    <button id="credit" class="btn btn-primary btn-lg" onClick='javascript:setAcct(3)'>Credit Card</button>
                </li>
                <li>
                    <button id="loan" class="btn btn-primary btn-lg" onClick='javascript:setAcct(4)'>Loan</button>
                </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- step 3 choices -->
    <div class="row setup-content" id="step-3">
        <div class="col-xs-8">
            <div class="col-md-8 well text-center">
                <h1 id="emp" class="text-center">Salary range</h1>
                <h1 id="stud" class="text-center">Minimum balance</h1>

                <ul id="salary" class="list list-unstyled">
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(1)'>10,000-15,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(2)'>16,000-20,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(3)'>21,000-50,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(4)'>51,000-99,000</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(5)'>100,000 and above</button>
                </li>
                </ul>

                <ul id="bal" class="list list-unstyled">
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(6)'>No minimum balance</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(7)'>500-1,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(8)'>2,000-4,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(9)'>5,000-9,999</button>
                </li>
                <li>
                    <button class="btn btn-primary btn-lg" onClick='javascript:setRange(10)'>10,000 and above</button>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>