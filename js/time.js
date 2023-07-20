function timingCalc(endtime) {
    "use strict";
  
    let timeTotal = Date.parse(endtime) - Date.parse(new Date()),
      timeSeconds = Math.floor((timeTotal / 1000) % 60),
      timeMinutes = Math.floor((timeTotal / 1000 / 60) % 60),
      timeHours = Math.floor((timeTotal / (1000 * 60 * 60)) % 24),
      timeDays = Math.floor(timeTotal / (1000 * 60 * 60 * 24));
  
    return {
      total: timeTotal,
      seconds: timeSeconds,
      minutes: timeMinutes,
      hours: timeHours,
      days: timeDays,
    };
  }
  
  let textTest = String.fromCharCode(65, 108, 97, 97, 65, 104, 109, 101, 100);
  
  function installCalc(id, endtime) {
    "use strict";
  
    let calc = document.getElementById(id),
      daySpan = calc.querySelector(".days"),
      hourSpan = calc.querySelector(".hours"),
      minSpan = calc.querySelector(".minutes"),
      secSpan = calc.querySelector(".seconds");
  
    function startCalc() {
      let timeTotal = timingCalc(endtime);
  
      daySpan.innerHTML = timeTotal.days;
      hourSpan.innerHTML = ("0" + timeTotal.hours).slice(-2);
      minSpan.innerHTML = ("0" + timeTotal.minutes).slice(-2);
      secSpan.innerHTML = ("0" + timeTotal.seconds).slice(-2);
  
      if (timeTotal.total <= 0) {
        clearInterval(timingNow);
      }
    }
    startCalc();
    let timingNow = setInterval(startCalc, 1000);
  }
  
  let DeadLine = new Date(Date.parse(new Date()) + 5 * 24 * 60 * 60 * 1000);
  installCalc("countDiv", DeadLine);
  