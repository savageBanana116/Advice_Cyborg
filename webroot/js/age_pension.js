
const btn = document.getElementById('Submit_Age_pension_Basic');
btn.addEventListener('click',fetchPensionBasic);



function fetchPensionBasic(){

    const is_Relationship= document.querySelector('input[name="is_relationship"]:checked').value;
    const is_Homeowner = document.querySelector('input[name="is_house"]:checked').value;
    const is_gender = document.querySelector('input[name="is_gender"]:checked ').value;
    const is_gender_spouse = document.querySelector('input[name="is_gender_spouse"]:checked ').value;
    const form_double = document.getElementById('age_pension_input_double');
    const form_single = document.getElementById('age_pension_input_single_form');
    console.log(is_Relationship);
    console.log(is_Homeowner);
    console.log(is_gender_spouse,is_gender);

    if(is_Relationship === "couple"){
        form_double.style.display = 'block';
        form_single.style.display = 'none';
        PensionDouble();
    }else if (is_Relationship === "single"){
        form_single.style.display = 'block';
        form_double.style.display = 'none';
        PensionSingle()
    }else{
        form_single.style.display = 'none';
        form_double.style.display = 'none';
    }
}
function PensionSingle(){

}

function PensionDouble(){

}


function Maximum_fortnightly_pension_H18(){

}
