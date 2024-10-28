var demoTrigger = document.querySelector('.demo-trigger');

new Drift(demoTrigger, {
  paneContainer: document.querySelector('.detail'),
  inlinePane: 900,
  inlineOffsetY: -85,
  containInline: true,
  sourceAttribute: 'href'
});

new Luminous(demoTrigger);



  // JavaScript to add the sticky class on scroll
   // JavaScript to add the sticky class on scroll
//    window.onscroll = function () {
//     makeSticky();
//   };

//   const header = document.getElementsByClassName("header-scroll")[0]; // Access the first element
//   const sticky = header.offsetTop;

//   function makeSticky() {
//     if (window.pageYOffset > sticky) {
//       header.classList.add("sticky");
//       header.ass
//     } else {
//       header.classList.remove("sticky");
//     }
//   }
