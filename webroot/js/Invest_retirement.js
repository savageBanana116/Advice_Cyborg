

function hideInput(){
    var x = document.getElementById("input");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

    myResults();
}
function myResults(){

    var showOut = document.getElementById('output');
     showOut.style.display = 'block';
    const age = document.getElementById("inputAge").value;
    const income = document.getElementById("inputIncome").value;
    const otherIncome = document.getElementById("inputOthers").value;
    const lump = document.getElementById("inputLump").value;
    const superAnnual = document.getElementById("inputSuper").value;
    const investment = document.getElementById("inputInvestment").value;

    let myAge = age;
    let myIncome = income;
    let myOther = otherIncome;
    let myLump = lump;
    let mySuper = superAnnual;
    let myInvestment = investment;

    document.getElementById("myAge").innerHTML = myAge;
    document.getElementById("myIncome").innerHTML = myIncome;
    document.getElementById("myOtherIncome").innerHTML = myOther;
    document.getElementById("myLump").innerHTML = myLump;
    document.getElementById("mySuper").innerHTML = mySuper;
    document.getElementById("myInvestment").innerHTML = myInvestment;



}











