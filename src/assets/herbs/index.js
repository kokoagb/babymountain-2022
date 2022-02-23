import tippy from 'tippy.js';
import './style.scss';

window.addEventListener('DOMContentLoaded', () => {
  tippy('.wp-block-bm-blocks-herbs--herb', {
    content(el) {
      return el.dataset.popover;
    },
    allowHTML: true,
    interactive: true,
    placement: 'auto',
    theme: 'babymountain',
    maxWidth: 500,
  });
});
