$(document).ready(function() {

$(".carousel").slick({
  dots: true,
  appendArrows: $('.carousel-controls'),
  appendDots: $('.carousel-controls'),
  arrows: true,
  prevArrow: '<button type="button" class="custom-prev-button carousel-button">'
  + '<span aria-hidden="true"><svg id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '<span class="sr-only">Previous slide</span>'
  + '</button>',
nextArrow: '<button type="button" class="custom-next-button carousel-button">'
  + '  <span aria-hidden="true"><svg id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '  <span class="sr-only">Next slide</span>'
  + '</button>',
});



  
  // /*
  //    Carousel Prototype
  //    Eric Eggert for W3C
  // */
  
  // var myCarousel = (function() {
  
  //   "use strict";
  
  //   // Initial variables
  //   var carousel, slides, index, slidenav, settings, setFocus, announceItem;
  
  
  //   // Helper function: Iterates over an array of elements
  //   function forEachElement(elements, fn) {
  //     for (var i = 0; i < elements.length; i++)
  //       fn(elements[i], i);
  //   }
  
  //   // Helper function: Remove Class
  //   function removeClass(el, className) {
  //     if (el.classList) {
  //       el.classList.remove(className);
  //     } else {
  //       el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
  //     }
  //   }
  
  //   // Helper function: Test if element has a specific class
  //   function hasClass(el, className) {
  //     if (el.classList) {
  //       return el.classList.contains(className);
  //     } else {
  //       return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
  //     }
  //   }
  
  //   // Initialization for the carousel
  //   // Argument: set = an object of settings
  //   // Possible settings:
  //   // id <string> ID of the carousel wrapper element (required).
  //   // slidenav <bool> If true, a list of slides is shown.
  //   // animate <bool> If true, the slides can be animated.
  //   // startAnimated <bool> If true, the animation begins
  //   //                        immediately.
  //   //                      If false, the animation needs
  //   //                        to be initiated by clicking
  //   //                        the play button.
  //   function init(set) {
  
  //     // Make settings available to all functions
  //     settings = set;
  
  //     // Select the element and the individual slides
  //     carousel = document.getElementById(settings.id);
  //     slides = carousel.querySelectorAll('.slide');
  
  //     carousel.className = 'active carousel';
  
  
  //     // Create unordered list for controls, and attach click events fo previous and next slide
  //     var ctrls = document.createElement('ul');
  
  //     ctrls.className = 'controls';
  //     ctrls.innerHTML = '<li>' +
  //         '<button type="button" class="btn-prev"><img src="assets/icons/previous.png" alt="Previous Events Slide"></button>' +
  //       '</li>' +
  //       '<li>' +
  //         '<button type="button" class="btn-next"><img src="assets/icons/next.png" alt="Next Events Slide"></button>' +
  //       '</li>';
  
  //     ctrls.querySelector('.btn-prev')
  //       .addEventListener('click', function () {
  //         prevSlide(true);
  //       });
  //     ctrls.querySelector('.btn-next')
  //       .addEventListener('click', function () {
  //         nextSlide(true);
  //       });
  
  //     // carousel.appendChild(ctrls);
  
  //     // If the carousel is animated or a slide navigation is requested in the settings, anoter unordered list that contains those elements is added. (Note that you cannot supress the navigation when it is animated.)
  //     if (settings.slidenav) {
  //       slidenav = document.createElement('ul');
  
  //       slidenav.className = 'slidenav';
  
  //       // if (settings.animate) {
  //       //   var li = document.createElement('li');
  
  //       //   if (settings.startAnimated) {
  //       //     li.innerHTML = '<button data-action="stop"><span class="visuallyhidden">Stop Animation </span>￭</button>';
  //       //   } else {
  //       //     li.innerHTML = '<button data-action="start"><span class="visuallyhidden">Start Animation </span>▶</button>';
  //       //   }
  
  //       //   slidenav.appendChild(li);
  //       // }
  
  //       if (settings.slidenav) {
  //         forEachElement(slides, function(el, i){
  //           var li = document.createElement('li');
  //           var klass = (i===0) ? 'class="current" ' : '';
  //           var kurrent = (i===0) ? ' <span class="visually-hidden">(Current Item)</span>' : '';
  
  //           li.innerHTML = '<button '+ klass +'data-slide="' + '"><span class="visually-hidden">News</span> ' + kurrent + '</button>';
  //           slidenav.appendChild(li);
  //         });
  //       }
  
  //       slidenav.addEventListener('click', function(event) {
  //         var button = event.target;
  //         if (button.localName == 'button') {
  //           if (button.getAttribute('data-slide')) {
  //             setSlides(button.getAttribute('data-slide'), true);
  //           } 
  //         }
  //       }, true);
  
  //       carousel.className = 'active carousel with-slidenav';
  //       carousel.appendChild(slidenav);
  //     }
  
  //     // Add a live region to announce the slide number when using the previous/next buttons
  //     var liveregion = document.createElement('div');
  //     liveregion.setAttribute('aria-live', 'polite');
  //     liveregion.setAttribute('aria-atomic', 'true');
  //     liveregion.setAttribute('class', 'liveregion visually-hidden');
  //     carousel.appendChild(liveregion);
  
  //     // After the slide transitioned, remove the in-transition class, if focus should be set, set the tabindex attribute to -1 and focus the slide.
  //     slides[0].parentNode.addEventListener('transitionend', function (event) {
  //       var slide = event.target;
  //       removeClass(slide, 'in-transition');
  //       if (hasClass(slide, 'current'))  {
  //         if(setFocus) {
  //           slide.setAttribute('tabindex', '-1');
  //           slide.focus();
  //           setFocus = false;
  //         }
  //       }
  //     });
  
  //     // Set the index (=current slide) to 0 – the first slide
  //     index = 0;
  //     setSlides(index);
  
  //   }
  
  //   // Function to set a slide the current slide
  //   function setSlides(new_current, setFocusHere, transition, announceItemHere) {
  //     // Focus, transition and announce Item are optional parameters.
  //     // focus denotes if the focus should be set after the
  //     // carousel advanced to slide number new_current.
  //     // transition denotes if the transition is going into the
  //     // next or previous direction.
  //     // If announceItem is set to true, the live region’s text is changed (and announced)
  //     // Here defaults are set:
  
  //     setFocus = typeof setFocusHere !== 'undefined' ? setFocusHere : false;
  //     transition = typeof transition !== 'undefined' ? transition : 'none';
  //     announceItem = typeof announceItemHere !== 'undefined' ? announceItemHere : false;
  
  //     new_current = parseFloat(new_current);
  
  //     var length = slides.length;
  //     var new_next = new_current+1;
  //     var new_prev = new_current-1;
  
  //     // If the next slide number is equal to the length,
  //     // the next slide should be the first one of the slides.
  //     // If the previous slide number is less than 0.
  //     // the previous slide is the last of the slides.
  //     if(new_next === length) {
  //       new_next = 0;
  //     } else if(new_prev < 0) {
  //       new_prev = length-1;
  //     }
  
  //     // Reset slide classes
  //     for (var i = slides.length - 1; i >= 0; i--) {
  //       slides[i].className = "slide";
  //     }
  
  //     // Add classes to the previous, next and current slide
  //     slides[new_next].className = 'next slide' + ((transition == 'next') ? ' in-transition' : '');
  //     slides[new_next].setAttribute('aria-hidden', 'true');
  
  //     slides[new_prev].className = 'prev slide' + ((transition == 'prev') ? ' in-transition' : '');
  //     slides[new_prev].setAttribute('aria-hidden', 'true');
  
  //     slides[new_current].className = 'current slide';
  //     slides[new_current].removeAttribute('aria-hidden');
  
  //     // Update the text in the live region which is then announced by screen readers.
  //     if (announceItem) {
  //       carousel.querySelector('.liveregion').textContent = 'Item ' + (new_current + 1) + ' of ' + slides.length;
  //     }
  
  //     // Update the buttons in the slider navigation to match the currently displayed  item
  //     if(settings.slidenav) {
  //       var buttons = carousel.querySelectorAll('.slidenav button[data-slide]');
  //       for (var j = buttons.length - 1; j >= 0; j--) {
  //         buttons[j].className = '';
  //         buttons[j].innerHTML = '<span class="visually-hidden">News</span> ';
  //       }
  //       buttons[new_current].className = "current";
  //       buttons[new_current].innerHTML = '<span class="visually-hidden">News</span> ' + ' <span class="visually-hidden">(Current Item)</span>';
  //     }
  
  //     // Set the global index to the new current value
  //     index = new_current;
  
  //   }
  
  //   // Function to advance to the next slide
  //   function nextSlide(announceItem) {
  //     announceItem = typeof announceItem !== 'undefined' ? announceItem : false;
  
  //     var length = slides.length,
  //     new_current = index + 1;
  
  //     if(new_current === length) {
  //       new_current = 0;
  //     }
  
  //     // If we advance to the next slide, the previous needs to be
  //     // visible to the user, so the third parameter is 'prev', not
  //     // next.
  //     setSlides(new_current, false, 'prev', announceItem);
  
  //   }
  
  //   // Function to advance to the previous slide
  //   function prevSlide(announceItem) {
  //     announceItem = typeof announceItem !== 'undefined' ? announceItem : false;
  
  //     var length = slides.length,
  //     new_current = index - 1;
  
  //     // If we are already on the first slide, show the last slide instead.
  //     if(new_current < 0) {
  //       new_current = length-1;
  //     }
  
  //     // If we advance to the previous slide, the next needs to be
  //     // visible to the user, so the third parameter is 'next', not
  //     // prev.
  //     setSlides(new_current, false, 'next', announceItem);
  
  //   }
  
  //   // Making some functions public
  //   return {
  //     init:init,
  //     next:nextSlide,
  //     prev:prevSlide,
  //     goto:setSlides
  //     // stop:stopAnimation,
  //     // start:startAnimation
  //   };
  // });
  
  // var carousel = new myCarousel();
  // carousel.init({
  //   id: 'carousel',
  //   slidenav: true
  // });

});