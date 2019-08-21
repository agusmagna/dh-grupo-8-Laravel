window.onload = function(){

var machines = document.querySelector('#button-machine');
var capsules = document.querySelector('#button-capsule');


machines.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector('#tableMachines').style.display = 'block';
    document.querySelector('#tableCapsules').style.display = 'none';
    window.name = 'panelAdminMaquinas'
  })
capsules.addEventListener('click', function(e){
      e.preventDefault();
      document.querySelector('#tableMachines').style.display = 'none';
      document.querySelector('#tableCapsules').style.display = 'block';
      window.name = 'panelAdminCapsulas'
    })
}

if(window.name == 'panelAdminMaquinas'){

  document.querySelector('#tableMachines').style.display = 'block';
  document.querySelector('#tableCapsules').style.display = 'none';
}
if(window.name == 'panelAdminCapsulas'){

  document.querySelector('#tableMachines').style.display = 'none';
  document.querySelector('#tableCapsules').style.display = 'block';
}
