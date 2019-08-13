window.onload = function(){

var machines = document.querySelector('#button-machine');
var capsules = document.querySelector('#button-capsule');


machines.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector('#tableMachines').style.display = 'block';
    document.querySelector('#tableCapsules').style.display = 'none';
  })
capsules.addEventListener('click', function(e){
      e.preventDefault();
      document.querySelector('#tableMachines').style.display = 'none';
      document.querySelector('#tableCapsules').style.display = 'block';
    })
}
