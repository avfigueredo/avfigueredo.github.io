<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>

        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Cursos"
                href="/Cursos"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/courses') ? 'active text-blue' : '' }}"
            >Contato</a>
        </li>
        <li class="pl-4">
            <a
                    title="{{ $page->siteName }} Sobre"
                    href="/about"
                    class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >Sobre</a>
        </li>
       <li class="pl-4">
            <a
                title="{{ $page->siteName }} Uses"
                href="/uses"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/uses') ? 'active text-blue' : '' }}"
            >Contato</a>
        </li>

    </ul>
</nav>
