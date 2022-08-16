const btn = document.getElementById("Submit_retirement");
btn.addEventListener('click',getRetirementInput);




function PMT(ir, np, pv, fv, type)
{
    /*
     * ir   - interest rate per month
     * np   - number of periods (months)
     * pv   - present value
     * fv   - future value
     * type - when the payments are due:
     *        0: end of the period, e.g. end of month (default)
     *        1: beginning of period
     */
    var pmt, pvif;

    fv || (fv = 0);
    type || (type = 0);

    if (ir === 0) {
        return -(pv + fv) / np;
    }

    pvif = Math.pow(1 + ir, np);
    pmt = - ir * (pv * pvif + fv) / (pvif - 1);

    if (type === 1) {
        pmt /= (1 + ir);
    }

    return pmt;
}
function FV(rate, nper, pmt, pv, type)
{
    var pow = Math.pow(1 + rate, nper),
        fv;

    pv = pv || 0;
    type = type || 0;

    if (rate) {
        fv = (pmt * (1 + rate * type) * (1 - pow) / rate) - pv * pow;
    } else {
        fv = -1 * (pv + pmt * nper);
    }

    return fv;
}

function getFV(PV,i,n)
{
    const interest = i / 100;
    const x = (1 + interest) ** n;
    const FV = x * PV;

    return Math.round(FV);
}



/*
function FV(rate, nper, pmt, pv, type) {
    type = 1;
    var pow = Math.pow(1 + rate, nper),
        fv;
    if (rate) {
        fv = (pmt*(1+rate*type)*(1-pow)/rate)-pv*pow;
    } else {
        fv = -1 * (pv + pmt * nper);
    }
    return fv;
}*/

//pmt = payment
//pmt = payment frequency per year
function getPV(rate,pmt_f,pmt,fv)
{
    if (rate == 0) {
        const pv_value = -(fv + (pmt * pmt_f));

        return pv_value * -1;
    } else {
        x = Math.pow(1 + rate, -pmt_f);
        y = Math.pow(1 + rate, pmt_f);
        const pv_value = -(x * (fv * rate - pmt + y * pmt)) / rate;

        return pv_value * -1;
    }
}

function getValueRequire(Year_Payments,Future_Payment,Interest_Rate,Indexation)
{
    lst = new Array();
    for (let i = Year_Payments; i > 0; i--) {
        if (i == Year_Payments) {
            const balance = getPV(Interest_Rate / 100,1,getFV(Future_Payment,Indexation,i - 1),0);
            lst.push(Math.round(balance));
        } else if (i != 1) {
            const balance = getPV(Interest_Rate / 100,1,getFV(Future_Payment,Indexation,i - 1),lst[lst.length - 1]);
            lst.push(Math.round(balance));
        } else {
            const balance = getPV(Interest_Rate / 100,1,Future_Payment,lst[lst.length - 1]);
            lst.push(Math.round(balance));
        }
    }

    return lst[lst.length - 1];
}


function getRetirementInput()
{
    const age = document.getElementById("Age").value;
    const Retirement_Age = document.getElementById("Retirement_Age").value;
    const Year_Payments = document.getElementById("Year_Payments").value;
    const Payment_Required_Today = document.getElementById("Payment_Required_Today").value;
    const Indexation = document.getElementById("Indexation").value;
    const Interest_Rate = document.getElementById("Interest_Rate").value;
    const Current_Super = document.getElementById("Current_Super").value;
    const Current_Net_Contributions = document.getElementById("Current_Net_Contributions").value;
    const Estimated_Return_Rate = document.getElementById("Estimated_Return_Rate").value;

    if (age == 0 || Retirement_Age == 0 || Year_Payments == 0 || Payment_Required_Today == 0 || Indexation == 0 || Interest_Rate == 0 ||
    Current_Super == 0 || Current_Net_Contributions || Estimated_Return_Rate == 0 ) {
        document.getElementById("Payment_Required_Future").value = "Please Enter All Value";
        document.getElementById("Value_Required").value = "Please Enter All Value";
        document.getElementById("Estimated_Annual_Deduct").value = "Please Enter All Value";
        document.getElementById("Estimated_Super").value = "Please Enter All Value";
        document.getElementById("Lumpsum").value = "Please Enter All Value";
        document.getElementById("Net_Payment").value = "Please Enter All Value";
        document.getElementById("Gross_Payment").value = "Please Enter All Value";
    }else {

        const Payment_Required_Future = getFV(Payment_Required_Today, Indexation, (Retirement_Age - age));
        const Value_Required = getValueRequire(Year_Payments, Payment_Required_Future, Interest_Rate, Indexation);

        const Estimated_Super = FV(Estimated_Return_Rate / 100, (Retirement_Age - age), -Current_Net_Contributions, -Current_Super);
        const NetPayment = (PMT((Estimated_Return_Rate / 100) / 12, (Retirement_Age - age) / 12, -Current_Super, Value_Required));


        document.getElementById("Payment_Required_Future").value = Payment_Required_Future;
        document.getElementById("Value_Required").value = Value_Required;
        document.getElementById("Estimated_Annual_Deduct").value = Math.round(Value_Required / Year_Payments);
        document.getElementById("Estimated_Super").value = Math.round(Estimated_Super);
        document.getElementById("Lumpsum").value = Math.round(Value_Required - Estimated_Super);


        if (NetPayment < 0) {
            const New_Net = NetPayment * -1;
            document.getElementById("Net_Payment").value = Math.round(New_Net);
            document.getElementById("Gross_Payment").value = Math.round(New_Net / 0.7);
        } else {
            document.getElementById("Net_Payment").value = Math.round(NetPayment);
            document.getElementById("Gross_Payment").value = Math.round(NetPayment / 0.7);
        }

    }
}

