class ChecNum {
    constructor(num) {
        this.num = num;
    }
    check() {
        if (!isNaN(this.num)) {
            if (this.num % 2 === 0) {
                return "The number is even";
            } else {
                return "The number is odd";
            }
        } else {
            return "Please enter a valid number.";
        }
    }
}

function even_odd() {
    var num = parseInt(document.getElementById("num").value);
    
    var check = new ChecNum(num);
    var result = check.check();
    
    var div = document.getElementById("result");
    div.innerHTML = "<p>" + result + "</p>";
}
