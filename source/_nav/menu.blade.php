<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Cursos" href="/courses"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/courses') ? 'active text-blue-600' : '' }}">
        Cursos
    </a>

    <a title="{{ $page->siteName }} Sobre" href="/about"
       class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        Sobre
    </a>

    <a title="{{ $page->siteName }} Uses" href="/uses"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/uses') ? 'active text-blue-600' : '' }}">
        Uses
    </a>


</nav>
