<?php 

    session_start();

?>

<header class="header">
        <div class="header__container">
            <div class="header__logo logo">
                <a class="logo__link" href="/index.php">KK Shop</a>
            </div>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__list-item">
                        <a class="header__link" href="/index.php">Каталог товаров</a>
                    </li>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li class="header__list-item">
                            <a class="header__link" href="/src/scripts/php/profile.php#orders-block">История заказов</a>
                        </li>
                        <?php if ($_SESSION['user']['userType'] === 'seller') : ?>
                            <li class="header__list-item">
                                <a class="header__link" href="/src/scripts/php/defaultProduct.php">Добавить товар</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="header__menu">
                <ul class="header__menu-list">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li class="header__menu-item">
                            <a class="header__menu-link" href="/src/scripts/php/profile.php#orders-block">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.26 3.00001C8.17003 2.86001 4.00003 6.95001 4.00003 12H2.21003C1.76003 12 1.54003 12.54 1.86003 12.85L4.65003 15.65C4.85003 15.85 5.16003 15.85 5.36003 15.65L8.15003 12.85C8.21913 12.7795 8.26582 12.6901 8.28421 12.5932C8.30261 12.4962 8.29187 12.3959 8.25338 12.305C8.21488 12.2141 8.15033 12.1366 8.06788 12.0824C7.98542 12.0281 7.88874 11.9994 7.79003 12H6.00003C6.00003 8.10001 9.18003 4.95001 13.1 5.00001C16.82 5.05001 19.95 8.18001 20 11.9C20.05 15.81 16.9 19 13 19C11.39 19 10.6734 18.86 9.49338 17.93C9.30184 17.7791 9.06152 17.7039 8.81814 17.7186C8.57476 17.7334 8.34529 17.8371 8.17338 18.01C7.75338 18.43 7.78338 19.14 8.25338 19.5C9.8245 20.7425 10.997 21.0058 13 21C18.05 21 22.14 16.83 22 11.74C21.87 7.05001 17.95 3.13001 13.26 3.00001ZM12.75 8.00001C12.34 8.00001 12 8.34001 12 8.75001V12.43C12 12.78 12.19 13.11 12.49 13.29L15.61 15.14C15.97 15.35 16.43 15.23 16.64 14.88C16.85 14.52 16.73 14.06 16.38 13.85L13.5 12.14V8.74001C13.5 8.34001 13.16 8.00001 12.75 8.00001Z"
                                    fill="black" fill-opacity="0.8" />
                                </svg>
                            </a>
                        </li>
                        <li class="header__menu-item">
                            <a class="header__menu-link" href="/src/scripts/php/cart.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.99996 7V6C9.99996 4.89543 10.8954 4 12 4C13.1045 4 14 4.89543 14 6V7H9.99996ZM7.99996 7V6C7.99996 3.79086 9.79082 2 12 2C14.2091 2 16 3.79086 16 6V7H18.3308C18.849 7 19.2813 7.39576 19.3269 7.91187L20.373 19.7356C20.5282 21.49 19.1459 23 17.3847 23H6.61449C4.85328 23 3.47095 21.49 3.62616 19.7356L4.67224 7.91187C4.7179 7.39576 5.15022 7 5.66835 7H7.99996ZM16 9H14H9.99996H7.99996H6.58378L5.61838 19.9119C5.56664 20.4967 6.02742 21 6.61449 21H17.3847C17.9718 21 18.4325 20.4967 18.3808 19.9119L17.4154 9H16Z"
                                    fill="black" />
                                </svg>
                            </a>
                        </li>
                        <li class="header__menu-item">
                            <a class="header__menu-link" href="/src/scripts/php/profile.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.21106 21.8724C4.21106 23.3759 2 23.3759 2 21.8724C2 17.4503 4.74171 13.7357 8.54472 12.1437C7.12965 10.994 6.24523 9.22513 6.24523 7.2794C6.24523 3.83015 8.98693 1 12.5246 1C15.9739 1 18.7156 3.83015 18.7156 7.2794C18.7156 9.22513 17.8312 10.994 16.4161 12.1437C20.2191 13.7357 22.9608 17.4503 22.9608 21.8724C22.9608 23.3759 20.7498 23.3759 20.7498 21.8724C20.7498 17.3618 17.0352 13.6472 12.5246 13.6472C7.92563 13.6472 4.21106 17.3618 4.21106 21.8724ZM12.5246 3.21106C10.2251 3.21106 8.45628 5.06834 8.45628 7.2794C8.45628 9.49045 10.2251 11.2593 12.5246 11.2593C14.7357 11.2593 16.5045 9.49045 16.5045 7.2794C16.5045 5.06834 14.7357 3.21106 12.5246 3.21106Z"
                                    fill="black" fill-opacity="0.8" />
                                </svg>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="header__list-item">
                            <a class="header__link" href="login.php">Войти</a>
                        </li>
                        <li class="header__list-item">
                            <a class="header__link" href="register.php">Зарегистрироваться</a>
                        </li>
                    <?php endif; ?> 
                </ul>
            </div>
        </div>
    </header>