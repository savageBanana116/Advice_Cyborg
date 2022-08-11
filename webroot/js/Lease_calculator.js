
const btn = document.getElementById('Submit');
btn.addEventListener('click',getInput);
function getInput() {
    const Loan_Date = document.getElementById("Loan_Date").value;
    const Loan_Amount = document.getElementById("Loan_Amount").value;
    const Interest_Rate = document.getElementById("Annual_Interest_Rate").value;
    const Interest_Rate_Percent = Interest_Rate / 100;
    const Loan_Term = document.getElementById("Terms_of_Loan").value;
    const No_Payment = document.getElementById("Number_of_Payment_Annually").value;
    const Loan_Date_String = Loan_Date.toString();



    const Final_Payment_Date = new Date(Date.parse(Loan_Date_String));
    Final_Payment_Date.setFullYear(parseInt(Loan_Term) + Final_Payment_Date.getFullYear())
    const Total_NO_Payments = Loan_Term * No_Payment;
    const Total_Interest = Loan_Amount * Interest_Rate_Percent * Loan_Term;


    console.log("Total Number of Payments is: " + Total_NO_Payments);
    console.log("Final Payment Date is: " + Final_Payment_Date.toDateString());
    console.log("Total Interest is: " + Total_Interest);

    document.getElementById("Total_NO_Payments").value = Total_NO_Payments;
    document.getElementById("Final_Payment_Date").value = Final_Payment_Date.toDateString();
    document.getElementById("Total_Interest").value = Total_Interest;

}
