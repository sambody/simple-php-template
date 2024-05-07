<div class="page-section page-section-header">
    <header class="container">
        <div class="site-logo">
            <a href="/" title="Home">
                <!-- icon source: https://heroicons.com/ -->
                <svg stroke="black" width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
            </a>
        </div>
        <nav class="nav-main">
            <ul role="menu">
                <li role="menuitem" class="<?php echo ($activeNavItem === 'home' ? 'is-active' : '') ?>"><a href="#" title="">Home</a></li>
                <li role="menuitem" class="<?php echo ($activeNavItem === 'one' ? 'is-active' : '') ?>"><a href="#" title="">Page one</a></li>
                <li role="menuitem" class="<?php echo ($activeNavItem === 'two' ? 'is-active' : '') ?>"><a href="#" title="">Page two</a></li>
            </ul>
        </nav>
    </header>
</div>
