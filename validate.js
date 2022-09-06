var err = document.getElementsByClassName("error");
let fname = document.getElementsByName("fname")[0];
let mname = document.getElementsByName("mname")[0];
let lname = document.getElementsByName("lname")[0];
let regex = /^([^0-9]*)$/;
let sdate = document.getElementsByName("dob")[0];
let submitbtn = document.getElementsByName("submitbtn")[0];
let tprovince = document.getElementById("tprovince");
let tdistrict = document.getElementById("tdistrict");
let tmun = document.getElementById("tmun");
let ttole = document.getElementById("ttole");
let tward = document.getElementById("tward");
let fathername = document.getElementsByName("fathername")[0];
let recentPhoto = document.getElementsByName("ppphoto")[0];
let fCitizen = document.getElementsByName("fcitizen")[0];
let Citizen = document.getElementsByName("citizen")[0];
fname.addEventListener("change", () => {
  if (regex.test(fname.value) == false) {
    err[0].innerHTML = "First name should contain strings";

    submitbtn.disabled = true;
  } else {
    err[0].innerHTML = "";
    submitbtn.disabled = false;
  }
});
mname.addEventListener("change", () => {
  if (regex.test(mname.value) == false) {
    err[1].innerHTML = "Middle name should contain strings";
    submitbtn.disabled = true;
  } else {
    err[1].innerHTML = "";
    submitbtn.disabled = false;
  }
});
lname.addEventListener("change", () => {
  if (regex.test(lname.value) == false) {
    err[2].innerHTML = "Last name should contain strings";
    submitbtn.disabled = true;
  } else {
    err[2].innerHTML = "";
    submitbtn.disabled = false;
  }
});

sdate.addEventListener("change", () => {
  let d = new Date();
  let m = d.getMonth() + 1 < 10 ? "0" + (d.getMonth() + 1) : "" + d.getMonth();
  let dd = d.getDate() < 10 ? "0" + d.getDate() : "" + d.getDate();
  let string = `${d.getFullYear()}-${m}-${dd}`;

  if (sdate.value > string) {
    sdate.disabled = true;
    sdate.value = "";
    alert("you cannot pick the date beyond today \n Retry after 3 sec");
    setTimeout(() => {
      sdate.disabled = false;
    }, 3000);
  }
});
fathername.addEventListener("change", () => {
  if (regex.test(fathername.value) == false) {
    err[4].innerHTML = "Father name should contain strings";
    submitbtn.disabled = true;
  } else {
    err[4].innerHTML = "";
    submitbtn.disabled = false;
  }
});

tmun.addEventListener("change", () => {
  if (regex.test(tmun.value) == false) {
    err[7].innerHTML = "temporary municipality name should contain strings";
    submitbtn.disabled = true;
  } else {
    err[7].innerHTML = "";
    submitbtn.disabled = false;
  }
});
ttole.addEventListener("change", () => {
  if (regex.test(ttole.value) == false) {
    err[8].innerHTML = "temporary tole name should contain strings";
    submitbtn.disabled = true;
  } else {
    err[8].innerHTML = "";
    submitbtn.disabled = false;
  }
});
const allowedTypes = ["image/jpeg", "image/jpg", "image/png"];
recentPhoto.addEventListener("change", (e) => {
  if (
    e.target.files.length > 1 ||
    !allowedTypes.includes(e.target.files[0].type.toLowerCase()) ||
    e.target.files[0].size > 5000000
  ) {
    console.log(e.target.files[0].size);
    err[3].innerHTML =
      "Recent photo must be less than 5 MB and should be only in the format of jpeg, jpg, and Png";
    e.target.value = null;
  } else {
    err[3].innerHTML = "";
  }
});
fCitizen.addEventListener("change", (e) => {
  if (
    e.target.files.length > 1 ||
    !allowedTypes.includes(e.target.files[0].type.toLowerCase()) ||
    e.target.files[0].size > 5000000
  ) {
    console.log(e.target.files[0].size);
    err[5].innerHTML =
      "father citizen photo must be less than 5 MB and should be only in the format of jpeg, jpg, and Png";
    e.target.value = null;
  } else {
    err[5].innerHTML = "";
  }
});
Citizen.addEventListener("change", (e) => {
  if (
    e.target.files.length > 1 ||
    !allowedTypes.includes(e.target.files[0].type.toLowerCase()) ||
    e.target.files[0].size > 5000000
  ) {
    console.log(e.target.files[0].size);
    err[6].innerHTML =
      "citizen photo must be less than 5 MB and should be only in the format of jpeg, jpg, and Png";
    e.target.value = null;
  } else {
    err[6].innerHTML = "";
  }
});
// recentPhoto.addEventListener("change", () => {
//   console.log("heloo");
// });
