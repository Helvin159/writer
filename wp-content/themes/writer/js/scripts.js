import '../css/style.css'
// const url = window.location.href;
// const uri = window.location.pathname;
// console.log(uri)


// Modules
import load from './modules/Load';
import hoverEvents from './modules/hoverEvents';
// import search from './modules/Search';
import workNums from './modules/Nums';
// import Calendly from './modules/calendly';


// Instantiate a new object using our modules / classes
const windowLoaded = new load();
const hoverEve = new hoverEvents();
// const startSearch = new search();
const wNums = new workNums();
// const calendly = new Calendly();


// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}
