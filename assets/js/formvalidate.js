const myForm = document.getElementById("myForm");
const nameField = document.forms[0]["firstname"];

const lastname = document.forms[0]["lastname"]
const civilField = document.forms[0]["civil"];
const sexFieldtrip = document.forms[0]["gender"];
const datebirthField = document.forms[0]["datebirth"];
const placebirthField = document.forms[0]["placebirth"];
const citizenField = document.forms[0]["citizen"];
const efield = document.forms[0]["email"];
const mobileField = document.forms[0]["mobilenum"];
const batchyField = document.forms[0]["batchyear"];
const progcourseField = document.forms[0]["program"];
const employField = document.forms[0]["emplostat"];
const regionsField = document.getElementById("region");
const provicesField = document.getElementById("province");
const citysField = document.getElementById("city");
const brgyField = document.getElementById("barangay");
const streetsField = document.forms[0]["street"];
const mnameField = document.forms[0]["middlename"];


const nameError = document.getElementById("fnameError");

const lastError = document.getElementById("lnameError");
const civilError = document.getElementById("civilError");
const genderError = document.getElementById("genderError");
const datebirthError = document.getElementById("dbirthError");
const placebirthError = document.getElementById("placebError");
const citizenError = document.getElementById("citiError");
const emailsError = document.getElementById("emailError");
const mobileError = document.getElementById("mobileErr");
const batchyError = document.getElementById("byError");
const progError = document.getElementById("programssError");
const employError = document.getElementById("empError");
const gerror = document.getElementById("gerrorpa");
const reggError = document.getElementById("regionError");
const provError = document.getElementById("provinceError");
const cittyError = document.getElementById("cityError");
const brgyError = document.getElementById("brgyError");
const strError = document.getElementById("streetError");
const mnameError = document.getElementById("mnameError");
window.onload = function() {


    var recaptcha = document.forms["myForm"]["g-recaptcha-response"];

    if (recaptcha.required = true) {
        recaptcha.oninvalid = function(e) {

            alert("Please Check first your Recaptcha");

        }

    }

}

myForm.addEventListener("submit", function(event) {
    event.preventDefault();



    let errorCount = 0;

    const name = nameField.value;
    if (name.length < 2 || name.length > 50) {
        nameError.innerHTML = "PLEASE ENTER YOUR FIRSTNAME";
        nameField.classList.add("is-invalid");
        errorCount++;
    } else {
        nameField.classList.add("is-valid");
    }



    const lname = lastname.value;
    if (lname.length < 2 || lname.length > 50) {
        lastError.innerHTML = "PLEASE ENTER YOUR LASTNAME";
        lastname.classList.add("is-invalid");
        errorCount++;
    } else {
        lastname.classList.add("is-valid");
    }

    const civil = civilField.value;
    if (civil.length < 2 || civil.length > 50) {
        civilError.innerHTML = " ";
        civilField.classList.add("is-invalid");
        errorCount++;
    } else {
        civilField.classList.add("is-valid");
    }

    const gsex = sexFieldtrip.value;
    if (gsex == "Select") {
        genderError.innerHTML = " ";
        sexFieldtrip.classList.add("is-invalid");
        errorCount++;
    } else {
        sexFieldtrip.classList.add("is-valid");
    }

    const dateofB = datebirthField.value;
    if (dateofB.length < 2 || dateofB.length > 50) {
        datebirthError.innerHTML = " ";
        datebirthField.classList.add("is-invalid");
        errorCount++;
    } else {
        datebirthField.classList.add("is-valid");
    }

    const placeB = placebirthField.value;
    if (placeB.length < 2 || placeB.length > 50) {
        placebirthError.innerHTML = "PLEASE ENTER YOUR PLACE OF BIRTH";
        placebirthField.classList.add("is-invalid");
        errorCount++;
    } else {
        placebirthField.classList.add("is-valid");
    }

    const citizenshipss = citizenField.value;
    if (citizenshipss.length < 2 || citizenshipss.length > 50) {
        citizenError.innerHTML = "PLEASE ENTER YOUR CITIZENSHIP";
        citizenField.classList.add("is-invalid");
        errorCount++;
    } else {
        citizenField.classList.add("is-valid");
    }

    const eemail = efield.value;


    const regex = /\S+@\S+\.\S+/;


    if (eemail.length < 2 || eemail.length > 50) {
        emailsError.innerHTML = "ENTER YOUR VALID EMAIL";
        efield.classList.add("is-invalid");
        errorCount++;
    } else {
        efield.classList.add("is-valid");
    }

    const mobileNums = mobileField.value;
    if (mobileNums.length !== 12) {
        mobileError.innerHTML = "IT CANNOT BE EMPTY";
        mobileField.classList.add("is-invalid");
        errorCount++;
    } else {
        mobileField.classList.add("is-valid");
    }

    const byear = batchyField.value;
    if (byear.length < 2 || byear.length > 50) {
        batchyError.innerHTML = " ";
        batchyField.classList.add("is-invalid");
        errorCount++;
    } else {
        batchyField.classList.add("is-valid");
    }

    const pgc = progcourseField.value;
    if (pgc.length < 2 || pgc.length > 50) {
        progError.innerHTML = " ";
        progcourseField.classList.add("is-invalid");
        errorCount++;
    } else {
        progcourseField.classList.add("is-valid");
    }

    const emp = employField.value;
    if (emp.length < 8 || emp.length > 50) {
        employError.innerHTML = " ";
        employField.classList.add("is-invalid");
        errorCount++;
    } else {
        employField.classList.add("is-valid");
    }

    const regions = regionsField.value;
    if (regions == " ") {
        reggError.innerHTML = " ";
        regionsField.classList.add("is-invalid");
        errorCount++;
    } else {
        regionsField.classList.add("is-valid");
    }

    const provincesss = provicesField.value;
    if (provincesss == " ") {
        provError.innerHTML = " ";
        provicesField.classList.add("is-invalid");
        errorCount++;
    } else {
        provicesField.classList.add("is-valid");
    }

    const citi = citysField.value;
    if (citi == " ") {
        cittyError.innerHTML = " ";
        citysField.classList.add("is-invalid");
        errorCount++;
    } else {
        citysField.classList.add("is-valid");
    }

    const barangays = brgyField.value;
    if (barangays == " ") {
        brgyError.innerHTML = " ";
        brgyField.classList.add("is-invalid");
        errorCount++;
    } else {
        brgyField.classList.add("is-valid");
    }

    const streets = streetsField.value;
    if (streets.length < 8 || streets.length > 50) {
        strError.innerHTML = " ";
        streetsField.classList.add("is-invalid");
        errorCount++;
    } else {
        streetsField.classList.add("is-valid");
    }







    // Show all error messages if there were any errors
    if (errorCount > 0) {
        return false;
    }

    // If all validation checks pass, submit the form
    myForm.submit();
});

nameField.addEventListener("input", function() {
    nameError.innerHTML = "";
    nameField.classList.remove("is-invalid", "is-valid");
    nameField.classList.add("is-valid");
});



lastname.addEventListener("input", function() {
    lastError.innerHTML = "";
    lastname.classList.remove("is-invalid", "is-valid");
    lastname.classList.add("is-valid");
});
civilField.addEventListener("input", function() {
    civilError.innerHTML = "";
    civilField.classList.remove("is-invalid", "is-valid");
    civilField.classList.add("is-valid");
});
sexFieldtrip.addEventListener("input", function() {
    genderError.innerHTML = "";
    sexFieldtrip.classList.remove("is-invalid", "is-valid");
    sexFieldtrip.classList.add("is-valid");
});
datebirthField.addEventListener("input", function() {
    datebirthError.innerHTML = "";
    datebirthField.classList.remove("is-invalid", "is-valid");
    datebirthField.classList.add("is-valid");
});
placebirthField.addEventListener("input", function() {
    placebirthError.innerHTML = "";
    placebirthField.classList.remove("is-invalid", "is-valid");
    placebirthField.classList.add("is-valid");
});
citizenField.addEventListener("input", function() {
    citizenError.innerHTML = "";
    citizenField.classList.remove("is-invalid", "is-valid");
    citizenField.classList.add("is-valid");
});
efield.addEventListener("input", function() {
    emailsError.innerHTML = "";
    efield.classList.remove("is-invalid", "is-valid");
    efield.classList.add("is-valid");
});
mobileField.addEventListener("input", function() {
    mobileError.innerHTML = "";
    mobileField.classList.remove("is-invalid", "is-valid");
    mobileField.classList.add("is-valid");
});
batchyField.addEventListener("input", function() {
    batchyError.innerHTML = "";
    batchyField.classList.remove("is-invalid", "is-valid");
    batchyField.classList.add("is-valid");
});
progcourseField.addEventListener("input", function() {
    progError.innerHTML = "";
    progcourseField.classList.remove("is-invalid", "is-valid");
    progcourseField.classList.add("is-valid");
});
employField.addEventListener("input", function() {
    employError.innerHTML = "";
    employField.classList.remove("is-invalid", "is-valid");
    employField.classList.add("is-valid");
});
regionsField.addEventListener("input", function() {
    reggError.innerHTML = "";
    regionsField.classList.remove("is-invalid", "is-valid");
    regionsField.classList.add("is-valid");
});
provicesField.addEventListener("input", function() {
    progError.innerHTML = "";
    provicesField.classList.remove("is-invalid", "is-valid");
    provicesField.classList.add("is-valid");
});
citysField.addEventListener("input", function() {
    cittyError.innerHTML = "";
    citysField.classList.remove("is-invalid", "is-valid");
    citysField.classList.add("is-valid");
});
brgyField.addEventListener("input", function() {
    brgyError.innerHTML = "";
    brgyField.classList.remove("is-invalid", "is-valid");
    brgyField.classList.add("is-valid");
});
streetsField.addEventListener("input", function() {
    strError.innerHTML = "";
    streetsField.classList.remove("is-invalid", "is-valid");
    streetsField.classList.add("is-valid");
});
mnameField.addEventListener("input", function() {
    mnameError.innerHTML = "";
    mnameField.classList.remove("is-invalid", "is-valid");
    mnameField.classList.add("is-valid");
});