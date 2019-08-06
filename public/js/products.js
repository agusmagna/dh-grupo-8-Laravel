window.onload = function(){

var buttons = document.querySelectorAll('.detailButton');
var details = document.querySelectorAll('.detail');
var closes = document.querySelectorAll('.close');
// var item = details.item(0);
// details[0].style.color = 'red';
// details[1].style.color = 'red';
// details[2].style.color = 'red';
// details[3].style.color = 'red';
// details[4].style.color = 'red';
// details[5].style.color = 'red';

console.log(details)
for(var i=0;i<buttons.length;i++) {
  buttons.item(i).addEventListener('click', function(){
  
  item.style.display = 'block';
  });
}
for(close of closes){
close.addEventListener('click', function(){
  details.style.display = 'none';
});
}

}
