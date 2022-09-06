
const btn = document.getElementById('Submit_Age_pension_Basic');
btn.addEventListener('click',fetchPensionBasic);



const btn_single_pension = document.getElementById('Submit_Age_pension_single');
btn_single_pension.addEventListener('click',PensionSingle);

function fetchPensionBasic(){

    const is_Relationship= getRelationship();

    const form_double = document.getElementById('age_pension_input_double');
    const form_single = document.getElementById('age_pension_input_single_form');
   // console.log(is_Relationship);


    if(is_Relationship === "couple"){
        form_double.style.display = 'block';
        form_single.style.display = 'none';

    }else if (is_Relationship === "single"){
        form_single.style.display = 'block';
        form_double.style.display = 'none';

    }else{
        form_single.style.display = 'none';
        form_double.style.display = 'none';
    }
}
function getRelationship(){
     let relationship;
     if(document.getElementById('is_couple').checked){
         relationship = 'couple';
     }else{
         relationship = 'single';
     }
     return relationship;
}
function getGender(){
    let is_gender;
    if (document.getElementById('is_gender_male_single').checked){
        is_gender = 'male';
    }else if(document.getElementById('is_gender_female_single').checked){
        is_gender = 'female';
    }else{
        is_gender = 'other';
    }
    return is_gender;
}

function getHomeStatus(){
    let is_Homeowner;
    if(document.getElementById('is_homeowner').checked){
        is_Homeowner = 'ownHouse';
    }else{
        is_Homeowner ='noHouse';
    }
    return is_Homeowner;
}

function getAge(DOB) {
    const Age = new Date(Date.parse(DOB));
    const Current_date = new Date();
    const C_Age = Current_date.getFullYear() - Age.getFullYear();

    return C_Age;
}
function Maximum_Assets_For_Full_Pension_H8(relationship,is_Homeowner){
    //c6 = home owner
    if (relationship === "couple" && is_Homeowner === "ownHouse"){
        return 419000;
    }else if(relationship === "couple" && is_Homeowner === "noHouse"){
        return 643500;
    } else if(relationship === "single" && is_Homeowner === "ownHouse"){
        return 280000;
    }else if(relationship === "single" && is_Homeowner === "noHouse"){
        return 504500;
    }
}

function Maximum_Assets_for_Part_Pension_H9(relationship,is_Homeowner){
    //c6 = home owner
    if (relationship === "couple" && is_Homeowner === "ownHouse"){
        return 915500;
    }else if(relationship === "couple" && is_Homeowner === "noHouse"){
        return 1140000;
    } else if(relationship === "single" && is_Homeowner === "ownHouse"){
        return 609250;
    }else if(relationship === "single" && is_Homeowner === "noHouse"){
        return 833750;
    }
}

function Deemed_Financial_Assets_H12(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse){
    let invest_total = bank_accounts + shares + funds + loans;
    let gift_total;
    let superSingle;
    let superSpouse;
    if(gifted > 10000) {
        gift_total = gifted - 10000;
    }
    if (relationship === 'single'){
        superSingle = getSuperZ3(gender,age,Super);
        return gift_total + invest_total + superSingle;

    }else{
        superSingle = getSuperZ3(gender,age,Super);
        superSpouse = getSpouseSuperZ4(gender,age,SuperSpouse);
        return gift_total + invest_total + superSpouse + superSingle;
    }

}

function getSuperZ3(gender,age,Super){
    //c12 =gender  , c11 =age , z11=65 , z12=60

        if(gender === 'male' && age >= 65){
            return Super;
        }else if(gender === 'male' && age < 65){
            return 0;
        }else if(gender === 'female' && age >= 60){
            return Super;
        }else if(gender === 'female' && age < 60){
            return 0
        }


}

function getSpouseSuperZ4(gender,age,Super){
    if(gender === 'male' && age >= 65){
        return Super;
    }else if(gender === 'male' && age < 65){
        return 0;
    }else if(gender === 'female' && age >= 62.5){
        return Super;
    }else if(gender === 'female' && age < 62.5){
        return 0
    }

}
function Deemed_Personal_Assets_H13(vehicles_invest,content_invest,property_invest){
    return vehicles_invest + content_invest + property_invest;
}




function Maximum_fortnightly_pension_H18(relationship,Age,is_gender){
    //c5 = relationship
    //c12 = gender
    //c11 = age
    if(relationship === "couple" && Age >= 65 && is_gender === "female" ){
        return 744.4;
    }else if( relationship === "couple" && Age < 65 && is_gender === "male"){
        return "N/A";
    }else if(relationship === "couple" && is_gender === "female" && Age >= 60){
        return 744.4;
    }else if(relationship === "couple" && is_gender === "female" && Age < 60){
        return  "N/A";
    }else if (relationship === "single" && is_gender === "male" && Age >= 65){
        return 987.6;
    }else if(relationship=== "single" && is_gender === "male" && Age < 65){
        return "N/A";
    }else if(relationship === "single" && is_gender === "female" && Age >= 60){
        return 987.6;
    }else if(relationship === "single" && is_gender === "female" && Age < 60){
        return "N/A";
    }
}




function PensionSingle(){
    const relationship = 'single';
    const DOB = document.getElementById('DOB_single').value;
    const bank_accounts = document.getElementById('bank_accounts_invest_single').value;
    const shares = document.getElementById('shares_invest_single').value;
    const funds = document.getElementById('funds_invest_single').value;
    const loans = document.getElementById('loans_invest_single').value;
    const gifted = document.getElementById('gifted_assets-single').value;
    const Super_single = document.getElementById('super_single').value;
    const vehicles_invest = document.getElementById('vehicle_invest_single').value;
    const content_invest = document.getElementById('content_invest_single').value;
    const property_invest = document.getElementById('property_invest_single').value;
    const DOB_String = DOB.toString();
    const Age = getAge(DOB_String);
    let is_gender = getGender();
    let is_Homeowner = getHomeStatus();
    let superZ3 = getSuperZ3(is_gender,Age,Super_single);
    let Maximum_fortnightly_pension = Maximum_fortnightly_pension_H18(relationship,Age,is_gender);
    let Maximum_Assets_For_Full_Pension = Maximum_Assets_For_Full_Pension_H8(relationship,is_Homeowner);
    let Deemed_Financial_Assets = Deemed_Financial_Assets_H12(bank_accounts,shares,funds,loans,gifted);
    console.log(relationship,Age,is_Homeowner,is_gender);
    console.log(Maximum_fortnightly_pension,Maximum_Assets_For_Full_Pension);


}

function PensionDouble(){
    //const is_Homeowner = document.querySelector('input[name="is_house"]:checked').value;
    //const is_gender = document.querySelector('input[name="is_gender"]:checked ').value;
    //const is_gender_spouse = document.querySelector('input[name="is_gender_spouse"]:checked ').value;

}



