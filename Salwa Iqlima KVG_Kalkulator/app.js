let buttons = document.querySelectorAll("button");
let aku = document.querySelector(".userEntry");
let finalCalc = document.querySelector(".finalCalc");

var one = [];
var two = [];
var operator = [];
var finalAnswer = 0;


[...buttons].map(x => {
    x.addEventListener("click", function (e) {

        switch (this.innerHTML) {
            case "AC":
                clearDisplay();
                break;
            case "DEL":
                removeNumber();
                break;
            case "+/-":
                makeNegative();
                break;
            case "=":
                makeCalculation();
                break;    
            case "+":
                operator.splice(0, 1, this.innerHTML)
                console.log(operator);

                storeValue();
                break;
            case "*":
                operator.splice(0, 1, this.innerHTML)
                console.log(operator);

                storeValue();
                break;
            case "/":
                operator.splice(0, 1, this.innerHTML)
                console.log(operator);

                storeValue();
                break;
            case "-":
                operator.splice(0, 1, this.innerHTML);
                console.log(operator);
                storeValue();
                break;
            default:
                 if (one.length >11) {
                    alert("No more values beyond 8");
                }

                 else {

                    one.push(this.innerText);
                    aku.textContent = one.join("");
                    console.log(one);

                }
                break;
            case ".":
                if (one.includes(".")) {
                    alert("You cannot use anymore decimals");
                } else {
                    one.push(this.innerText);
                    aku.textContent = one.join("");

                }
                break;
        }
    })
})


function add(a, b) {
	return a + b;
}


function subtract(a, b) {
	return a - b;
}

function divide(a, b){
	return a / b;
}

function multiply(a, b){
	return a * b;
}

function module(a, b) {
	return a % b;
}


function clearDisplay() {

    aku.textContent = "";
    finalCalc.textContent = ""
    one = [];
    two = [];
    operator = [];
}

function removeNumber(e) {

    one.pop();
    aku.textContent = one.join("");
}


function makeNegative() {

    if (one.length < 1) {
        return false;
    }else if(one[0] == "-") {
        one.shift()

    } else {
        one.unshift("-")

    }
    aku.textContent = one.join("");
}

function makeCalculation() {

    if (two.length > 0 && operator.length!==0) {
        finalAnswer = two.concat(operator, one).join("");
        finalAnswer = eval(two + operator + one.join(""));
        finalCalc.textContent = "";
        finalCalc.textContent = eval(finalAnswer).toFixed(2);
        aku.textContent = "";
        two = eval(finalAnswer);
        one = [];
        operator = [];

    } else if (operator.length == 0) {

        alert("invalid calculation there is no operator");        
    }

    else {
        finalAnswer = two.concat(operator, one).join
        finalAnswer = finalAnswer = eval(two + operator + one.join(""));

        console.log("final answer");
        console.log(finalAnswer);
        finalCalc.textContent = "";
        aku.textContent = "";
        finalCalc.textContent = eval(finalAnswer).toFixed(2);
        operator = [];
        two = eval(finalAnswer);
        one = [];

    }

}

function storeValue() {

        if (one.length == 0 && two.length==0) {
            return false;
        } else if (two.length > 0) {
            finalCalc.textContent = two + " " + operator;
            
        }else if(two.length==0) {
            two.push(one.join(""));
            one = [];
            aku.textContent = "";
            finalCalc.textContent = "";
            finalCalc.textContent = two + " " + operator;       
    }
        finalCalc.textContent =two + " " + operator; 
}