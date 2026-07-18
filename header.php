<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHC - Global Investment Holdings</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Be Vietnam Pro"', 'sans-serif'],
                        cairo: ['"Be Vietnam Pro"', 'sans-serif'],
                    },
                    colors: {
                        black: '#000000',
                        dark: '#111111',
                        darkGray: '#333333',
                        mediumGray: '#555555',
                        lightGray: '#F9F9F9',
                        borderColor: '#E5E5E5',
                        labelGray: 'rgba(0, 0, 0, 0.5)',
                    },
                    letterSpacing: {
                        ihc: '-0.03em',
                    },
                    lineHeight: {
                        ihcTitle: '1.1',
                        ihcPara: '1.4',
                    },
                    maxWidth: {
                        ihcContainer: '1400px',
                    },
                    spacing: {
                        sectionMobile: '100px',
                        sectionDesktop: '160px',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: '"Be Vietnam Pro"', sans-serif;
            background-color: #FFFFFF;
            color: #111111;
        }

        /* CSS Arrow Icon */
        .css-arrow {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-top: 2px solid currentColor;
            border-right: 2px solid currentColor;
            transform: rotate(45deg);
            margin-bottom: 2px;
            transition: transform 0.3s ease;
        }

        .css-arrow.prev {
            transform: rotate(-135deg);
            margin-bottom: 0;
            margin-right: -2px;
        }

        .css-arrow.next {
            margin-bottom: 0;
            margin-left: -2px;
        }

        .css-arrow.down {
            transform: rotate(135deg);
            margin-bottom: 4px;
        }

        .slider-nav-btn:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        /* Sharp images override */
        img.sharp-img {
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        /* Hover effect for lists */
        .hover-row:hover {
            background-color: #F9F9F9;
        }
    </style>
<?php wp_head(); ?>
<style>
        #primary-menu { display: flex; gap: 1.5rem; }
    </style>
    </head>

<body class="antialiased selection:bg-dark selection:text-white" <?php body_class(); ?>>

    <!-- 1. HEADER -->
    <header class="w-full border-b border-borderColor py-6 sticky top-0 bg-white z-50">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10 flex justify-between items-center">
            <a href="#" class="text-3xl font-light tracking-ihc leading-none">
                IHC<span class="text-labelGray">.</span>
            </a>
            <div class="flex items-center gap-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'hidden md:flex gap-6 text-sm font-semibold text-dark uppercase tracking-wider',
                    'fallback_cb'    => false,
                ) );
                ?>
                
                <!-- Hamburger Button (Mobile Only) -->
                <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1.5 focus:outline-none z-50">
                    <span class="w-6 h-[2px] bg-dark transition-transform duration-300"></span>
                    <span class="w-6 h-[2px] bg-dark transition-opacity duration-300"></span>
                    <span class="w-6 h-[2px] bg-dark transition-transform duration-300"></span>
                </button>

            </div>
        </div>
    </header>
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-white z-40 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col justify-center items-center">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'mobile-primary-menu',
            'container'      => false,
            'menu_class'     => 'flex flex-col gap-8 text-2xl font-light text-dark uppercase tracking-wider text-center',
            'fallback_cb'    => false,
        ) );
        ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const spans = btn.querySelectorAll('span');
            let isOpen = false;

            btn.addEventListener('click', function() {
                isOpen = !isOpen;
                if (isOpen) {
                    menu.classList.remove('translate-x-full');
                    spans[0].classList.add('rotate-45', 'translate-y-2');
                    spans[1].classList.add('opacity-0');
                    spans[2].classList.add('-rotate-45', '-translate-y-2');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                } else {
                    menu.classList.add('translate-x-full');
                    spans[0].classList.remove('rotate-45', 'translate-y-2');
                    spans[1].classList.remove('opacity-0');
                    spans[2].classList.remove('-rotate-45', '-translate-y-2');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
