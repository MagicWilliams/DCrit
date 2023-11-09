$(document).ready(function() {
  const desk = window.matchMedia('(min-width: 769px)');

  if(!desk.matches) {
    $('#toggle1').text('Faculty');
    $('#toggle2').text('Students');
  }
});

window.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('[role="tab"]');
    const tabList = document.querySelector('[role="tablist"]');

    tabs.forEach((tab) => {
        tab.addEventListener("click", changeTabs);
    });

    menuTab();
    
    $('#main-nav li.active .sublinks a').on('click', function() {
      if(this.hash == '#faculty') {
        document.getElementById("toggle1").click();
      } else if(this.hash == '#students') {
        document.getElementById("toggle2").click();
      } else if(this.hash == '#alumni') {
        document.getElementById("toggle3").click();
      } 
    });

    let tabFocus = 0;

    tabList.addEventListener("keydown", (e) => {
        if (e.keyCode === 39 || e.keyCode === 37) {
          tabs[tabFocus].setAttribute("tabindex", -1);
          if (e.keyCode === 39) {
            tabFocus++;
            if (tabFocus >= tabs.length) {
              tabFocus = 0;
            }
          } else if (e.keyCode === 37) {
            tabFocus--;
            if (tabFocus < 0) {
              tabFocus = tabs.length - 1;
            }
          }
    
          tabs[tabFocus].setAttribute("tabindex", 0);
          tabs[tabFocus].focus();
        }
      });

    $(".people").focus(function() {
      this.scrollIntoView();
    });

    $(".people").on('click', 'button', function () {
      $(this).closest(".person.bio").toggleClass("opened");
      $(this).attr('aria-expanded', $(this).attr('aria-expanded') === 'true' ? 'false' : 'true');
  });

  $(".people").on('click', '.person.bio .img-container, .person.bio .accordion', function () {
      $(this).closest('.person.bio').find('button').trigger('click');
  });

  $(".facsection.list").on('click', 'button', function () {
      let thisAccordion = $(this).closest(".facsection.list");
      if($(this).attr('aria-expanded') === false) {
          $(this).attr('aria-expanded', 'true');
      } else {
          $(this).attr('aria-expanded', 'false');
      }
      $(thisAccordion).toggleClass("opened");
  });

  $(".facsection.list").on('click', '.accordion', function() {
      let thisAcc = $(this).closest('.facsection.list').find('button');
      $(this).closest(".facsection.list").toggleClass("opened");
      if(thisAcc.attr('aria-expanded') === false) {
          thisAcc.attr('aria-expanded', 'true');
      } else {
          thisAcc.attr('aria-expanded', 'false');
      }
  });

});

function changeTabs(e) {
    const target = e.target;
    const parent = target.parentNode;
    const grandparent = parent.parentNode;

    let thisSec = target.getAttribute('aria-controls');
  
    let alltabs = grandparent.querySelectorAll('[aria-selected="true"]');

    alltabs.forEach((t) => t.setAttribute("aria-selected", false));
  
    target.setAttribute("aria-selected", true);
  
    $(".people, .people-toggle").removeClass("active");
    target.classList.add("active");

    $(`#${thisSec}`).addClass("active");
    if (thisSec === 'faculty') {
      $("header, footer, h1").css("--primary", "var(--toggle1)");
    } else if (thisSec === 'students') {
        $("header, footer, h1").css("--primary", "var(--toggle2)");
    } else if (thisSec === 'alumni') {
        $("header, h1").css("--primary", "var(--toggle3)");
        $("footer").css("--primary", "var(--smalltext)")
    }
    $(`#${thisSec}`)[0].scrollIntoView();
  
    grandparent.parentNode
      .querySelector(`#${target.getAttribute("aria-controls")}`)
      .classList.add("active");
}

function menuTab() {
  if(window.location.hash) {
    let hash = window.location.hash.substring(1);
    if(hash == 'faculty') {
      document.getElementById("toggle1").click();
    } else if(hash == 'students') {
      document.getElementById("toggle2").click();
    } else if(hash == 'alumni') {
      document.getElementById("toggle3").click();
    }
  }
}