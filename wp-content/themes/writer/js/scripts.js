import '../css/style.css'



// Modules
import load from './modules/Load';
import hoverEvents from './modules/hoverEvents';
import search from './modules/Search';


// Instantiate a new object using our modules / classes
const windowLoaded = new load();
const hoverEve = new hoverEvents();
const startSearch = new search();


// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}
