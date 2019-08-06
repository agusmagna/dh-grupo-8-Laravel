window.onload = function(){

var buttons = document.querySelectorAll('.detailButton');
var details = document.querySelectorAll('.detail');
var closes = document.querySelectorAll('.close');


for(var i=0;i<buttons.length;i++) {
  buttons[i].addEventListener('click', function(e){
    e.preventDefault();
    console.log(e)
    e.target.parentElement.closest('.product').nextElementSibling.style.display = 'block';
  });
}
for(close of closes){
close.addEventListener('click', function(e){
  e.target.parentElement.closest('.details').style.display = 'none';
});
}

}
