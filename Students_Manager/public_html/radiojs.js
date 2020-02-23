var emp1=document.getElementById("emp1");
var emp2=document.getElementById("emp2");
var emp3=document.getElementById("emp3");
var emp1radio=document.getElementById("emp1radio");
var emp2radio=document.getElementById("emp2radio");
var emp3radio=document.getElementById("emp3radio");
emp1radio.addEventListener("click",function (){
    emp2.style.display="none";
    emp3.style.display="none";
    emp1.style.display="block";
});
emp2radio.addEventListener("click",function (){
    emp1.style.display="none";
    emp3.style.display="none";
    emp2.style.display="block";
});
emp3radio.addEventListener("click",function (){
    emp2.style.display="none";
    emp1.style.display="none";
    emp3.style.display="block";
});
