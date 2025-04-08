// Coundown Number
const counters = document.querySelectorAll('.number');
counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const increment = target / 200; // adjust for speed

    if (count < target) {
      counter.innerText = Math.ceil(count + increment);
      setTimeout(updateCount, 10);
    } else {
      counter.innerText = target.toLocaleString();
    }
  };
  updateCount();
});


// BXSlider
jQuery(document).ready(function(){
  jQuery(".slider").bxSlider({
    auto: true,
  });
});