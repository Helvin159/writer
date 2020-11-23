import '../css/style.css'
// const url = window.location.href;
// const uri = window.location.pathname;
// console.log(uri)


// Modules
import load from './modules/Load';
import hoverEvents from './modules/hoverEvents';
import Thumbnails from './modules/pagethumbnails';
import scrollEvents from './modules/scrollEvents';
import Ratings from './modules/selfRatingBars';
// import Calendly from './modules/calendly';


// Instantiate a new object using our modules / classes
const windowLoaded = new load();
const hoverEve = new hoverEvents();
const thumbnails = new Thumbnails();
const scrollevents = new scrollEvents();
const ratings = new Ratings();
// const calendly = new Calendly();






// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}
