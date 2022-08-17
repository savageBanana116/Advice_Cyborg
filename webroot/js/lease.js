
const btn = document.getElementById('Submit');
btn.addEventListener('click',getInput);

Loan_Amount.oninput = function () {
    const maxlength = 8;
    if (this.value.length > maxlength) {
        this.value = this.value.slice(0,maxlength);
    }
}

Terms_of_Loan.oninput = function () {
    const maxlength = 2;
    if (this.value.length > maxlength ) {
        this.value = this.value.slice(0,maxlength);
    }
}

Number_of_Payment_Annually.oninput = function () {
    const maxlength = 2;
    if (this.value.length > maxlength ) {
        this.value = this.value.slice(0,maxlength);
    }
}


function getInput()
{
    const Loan_Date = document.getElementById("Loan_Date").value;
    const Loan_Amount = document.getElementById("Loan_Amount").value;
    const Interest_Rate = document.getElementById("Annual_Interest_Rate").value;
    const Interest_Rate_Percent = Interest_Rate / 100;
    const Loan_Term = document.getElementById("Terms_of_Loan").value;
    const No_Payment = document.getElementById("Number_of_Payment_Annually").value;
    const Loan_Date_String = Loan_Date.toString();


    if (Loan_Date !== "" && Loan_Amount !== 0 && Interest_Rate !== 0 && Loan_Term !== 0 && No_Payment !== 0) {
        const Final_Payment_Date = new Date(Date.parse(Loan_Date_String));
        Final_Payment_Date.setFullYear(parseInt(Loan_Term) + Final_Payment_Date.getFullYear())
        const Total_NO_Payments = Loan_Term * No_Payment;
        const Total_Interest = Loan_Amount * Interest_Rate_Percent * Loan_Term;
        const Interest = Math.round(Total_Interest * 100) / 100;

        console.log(Total_Interest);

        document.getElementById("Total_NO_Payments").innerHTML = Total_NO_Payments.toString();
        document.getElementById("Final_Payment_Date").innerHTML = Final_Payment_Date.toDateString();
        document.getElementById("Total_Interest").innerHTML = "$" + Interest;
    } else {
        alert('Please enter all values');
    }
}
