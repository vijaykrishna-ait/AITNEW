<?php 
require_once __DIR__ . '/includes/config.php';
$base = BASE_URL ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Development | Adhiran Infotech</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/motion@12.40.0/dist/motion.min.js"></script>

    <style>
        :root {
            --bg: #0E2A4D;
            --bg2: #1768D6;
            --blue-deep: #0F4FA8;
            --lime: #F5871F;
            --white: #ffffff;
            --text: rgba(255, 255, 255, .82);
        }

        * {margin: 0;padding: 0;box-sizing: border-box;}

        body {font-family: 'Inter', sans-serif;background: #fff;}

        .wrap {width: min(1200px, 92%);margin: 0 auto;}

        /* Hero */
        .under-dev-hero {min-height: 100vh;display: flex;align-items: center;justify-content: center;text-align: center;position: relative;
            overflow: hidden;background: linear-gradient(135deg, rgba(8, 17, 31, .96), rgba(16, 28, 48, .92)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;
        }

        .under-dev-hero::before {
            content: "";position: absolute;width: 500px;height: 500px;background: rgba(183, 255, 60, .08);border-radius: 50%;filter: blur(80px);top: -150px;right: -100px;
        }

        .under-dev-hero::after {
            content: "";position: absolute;width: 450px;height: 450px;
            background: rgba(183, 255, 60, .06);
            border-radius: 50%;
            filter: blur(80px);
            bottom: -180px;
            left: -100px;
        }

        .content {
            position: relative;
            z-index: 2;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 999px;
            background: rgba(255, 255, 255, .05);
            backdrop-filter: blur(10px);
            color: var(--lime);
            font-weight: 600;
            margin-bottom: 24px;
        }

        .badge::before {
            content: "●";
        }

        h1 {
            font-family: 'Sora', sans-serif;
            font-size: clamp(3rem, 7vw, 5.5rem);
            line-height: 1.05;
            color: var(--white);
            margin-bottom: 24px;
        }

        p {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text);
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 999px;
            font-weight: 600;
            transition: .3s ease;
        }

        .btn-primary {
            background: var(--lime);
            color: #111;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 1px solid rgba(255, 255, 255, .2);
            color: #fff;
            background: rgba(255, 255, 255, .04);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, .08);
        }

        .icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 28px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .06);
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, .08);
        }

        .icon svg {
            width: 42px;
            height: 42px;
            stroke: var(--lime);
        }

        .bchar {
            display: inline-block;
            will-change: transform;
        }

        @media(max-width:768px) {
            .actions {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 240px;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <section class="under-dev-hero">
        <div class="wrap">
            <div class="content">
                <div class="icon" id="icon"> <svg fill="none" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.757.427 1.757 2.925 0 3.352a1.724 1.724 0 00-1.066 2.572c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.427 1.757-2.925 1.757-3.352 0a1.724 1.724 0 00-2.572-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.757-.427-1.757-2.925 0-3.352a1.724 1.724 0 001.066-2.572c-.94-1.543.826-3.31 2.37-2.37.996.607 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01" />
                    </svg> </div>
                <div class="badge" id="badge">Coming Soon</div>
                <h1 id="title">Page Under Development</h1>
                <p id="desc"> We're working on something exciting. This page is currently being crafted by our team and
                    will be
                    available soon. Thank you for your patience. </p>
                <div class="actions" id="actions">
                    <a href="<?= $base ?>index" class="btn btn-primary" id="ctaBtn">
                        <span class="bchar">B</span><span class="bchar">a</span><span class="bchar">c</span><span
                            class="bchar">k</span>
                        <span class="bchar">t</span><span class="bchar">o</span>
                        <span class="bchar">H</span><span class="bchar">o</span><span class="bchar">m</span><span
                            class="bchar">e</span>
                    </a>
                    <a href="<?= $base ?>contact" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", async () => {
            const { animate, stagger } = Motion
            const btnChars = document.querySelectorAll(".bchar")

            animate(btnChars, {
                y: [0, -3, 0]
            }, {
                duration: 1,
                delay: Motion.stagger(0.05),
                repeat: Infinity,
                easing: ""
            })
            animate("#icon svg", {
                scale: 2
            }, {
                duration: 2,
                repeat: Infinity,
                easing: "linear"
            })


            // CTA pulse effect (primary button)
            animate(".btn-primary", {
                boxShadow: [
                    "0 0 0 rgba(245,135,31,0)",
                    "0 0 25px rgba(245,135,31,.4)",
                    "0 0 0 rgba(245,135,31,0)"
                ]
            }, {
                duration: 3,
                repeat: Infinity,
                easing: "ease-in-out"
            })
        })
    </script>
</body>

</html>