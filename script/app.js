
const searchBar = document.getElementById("nav-search").innerText; 
searchBar.addEventListener('click', (e)=>{
    e.preventDefault;
})

const search = document.querySelector(".btn").addEventListener('click', (e)=>{
    e.preventDefault;
    location.href=`../content/#${searchBar}`;
});




