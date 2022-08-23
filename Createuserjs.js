
  let sec1=document.getElementById('sec1');
let sec2=document.getElementById('sec2');
let prev=document.getElementById('prevbtn');
let next=document.getElementById('nextbtn');
let same=document.getElementById('same1');
let pprovince=document.getElementById('pprovince');
let pdistrict=document.getElementById('pdistrict');
let pmun=document.getElementById('pmun');
let ptole=document.getElementById('ptole');
let pward=document.getElementById('pward');
let tprovince=document.getElementById('tprovince');
let tdistrict=document.getElementById('tdistrict');
let tmun=document.getElementById('tmun');
let ttole=document.getElementById('ttole');
let tward=document.getElementById('tward');

function samee(){
 if(same.checked){
//   tprovince.value=pprovince.value;
//   tdistrict.value=pdistrict.value;
//   tmun.value=pmun.value;
//   ttole.value=ptole.value;
//   tward.value=pward.value;

console.log('a');
}
};

prev.addEventListener('click',function(){

sec2.style.display="none";
sec1.style.display="block";
});
next.addEventListener('click',function(){
  sec1.style.display="none";
sec2.style.display="block";

});

