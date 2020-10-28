function displayGreeting() {

  let usrname = document.getElementById('usrname').value;
  if(usrname!=''){
    document.getElementById('outputDiv').innerHTML = 'Szia ' + '<b>' + usrname + '</b>' + '! Igyál egy sört' + '!';
  } else {
    document.getElementById('outputDiv').innerHTML = 'Szia ' + '<b>' + 'Anonymus' + '</b>' + '! Igyál egy sört' + '!';
  }
  

}