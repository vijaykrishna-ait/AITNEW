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

    document.querySelectorAll("section").forEach(selector => {
        inView(selector, element => {
            animate(
                element,
                { opacity: [0, 1], y: [40, 0] },
                MOTION_DEFAULTS
            );

            const children = element.querySelectorAll(
                ".skill-item, .expert-card, .case-card, .client-logo, .svc-card, .reach-card, .job-card, .supply-card, .value-card"
            );

        if (children.length) {
                animate(
                    children,
                    { opacity: [0,1], y: [50, 0] },
                    { delay: stagger(0.08), duration: MOTION_DEFAULTS.duration, easing: MOTION_DEFAULTS.easing }
                );
            }
        });
    });

    /* ----------------------------------------------------------
    Form field focus animation
    ---------------------------------------------------------- */

    // const formSelectors = '.form-card, .form-group, .newsletter-form';

    // document.querySelectorAll(formSelectors).forEach(selector => {
    //     document
    //         .querySelectorAll(`${selector} input, ${selector} textarea, ${selector} select`)
    //         .forEach(field => {
    //             const focusDuration = reducedMotion ? 0 : 0.2;

    //             field.addEventListener("focus", () => {
    //                 animate(field, { scale: 1.04 }, { duration: focusDuration });
    //                 animate(field, { boxShadow: ["0 0 0 0px rgba(23,104,214,0)", "0 0 0 2px rgba(23,104,214,0.2)"] }, { duration: focusDuration });
    //             });

    //             field.addEventListener("blur", () => {
    //                 animate(field, { scale: 1 }, { duration: focusDuration });
    //                 animate(field, { boxShadow: ["0 0 0 2px rgba(23,104,214,0.2)", "0 0 0 0px rgba(23,104,214,0)"] }, { duration: focusDuration });
    //             });
    //         });
    // });


    /* ----------------------------------------------------------
    Card hover animations
    ---------------------------------------------------------- */

    const cardSelectors = '.reach-card, .cs-card, .cl-card, .de-card, .ai-card, .usecase-card, .value-card, .leader-card, .story-card, .hero-card, .region-card, .ind-card, .case-card, .form-card, .supply-card, .ed-card, .eduuse-card, .es-why-card, .why-hire-card, .tech-detail-card, .engage-card, .benefit-card, .outing-card, .testi-card, .ls-card, .compliance-card, .article-card, .floating-card, .expert-card';

    document.querySelectorAll(cardSelectors).forEach(card => {
        const label = card.querySelector(".label");
        const hoverDuration = reducedMotion ? 0 : 0.3;

        card.addEventListener("mouseenter", () => {
            animate(card, { scale: 1.03, y: -4 }, { duration: hoverDuration });

            if (label) {
                animate(label, { y: -4, opacity: 1 }, { duration: hoverDuration });
            }
        });

        card.addEventListener("mouseleave", () => {
            animate(card, { scale: 1, y: 0 }, { duration: hoverDuration });

            if (label) {
                animate(label, { y: 0, opacity: 0.8 }, { duration: hoverDuration });
            }
        });
    });

    /* ----------------------------------------------------------
        Number counter animation
    ---------------------------------------------------------- */

    document.querySelectorAll(".count-up").forEach(counter => {
        const target = Number(counter.dataset.target);
        const prefix = counter.dataset.prefix || "";
        const suffix = counter.dataset.suffix || "";

        inView(counter, () => {
            const state = { value: 0 };
            const counterDuration = reducedMotion ? 0 : (counter.dataset.duration ? parseFloat(counter.dataset.duration) : 1.5);

            animate(
                state,
                { value: target },
                {
                    duration: counterDuration,
                    easing: "ease-out",
                    onUpdate: value => {
                        counter.textContent = prefix + Math.round(value).toLocaleString() + suffix;
                    }
                }
            );
        }, { once: true });
    });
});
