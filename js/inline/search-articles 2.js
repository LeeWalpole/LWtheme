search_articles: {
function filter(e){
search = e.value.toLowerCase();
console.log(e.value)
document.querySelectorAll('.teaser').forEach(function(row){
text = row.innerText.toLowerCase();
if(text.match(search)){
row.style.display="block"
} else {
row.style.display="none"
}
})
}
} // search articles