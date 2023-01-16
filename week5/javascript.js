const d = new Date();
document.getElementById("date").innerHTML = d;
console.log('Hello World');

function myFunction() {
    document.getElementById("button").innerHTML = "Hello World";
  }

function myFunction1() {
    alert("Hello! I am an alert box!");
  }

function myFunction2() {
      var myWindow = window.open("", "", "width=200, height=100");
      myWindow.blur();
    }