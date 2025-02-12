@php
    $url = $_SERVER['REQUEST_URI'];
    $url = strtok($url, '?'); // إزالة أي query parameters
    $pathSegments = explode('/', trim($url, '/'));

    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';

    // إضافة الرابط إلى الصفحة الرئيسية
    if (!empty($pathSegments) && $pathSegments[0] != '') {
        echo '<li class="breadcrumb-item"><a href="' . url('/') . '">الرئيسية</a></li>';
    }

    $currentPath = '';

    foreach ($pathSegments as $key => $segment) {
        if ($segment == 'home' || $segment == 'dashboard') {
            continue;
        }

        if (!is_numeric($segment)) {
            $currentPath .= '/' . $segment;

            // إذا كان آخر عنصر، لا نضع رابطًا
            if ($key == count($pathSegments) - 1) {
                echo '<li class="breadcrumb-item active" aria-current="page">' . ucfirst(__($segment)) . '</li>';
            } else {
                echo '<li class="breadcrumb-item"><a href="' .
                    url($currentPath) .
                    '">' .
                    ucfirst(__($segment)) .
                    '</a></li>';
            }
        }
    }

    echo '</ol>';
    echo '</nav>';
@endphp
