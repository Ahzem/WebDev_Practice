class Calculator {
	constructor(num1,num2){
		this.num1 = num1;
		this.num2 = num2;
	}
	
	calcAdd(){
		return this.num1 + this.num2;
	}
	
	calcSub(){
		return this.num1 - this.num2;
	}
	
	calcMul(){
		return this.num1 * this.num2;
	}
	
	calcDiv(){
		if (num2 != 0){
			return this.num1 / this.num2;
		} else {
			return "Can't Devide By Zero";
		}
	}
	
	calcMod(){
		return this.num1 % this.num2;
	}
}

function calculate(opt){
	var num1 = parseInt(document.getElementById("num1").value);
	var num2 = parseInt(document.getElementById("num2").value);
	
	var calc = new Calculator(num1,num2);
	
	var result;
	switch(opt){
		case 'add':
		result = calc.calcAdd();
		break;
		
		case 'sub':
		result = calc.calcSub();
		break;
		
		case 'mul':
		result = calc.calcMul();
		break;
		
		case 'div':
		result = calc.calcDiv();
		break;
		
		case 'mod':
		result = calc.calcMod();
		break;
		
		default:
		result = 'Error!';
	}
	
	document.getElementById("result").value = result;
}