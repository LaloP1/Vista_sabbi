document.addEventListener("DOMContentLoaded", function () {
    const menuContainer = document.querySelector(".menu-container");
    const misPlantelesContainers = document.querySelectorAll(".misPlantelesContainer");
    const mainContent = document.querySelector("main");

    misPlantelesContainers.forEach(container => {
        container.classList.add("hidden");
    });

    menuContainer.addEventListener("mouseenter", function () {
        misPlantelesContainers.forEach(container => {
            container.classList.remove("hidden");
        });
        mainContent.classList.add("blurred"); // Aplica la clase "blurred" al main
    });

    menuContainer.addEventListener("mouseleave", function () {
        misPlantelesContainers.forEach(container => {
            container.classList.add("hidden");
        });
        mainContent.classList.remove("blurred"); // Elimina la clase "blurred" del main
    });
});
