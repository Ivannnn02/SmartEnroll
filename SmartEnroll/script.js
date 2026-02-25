const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

function showNextSlide() {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
}

setInterval(showNextSlide, 5000);
const dobPicker = flatpickr("#dob", {
    dateFormat: "m/d/Y",
    maxDate: "today",

    /* UX */
    allowInput: true,              // MANUAL INPUT ENABLED
    clickOpens: true,
    monthSelectorType: "dropdown",
    yearSelectorType: "dropdown",
    defaultDate: "2010-01-01",

    onChange: function(selectedDates) {
        if (selectedDates.length) {
            calculateAge(selectedDates[0]);
        }
    }
});

/* OPEN CALENDAR WHEN ICON IS CLICKED */
document.querySelector(".calendar-icon").addEventListener("click", function () {
    dobPicker.open();
});

/* AUTO AGE CALCULATION */
function calculateAge(dob) {
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }

    document.getElementById("age").value = age;
}
