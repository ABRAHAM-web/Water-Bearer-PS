
'use strict';
//console.log("Hello");

//const showAgentbtn = document.
const agentBtns = document.querySelector('btn-secondary');
const AgentDetails = document.querySelector('AgentDetails');

agentBtns.addEventListener('click', hideShowAgenDetails);

function hideShowAgenDetails () {
  if (AgentDetails.classlist.contains('hidden')) {
  AgentDetails.classlist.remove('hidden');
  } else {
    AgentDetails.classlist.add('hidden');
  }
};
