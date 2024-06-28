import Alpine from "alpinejs";

import ContactsMap from "./ContactsMap";
Alpine.data("ContactsMap", ContactsMap);

import Accordion from "./Accordion";
Alpine.data("Accordion", Accordion);

import PhoneInputMask from "./PhoneInputMask";
Alpine.data("PhoneInputMask", PhoneInputMask);

import SimpleSlider from "./SimpleSlider";
Alpine.data("SimpleSlider", SimpleSlider);

import FancyboxGallery from "./FancyboxGallery";
Alpine.data("FancyboxGallery", FancyboxGallery);

import catalogSlider from "./catalogSlider";
Alpine.data("catalogSlider", catalogSlider);

import reviewSlider from "./reviewSlider";
Alpine.data("reviewSlider", reviewSlider);

import gallerySlider from "./gallerySlider";
Alpine.data("gallerySlider", gallerySlider);

import textPageSlider from "./textPageSlider";
Alpine.data("textPageSlider", textPageSlider);

Alpine.store("mainMenu", {
  open: false,
});

Alpine.start();



window.addEventListener("scroll", function () {
  var scroll = window.pageYOffset || document.documentElement.scrollTop;
  var masthead = document.querySelector("header");
  if (scroll >= 50) {
    masthead.classList.add("header--scrolled");
  } else {
    masthead.classList.remove("header--scrolled");
  }
});


export class Notice {
  constructor() {
    this.el = document.querySelector(".notice");
    this.secEl = document.querySelector(".notice__close-seconds");
    this.titleEl = document.querySelector(".notice--success-send__title");
    this.closeBtn = document.querySelector(".notice__close-cross");
    this.initEvents()
  }

  setNotice(title, timer) {
    this.el.classList.add("active");

    this.titleEl.textContent = title;

    let timeout = setInterval(() => {
      timer -= 1;
      this.secEl.textContent = timer;
      if (timer < 1) {
        this.el.classList.remove("active");
        clearInterval(timeout);
      }
    }, 1000);
  }

  initEvents() {
    this.closeBtn.addEventListener("click", () => {
      this.el.classList.remove("active");
    })
  }
}

window.copyText = async (textToCopy) => {
  // Navigator clipboard api needs a secure context (https)
  if (navigator.clipboard && window.isSecureContext) {
    await navigator.clipboard.writeText(textToCopy);
  } else {
    // Use the 'out of viewport hidden text area' trick
    const textArea = document.createElement("textarea");
    textArea.value = textToCopy;

    // Move textarea out of the viewport so it's not visible
    textArea.style.position = "absolute";
    textArea.style.left = "-999999px";

    document.body.prepend(textArea);
    textArea.select();

    try {
      document.execCommand('copy');
    } catch (error) {
      console.error(error);
    } finally {
      textArea.remove();
    }
  }
}

if (document.querySelector('iframe')) {
  document.querySelector('iframe').onload = iframeOnload
}
function iframeOnload() {
  document.querySelector('.preloader').remove()
}

if (document.querySelector('#widgetBnovo')) {
  const widgetBnovo = document.querySelector('#widgetBnovo');

  widgetBnovo.addEventListener('mousedown', function () {
    widgetBnovo.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      inline: 'center'
    });
  });
}

