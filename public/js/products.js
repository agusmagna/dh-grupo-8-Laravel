window.onload = function(){

var buttons = document.querySelectorAll('.detailButton');
var details = document.querySelectorAll('.detail');
var closes = document.querySelectorAll('i');


for(var i=0;i<buttons.length;i++) {
  buttons[i].addEventListener('click', function(e){
    e.preventDefault();
    e.target.parentElement.closest('.product').nextElementSibling.style.display = 'block';
  });
}
for(close of closes){
close.addEventListener('click', function(e){
  console.log(e);
  e.target.parentElement.closest('.detail').style.display = 'none';
  console.log(e.target.parentElement.closest('.detail'))
});
}

}
