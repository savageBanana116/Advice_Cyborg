
const btn = document.getElementById('Submit_Salary_Sacrifice');
btn.addEventListener('click',getSSInput);

const _MS_PER_DAY = 1000 * 60 * 60 * 24;

function getConcessionalCap(Age){
    if(Age >= 75){
        return 0;
    }
    else if (Age >= 50){
        return 27500;
    }
    return 27500;

}

function getTaxPayable(salary){

        const Taxable_Income = salary;
        if(Taxable_Income <= 18200){
            return 0;
        } else if(Taxable_Income <=45000){
            return (Taxable_Income-18200)*19/100;
        } else if(Taxable_Income <= 120000){
            return (Taxable_Income - 45000) * 32.5/100 + 5092;
        } else if (Taxable_Income <= 180000){
            return (Taxable_Income - 120000) * 37/100 + 29467;
        } else if (Taxable_Income > 180000){
            return (Taxable_Income - 180000) * 45/100 + 51667;
        }



}

function getLevy(salary,is_Family){

    if (is_Family == false){
        const Taxable_Income = salary;
        const total = Taxable_Income * 2 / 100;

        if(Taxable_Income <= 90000){
            return total;
        }else if(Taxable_Income <= 105000){
            return total + (Taxable_Income * 1 / 100);
        }else if(Taxable_Income <= 140000){
            return total + (Taxable_Income * 1.25 / 100);
        }else if(Taxable_Income > 140000){
            return total + (Taxable_Income * 1.5 / 100);
        }

    }else if (is_Family == true){
        const Taxable_Income = salary;
        const total = Taxable_Income * 2 / 100;
        if(Taxable_Income <= 180000){
            return total;
        }else if(Taxable_Income <= 210000){
            return total + (Taxable_Income * 1 / 100);
        }else if(Taxable_Income <= 280000){
            return total + (Taxable_Income * 1.25 / 100);
        }else if(Taxable_Income > 280000){
            return total + (Taxable_Income * 1.5 /100);
        }
    }
}

function getLMTaxOffset(salary){


        const Taxable_Income = salary;
        if(Taxable_Income <= 37000){
            return 255;
        }else if(Taxable_Income <= 48000){
            return 255 + (0.075 * (Taxable_Income-37000));
        }else if(Taxable_Income <= 90000){
            return 1080;
        }else if(Taxable_Income <= 126000){
            return 1080 - (0.03 * (Taxable_Income - 90000));
        } else{
            return 0;
        }

}

function getLowIncomeTaxOffset(salary){


        const Taxable_Income = salary;
        if(Taxable_Income <= 37500){
            return 700;
        }else if(Taxable_Income <= 45000){
            return 700 - (0.05 * (Taxable_Income - 37500));
        }else if(Taxable_Income <= 66667){
            return 325 - (0.015 * (Taxable_Income - 45000));
        }else {
            return 0;
        }

}
function getAge(DOB) {
    const Age = new Date(Date.parse(DOB));
    const Current_date = new Date();
    const C_Age = Current_date.getFullYear() - Age.getFullYear();

    return C_Age;
}


function getSSInput() {
    const DOB = document.getElementById("DOB").value;
    const Salary = document.getElementById("Salary").value;
    const Salary_Sacrifice_Amount = document.getElementById("Salary_Sacrifice_Amount").value;
    const is_Family = document.getElementById("is_Family").checked;

    const DOB_String = DOB.toString();
    const Age = getAge(DOB_String);
    const Current_date = new Date();
    const ConcessionalCap = getConcessionalCap(Age);
    const SGContributions = 0.1 * Salary;
    const Sacrifice_Allowable = ConcessionalCap - SGContributions;

    //Variables for After Tax
    const After_Basic_Tax_Payable = getTaxPayable(Salary);
    const After_Levy = getLevy(Salary,is_Family);
    const After_LMTaxOffset = getLMTaxOffset(Salary);
    const After_LIncomeTaxOffset = getLowIncomeTaxOffset(Salary);
    const After_Tax_Payable = After_Basic_Tax_Payable + After_Levy - After_LMTaxOffset - After_LIncomeTaxOffset;
    const After_Net_Income = Salary - After_Tax_Payable;

    //Variables for Pre Tax
    const Pre_Taxable_Income = Salary - Salary_Sacrifice_Amount;
    const Pre_Basic_Tax_Payable = getTaxPayable(Pre_Taxable_Income);
    const Pre_Levy = getLevy(Pre_Taxable_Income,is_Family);
    const Pre_LMTaxOffset = getLMTaxOffset(Pre_Taxable_Income);
    const Pre_LIncomeTaxOffset = getLowIncomeTaxOffset(Pre_Taxable_Income);
    const Pre_Tax_Payable = Pre_Basic_Tax_Payable + Pre_Levy - Pre_LMTaxOffset - Pre_LIncomeTaxOffset;
    const Pre_Net_Income = Pre_Taxable_Income - Pre_Tax_Payable;

    //output 1 - from 'step 1'
    document.getElementById("Finical_Year_Ending").value = "30/June " + Current_date.getFullYear();
    document.getElementById("Age").value = Age;
    document.getElementById("Concessional_Contribution_Cap").value = ConcessionalCap;
    document.getElementById("SG_Contributions").value = SGContributions;
    document.getElementById("Allowed_Salary_Sacrifice").value = Sacrifice_Allowable;


    //output 2  (After Tax) - from 'results'
    document.getElementById("After_Tax_Salary").value = Salary;
    document.getElementById("After_Tax_Salary_Sacrifice").value = 0;
    document.getElementById("After_Tax_Taxable_Income").value = Salary;
    document.getElementById("After_Tax_Payable_Basic").value = After_Basic_Tax_Payable;
    document.getElementById("After_Levy").value = After_Levy;
    document.getElementById("After_LM_Tax_Offset").value = After_LMTaxOffset;
    document.getElementById("After_Low_Income_Tax_Offset").value = After_LIncomeTaxOffset;
    document.getElementById("After_Tax_Payable").value = After_Tax_Payable;
    document.getElementById("After_Net_Income").value = After_Net_Income;
    document.getElementById("After_Less_After_Tax").value = 0;
    document.getElementById("After_Take_Home_Pay").value = After_Net_Income - 0;

    //output 3 for effect super contributions - After tax
    const After_Less_Contribution_Tax = (SGContributions) * 0.15;
    console.log(SGContributions, Salary_Sacrifice_Amount,0.15);
    document.getElementById("After_SG").value = SGContributions;
    document.getElementById("After_Salary_Sacrifice").value = Salary_Sacrifice_Amount;
    document.getElementById("After_Less_Contribution_Tax").value = After_Less_Contribution_Tax;
    document.getElementById("After_tax").value = 0;


    //output 4 (Pre Tax) - from 'results'
    document.getElementById("Pre_Tax_Salary").value = Salary;
    document.getElementById("Pre_Tax_Salary_Sacrifice").value = Salary_Sacrifice_Amount;
    document.getElementById("Pre_Tax_Taxable_Income").value = Pre_Taxable_Income;
    document.getElementById("Pre_Tax_Payable_Basic").value = Pre_Basic_Tax_Payable;
    document.getElementById("Pre_Levy").value = Pre_Levy;
    document.getElementById("Pre_LM_Tax_Offset").value = Pre_LMTaxOffset;
    document.getElementById("Pre_Low_Income_Tax_Offset").value = Pre_LIncomeTaxOffset;
    document.getElementById("Pre_Tax_Payable").value = Pre_Tax_Payable;
    document.getElementById("Pre_Net_Income").value = Pre_Net_Income;
    document.getElementById("Pre_Less_After_Tax").value = 0;
    document.getElementById("Pre_Take_Home_Pay").value = Pre_Net_Income - 0;

    //output 5 for effect super contributions - Pre tax
    const Less_Contribution_Tax = (Number(Salary_Sacrifice_Amount) + SGContributions) * 15 / 100;
    document.getElementById("Pre_SG").value = SGContributions;
    document.getElementById("Pre_Salary_Sacrifice").value = 0;
    document.getElementById("Pre_Less_Contribution_Tax").value = Less_Contribution_Tax;
    document.getElementById("Pre_After_tax").value = 0;

    //output 6 - summary
    const Tax_Saving = After_Net_Income - Pre_Net_Income;
    const Total_Tax_Saving = Tax_Saving - (Number(Salary_Sacrifice_Amount) * 0.15)
    const Increase_A = Pre_Net_Income + SGContributions + Number(Salary_Sacrifice_Amount) - Less_Contribution_Tax
    const Increase_B = After_Net_Income + SGContributions - After_Less_Contribution_Tax
    const Increase = Increase_A - Increase_B;
    console.log(Increase_A,Increase_B);
    document.getElementById("Tax_Saving").value = Tax_Saving;
    document.getElementById("Total_TaxSaving").value = Total_Tax_Saving;
    document.getElementById("Increase").value = Increase;


}
