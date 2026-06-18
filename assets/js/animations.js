document.addEventListener("DOMContentLoaded", () => {

    const { animate, inView, stagger } = Motion;

    const root = getComputedStyle(document.documentElement);

    const MOTION_DEFAULTS = {
        duration:
            parseFloat(root.getPropertyValue("--motion-duration")) || 0.8,
        easing:
            root.getPropertyValue("--motion-easing").trim() ||
            "ease-out",
        delay:
            parseFloat(root.getPropertyValue("--motion-delay")) || 0
    };

    /* ----------------------------------------------------------
    Reduced motion support
    ---------------------------------------------------------- */

    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    if (reducedMotion) {
        MOTION_DEFAULTS.duration = 0;
    }

    /* ----------------------------------------------------------
    Sections to animate
    ---------------------------------------------------------- */

    const sectionsToAnimate = [
        "section.hero",
        "section.services",
        "section.solutions",
        "section.experts",
        "section.industries",
        "section.case-studies",
        "section.news",
        "section.clients",
        "section.skills",
        "section.why",
        "section.cta",
        "section.contact"
    ];

    /* ----------------------------------------------------------
    Scroll reveal
    ---------------------------------------------------------- */

    sectionsToAnimate.forEach(selector => {
        inView(selector, element => {
            animate(
                element,
                { opacity: [0, 1], y: [40, 0] },
                MOTION_DEFAULTS
            );

            const children = element.querySelectorAll(
                ".skill-item, .expert-card, .case-card, .client-logo, .svc-card, .reach-card"
            );

            if (children.length) {
                animate(
                    children,
                    { opacity: [0, 1], y: [20, 0] },
                    { duration: 0.6, delay: stagger(0.08) }
                );
            }
        });


    });

    /* ----------------------------------------------------------
    Form field focus animation
    ---------------------------------------------------------- */

    document
        .querySelectorAll(".form-card input, .form-card textarea, .form-card select")
        .forEach(field => {
            field.addEventListener("focus", () => {
                animate(field, { scale: 1.04 }, { duration: 0.2 });
                field.style.boxShadow = "0 0 0 2px rgba(23,104,214,0.2)";
            });

            field.addEventListener("blur", () => {
                animate(field, { scale: 1 }, { duration: 0.2 });
                field.style.boxShadow = "none";
            });
        });


    /* ----------------------------------------------------------
    Reach card hover animation
    ---------------------------------------------------------- */

    document.querySelectorAll(".reach-card").forEach(card => {

        const label = card.querySelector(".label");
        card.addEventListener("mouseenter", () => {
            animate(card, { scale: 1.03, y: -4 }, { duration: 0.3 });

            if (label) {
                animate(label, { y: -4, opacity: 1 }, { duration: 0.3 });
            }
        });

        card.addEventListener("mouseleave", () => {
            animate(card, { scale: 1, y: 0 }, { duration: 0.3 });

            if (label) {
                animate(label, { y: 0, opacity: 0.8 }, { duration: 0.3 });
            }
        });
    });

    /* ----------------------------------------------------------
        Number counter animation
    ---------------------------------------------------------- */

    document.querySelectorAll(".stat-number").forEach(counter => {

    const target = Number(counter.dataset.target);
    const suffix = counter.dataset.suffix || "";

    inView(counter, () => {

        const state = { value: 0 };

        animate(
            state,
            { value: target },
            {
                duration: 2,
                easing: "ease-out",
                onUpdate: latest => {
                    counter.textContent =
                        Math.round(latest.value).toLocaleString() + suffix;
                }
            }
        );

    }, { once: true });

});
});
