!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/wp-content/themes/writer/bundled-assets/",n(n.s=1)}([function(e,t,n){},function(e,t,n){"use strict";n.r(t);n(0);var r=class{constructor(){this.load()}load(){window.addEventListener("load",()=>{const e=document.querySelector(".fadeIn");e.style.transition="1s ease-in",e.classList.remove("beforeLoad")})}};var o=class{constructor(){this.events()}events(){}};var i=class{constructor(){this.events()}events(){if("/"===window.location.pathname||"/pages/writer/"===window.location.pathname){let e=!1;window.addEventListener("scroll",()=>{if(window.scrollY>=1250&&1!=e)return this.consultations(),this.editorial(),this.webCont(),this.copyright(),e=!0})}}editorial(){const e=setInterval(()=>{const t=document.querySelector("#editorialNum");t.innerText>=99&&clearInterval(e),t.innerText++},30)}consultations(){const e=setInterval(()=>{const t=document.querySelector("#consultationsNum");t.innerText>=149&&clearInterval(e),t.innerText++},30)}webCont(){const e=setInterval(()=>{const t=document.querySelector("#webContent");t.innerText>=44&&clearInterval(e),t.innerText++},30)}copyright(){const e=setInterval(()=>{const t=document.querySelector("#copyrightProjects");t.innerText>=119&&clearInterval(e),t.innerText++},30)}};new r,new o,new i}]);