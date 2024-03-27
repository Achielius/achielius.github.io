document.addEventListener("DOMContentLoaded", function() {
    var toggleSections = document.getElementsByClassName("toggle-section");
    for (var i = 0; i < toggleSections.length; i++) {
        toggleSections[i].addEventListener("click", function() {
            var section = this.nextElementSibling;
            var icon = this.querySelector(".toggle-icon");
            var allSections = document.querySelectorAll(".toggle-section + ul");
            for (var j = 0; j < allSections.length; j++) {
                if (allSections[j] !== section) {
                    allSections[j].style.display = "none";
                    var siblingIcon = allSections[j].previousElementSibling.querySelector(".toggle-icon");
                    siblingIcon.textContent = "+";
                }
            }
            if (section.style.display === "none" || !section.style.display) {
                section.style.display = "block";
                icon.textContent = "-";
            } else {
                section.style.display = "none";
                icon.textContent = "+";
            }
        });
    }
});
