        document.addEventListener("DOMContentLoaded", function () {
            const menuContainer = document.querySelector(".menu-container");
            const misPlantelesContainers = document.querySelectorAll(".misPlantelesContainer");

            misPlantelesContainers.forEach(container => {
                container.classList.add("hidden");
            });

            menuContainer.addEventListener("mouseenter", function () {
                misPlantelesContainers.forEach(container => {
                    container.classList.remove("hidden");
                });
            });

            menuContainer.addEventListener("mouseleave", function () {
                misPlantelesContainers.forEach(container => {
                    container.classList.add("hidden");
                });
            });
        });
