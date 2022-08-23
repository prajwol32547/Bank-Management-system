let block = document.getElementById('block');
let home = document.getElementById('home');
let dash = document.getElementById('dash');
let verifyaccount = document.getElementById('statement');
let createaccount = document.getElementById('createaccount');
let checkaccount = document.getElementById('checkaccount');
let deleteaccount = document.getElementById('fund');
let unrealized = document.getElementById('unrealized');
let unrealizedblock = document.getElementById('unrealizedblock');
let next=document.getElementById('next');
let credit=document.getElementById('credit');
if (parseInt(unrealized.innerHTML) < 1) {
  unrealizedblock.style.display = "none";
}
verifyaccount.addEventListener('click', function () {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', "unverified", true);
  xhr.onprogress = function () {
    console.log("ready");

  }
  xhr.onload = function () {
    home.style.display = "none";
    block.style.display = "flex";
    block.innerHTML = this.responseText;
  }
  xhr.send();
});
createaccount.addEventListener('click', function () {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', "createaccount", true);
  xhr.onprogress = function () {
    console.log("ready");

  }
  xhr.onload = function () {
    home.style.display = "none";
    block.style.display = "flex";
    block.innerHTML = this.responseText;  
  }
  xhr.send();
});
dash.addEventListener('click', function () {
  block.style.display = "none";
  home.style.display = "flex";
});
deleteaccount.addEventListener('click', function () {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', "deleteuser.html", true);
  xhr.onprogress = function () {
    console.log("ready");

  }
  xhr.onload = function () {
    home.style.display = "none";
    block.style.display = "flex";
    block.innerHTML = this.responseText;
  }
  xhr.send();
});
checkaccount.addEventListener('click', function () {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', "checkuser", true);
  xhr.onprogress = function () {
    console.log("ready");

  }
  xhr.onload = function () {
    home.style.display = "none";
    block.style.display = "flex";
    block.innerHTML = this.responseText;
  }
  xhr.send();
});

credit.addEventListener('click', function () {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', "credit", true);
  xhr.onprogress = function () {
    console.log("ready");

  }
  xhr.onload = function () {
    home.style.display = "none";
    block.style.display = "flex";
    block.innerHTML = this.responseText;
  }
  xhr.send();
});
