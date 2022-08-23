let err = document.getElementsByClassName('error');
let fname = document.getElementsByName('fname')[0];
let mname = document.getElementsByName('mname')[0];
let lname = document.getElementsByName('lname')[0];
let regex = /[a-z]/;

fname.addEventListener('click', () => {
    if (fname.value) {
        err[0].innerHTML = "Required *";
    }
    else if (regex.test(fname.value) == false) {
        err[0].innerHTML = "First name should contain strings";
    }
});
mname.addEventListener('change', () => {
if (regex.test(mname.value) == false) {
        err[1].innerHTML = "Middle name should contain strings";
    }
});
lname.addEventListener('change', () => {
    if (lname.value == "") {
        err[2].innerHTML = "Required *";
    }
    else if (regex.test(fname.value) == false) {
        err[2].innerHTML = "First name should contain strings";
    }
});
