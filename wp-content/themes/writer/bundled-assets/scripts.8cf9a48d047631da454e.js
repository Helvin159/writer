!function(e){function t(t){for(var o,s,l=t[0],c=t[1],i=t[2],d=0,m=[];d<l.length;d++)s=l[d],Object.prototype.hasOwnProperty.call(r,s)&&r[s]&&m.push(r[s][0]),r[s]=0;for(o in c)Object.prototype.hasOwnProperty.call(c,o)&&(e[o]=c[o]);for(u&&u(t);m.length;)m.shift()();return a.push.apply(a,i||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],o=!0,l=1;l<n.length;l++){var c=n[l];0!==r[c]&&(o=!1)}o&&(a.splice(t--,1),e=s(s.s=n[0]))}return e}var o={},r={0:0},a=[];function s(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.m=e,s.c=o,s.d=function(e,t,n){s.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},s.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,t){if(1&t&&(e=s(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)s.d(n,o,function(t){return e[t]}.bind(null,o));return n},s.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return s.d(t,"a",t),t},s.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},s.p="/wp-content/themes/writer/bundled-assets/";var l=window.webpackJsonp=window.webpackJsonp||[],c=l.push.bind(l);l.push=t,l=l.slice();for(var i=0;i<l.length;i++)t(l[i]);var u=c;a.push([28,1]),n()}({10:function(e,t,n){},28:function(e,t,n){"use strict";n.r(t);n(10);var o=class{constructor(){this.load()}load(){window.addEventListener("load",()=>{const e=document.querySelector(".fadeIn");e.style.transition="1s ease-in",e.classList.remove("beforeLoad")})}};var r=class{constructor(){this.events()}events(){}};var a=class{constructor(){this.events()}events(){const e=document.querySelectorAll(".prevWorkThumbnails"),t=document.querySelectorAll(".pdfThumbnails"),n=document.querySelector("#closeOverlayBtn");[...e].forEach(e=>{e.addEventListener("click",e=>{const t=e.target.getAttribute("src"),n=document.querySelector(".overlayContent"),o=document.querySelector(".overlay");n.innerHTML=`<img src="${t}" class="img-fluid">`,o.classList.add("openOverlay"),document.body.style.overflowY="hidden"})}),[...t].forEach(e=>{e.addEventListener("click",e=>{const t=e.target.getAttribute("src"),n=document.querySelector(".overlayContent"),o=document.querySelector(".overlay");n.innerHTML=`<embed src="${t}" class="container-fluid" height="630px">`,o.classList.add("openOverlay"),document.body.style.overflowY="hidden",o.style.overflowY="hidden"})}),n.addEventListener("click",()=>{document.querySelector(".overlay").classList.remove("openOverlay"),document.body.style.overflowY="scroll"}),document.addEventListener("keyup",e=>{if("Escape"==e.key){document.querySelector(".overlay").classList.remove("openOverlay"),document.body.style.overflowY="scroll"}})}};var s=class{constructor(){this.events()}events(){if("/"===window.location.pathname){let e=!1;window.addEventListener("scroll",()=>{if(window.scrollY>=1250&&1!=e)return this.consultations(),this.editorial(),this.webCont(),this.copyright(),e=!0})}if("/"===window.location.pathname){let e=!1;window.addEventListener("scroll",()=>{if(window.scrollY>=2046&&1!=e)return this.animateLaptopSvg(),e=!0})}if("/"===window.location.pathname){let e=!1;window.addEventListener("scroll",()=>{if(window.scrollY>=3232&&1!=e)return this.animateBlackboard(),e=!0})}if("/about/"===window.location.pathname){let e=!1;window.addEventListener("scroll",()=>{if(window.scrollY>=1300&&1!=e)return this.expandAboutSkills(),e=!0})}}editorial(){const e=setInterval(()=>{const t=document.querySelector("#editorialNum"),n=document.querySelector("#editNum").value;t.innerText>=parseInt(n)-1&&clearInterval(e),t.innerText++},20)}consultations(){const e=setInterval(()=>{const t=document.querySelector("#consultationsNum"),n=document.querySelector("#consultNum").value;t.innerText>=parseInt(n)-1&&clearInterval(e),t.innerText++},20)}webCont(){const e=setInterval(()=>{const t=document.querySelector("#webContent"),n=document.querySelector("#webContNum").value;t.innerText>=parseInt(n)-1&&clearInterval(e),t.innerText++},20)}copyright(){const e=setInterval(()=>{const t=document.querySelector("#copyrightProjects"),n=document.querySelector("#copyrightnum").value;t.innerText>=parseInt(n)-1&&clearInterval(e),t.innerText++},20)}expandAboutSkills(){const e=document.querySelectorAll(".ratingBar");e[0].style.animation="gradient 2.5s ease-in",e[0].style.transformOrigin="left",e[0].style.opacity="1",e[1].style.animation="gradient 2.5s ease-in",e[1].style.transformOrigin="left",e[1].style.opacity="1",e[2].style.animation="gradient 2.5s ease-in",e[2].style.transformOrigin="left",e[2].style.opacity="1",e[3].style.animation="gradient 2.5s ease-in",e[3].style.transformOrigin="left",e[3].style.opacity="1"}animateLaptopSvg(){const e=document.querySelector("#card");e.style.animation="cardLaptop 2s ease-in-out",e.style.transformOrigin="center",setTimeout(()=>{e.style.transform="translateY(0px) translateX(20px) rotateZ(2.5deg)"},1999)}animateBlackboard(){const e=document.querySelector("#blackboardGraphBar1"),t=document.querySelector("#blackboardGraphBar2"),n=document.querySelector("#blackboardGraphBar3"),o=document.querySelector("#blackboardGraphBar4");e.style.animation="barHeight 2s ease-in-out alternate",t.style.animation="barHeight 2s ease-in-out",n.style.animation="barHeight 2s ease-in-out",o.style.animation="barHeight 2s ease-in-out",e.style.transformOrigin="bottom",t.style.transformOrigin="bottom",n.style.transformOrigin="bottom",o.style.transformOrigin="bottom",e.style.transformBox="fill-box",t.style.transformBox="fill-box",n.style.transformBox="fill-box",o.style.transformBox="fill-box",setTimeout(()=>{e.style.transform="scaleY(1)",t.style.transform="scaleY(1)",n.style.transform="scaleY(1)",o.style.transform="scaleY(1)"},1999)}};var l=class{constructor(){this.ratings()}ratings(){if("/about/"===window.location.pathname){const e=document.querySelector("#ratingBarOne"),t=document.querySelector("#ratingBarTwo"),n=document.querySelector("#ratingBarThree"),o=document.querySelector("#ratingBarFour");let r=document.querySelectorAll(".ratingBar");r[0].style.width=e.value,r[1].style.width=t.value,r[2].style.width=n.value,r[3].style.width=o.value}}},c=n(1),i=n.n(c);var u=class{constructor(){i.a.defaults.headers.common["X-WP-Nonce"]=writerData.nonce,this.events()}events(){const e=document.querySelector("#universalForm");e&&e.addEventListener("submit",this.messageDispatcher)}async messageDispatcher(e){e.preventDefault();const t=document.querySelector('[name="fName"]'),n=document.querySelector('[name="email"]'),o=document.querySelector('[name="date"]'),r=document.querySelector('[name="time"]'),a=document.querySelector('[name="messageOrComment"]');document.querySelector('[name="submit]'),i.a.defaults.headers.common["X-WP-Nonce"]=writerData.nonce;if(""!=t.value&&""!=n.value&&""!=a.value&&null!=o.value){var s={title:t.value,date:o.value,email:n.value,time:r.value,comment:a.value,status:"private"};console.log(s);try{const e=await i.a.post(writerData.root_url+"/wp-json/drymer/v1/new-message",s);console.log("response:",e),200===e.status&&setTimeout(()=>{document.querySelector(".formContainer").classList.add("d-none"),document.querySelector(".thankyouMessage").classList.remove("d-none")},300)}catch(e){document.querySelector("#sec8ErrorMsg").classList.remove("d-none"),document.querySelector("#sec8ErrorMsg").style.animation="opacityChange 0.4s ease-in",t.value="",o.value="",a.value="",r.value="",n.value=""}}else""!==t.value&&""!==n.value&&""!==o.value&&""!==a.value||(setTimeout((function(){""===t.value&&(document.querySelector("#noNameMsg").classList.remove("d-none"),document.querySelector("#noNameMsg").style.animation="opacityChange 0.4s ease-in ",t.addEventListener("keydown",(function(){setTimeout((function(){""!=t.value&&document.querySelector("#noNameMsg").classList.add("d-none")}),1)})))}),5),setTimeout((function(){""===n.value&&(document.querySelector("#noEmailMsg").classList.remove("d-none"),document.querySelector("#noEmailMsg").style.animation="opacityChange 0.4s ease-in ",n.addEventListener("keydown",(function(){setTimeout((function(){""!=n.value&&document.querySelector("#noEmailMsg").classList.add("d-none")}),1)})))}),5),setTimeout((function(){""===o.value&&(document.querySelector("#noDateMsg").classList.remove("d-none"),document.querySelector("#noDateMsg").style.animation="opacityChange 0.4s ease-in ",o.addEventListener("focusout",(function(){setTimeout((function(){""!=o.value&&document.querySelector("#noDateMsg").classList.add("d-none")}),1)})))}),5),setTimeout((function(){""===a.value&&(document.querySelector("#noMessageMsg").classList.remove("d-none"),document.querySelector("#noMessageMsg").style.animation="opacityChange 0.4s ease-in ",a.addEventListener("keydown",(function(){setTimeout((function(){""!=a.value&&document.querySelector("#noMessageMsg").classList.add("d-none")}),1)})))}),5))}async testimonialDispatcher(e){e.preventDefault();const t=document.querySelector('[name="firstName"]'),n=document.querySelector('[name="emailAddr"]'),o=document.querySelector('[name="dateMet"]'),r=(document.querySelector('[name="file"]'),document.querySelector('[name="rating"]'),document.querySelector('[name="comment"]'));document.querySelector('[name="submit]'),i.a.defaults.headers.common["X-WP-Nonce"]=writerData.nonce;if(""!=t.value&&""!=n.value&&""!=r.value&&null!=o.value){var a={title:t.value,date:o.value,email:n.value,comment:r.value,status:"publish"};try{const e=await i.a.post(writerData.root_url+"/wp-json/drymer/v1/new-testimonial",a);console.log("response:",e),200===e.status&&setTimeout(()=>{},300)}catch(e){console.log("didnt work")}}else""!==t.value&&""!==n.value&&""!==o.value&&""!==r.value||setTimeout((function(){t.value}),5)}};new o,new r,new a,new s,new l,new u}});