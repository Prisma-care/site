<div class="banner">
    <div class="text-center">
        <nav class="nav-primary d-flex justify-content-center">
            @if (has_nav_menu('bottom_navigation'))
                {!! wp_nav_menu(['theme_location' => 'bottom_navigation', 'menu_class' => 'nav justify-content-center']) !!}
            @endif
        </nav>
    </div>
</div>
