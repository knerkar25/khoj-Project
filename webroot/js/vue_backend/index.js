// Global VueJS - This file currently not in use
console.log("VueJS - Loaded.");

// Variable Declares - GLobals Constants
const BASE_URL = document.getElementById('base-url').value;
const API_URL = BASE_URL + 'api/' ;


// Common Functions
function cartesianProduct(arr) {
  return arr.reduce((a, b) =>
    a.map(x => b.map(y => x.concat(y)))
    .reduce((a, b) => a.concat(b), []), [[]]);
}