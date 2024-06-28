import MicroModal from "micromodal";

let diff = window.innerWidth - document.documentElement.clientWidth;
if (window.innerWidth > document.documentElement.clientWidth) diff = 0;

const applyOffset = (offset) => {
  document.body.style.paddingRight = `${offset}px`;
};

function modalShow() {
  applyOffset(diff);
}
function modalClose(modal) {
  modal.addEventListener("animationend", () => applyOffset(0), { once: true });
}

export const modalConfig = {
  onShow: modalShow,
  onClose: modalClose,
  awaitOpenAnimation: true,
  awaitCloseAnimation: true,
  disableFocus: true,
  disableScroll: true,
};

export const showModal = (modalID) => MicroModal.show(modalID, modalConfig);

MicroModal.init(modalConfig);
