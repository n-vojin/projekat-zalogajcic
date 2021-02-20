function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

//dodavanje id 
const obj = document.getElementById("animacijaBr1");
animateValue(obj, 0, 3, 2000);

const obj2 = document.getElementById("animacijaBr2");
animateValue(obj2, 0, 15, 2000);

const obj3 = document.getElementById("animacijaBr3");
animateValue(obj3, 0, 1500, 2000);

const obj4 = document.getElementById("animacijaBr4");
animateValue(obj4, 0, 10, 1000);

const obj5= document.getElementById("animacijaBr5");
animateValue(obj5, 0, 1000, 2000);

const obj6 = document.getElementById("animacijaBr6");
animateValue(obj6, 0, 40, 2000);

