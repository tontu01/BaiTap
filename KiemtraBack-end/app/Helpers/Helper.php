<?php

// Auth
if (!function_exists('backendGuard')) {
    function backendGuard()
    {
        return Auth::guard('admins');
    }
}

if (!function_exists('backendCurrentUser')) {
    function backendCurrentUser()
    {
        return Auth::guard('admins')->user();
    }
}

if (!function_exists('frontendGuard')) {
    function frontendGuard()
    {
        return Auth::guard('users');
    }
}

if (!function_exists('frontendCurrentUser')) {
    function frontendCurrentUser()
    {
        return Auth::guard('users')->user();
    }
}

if (!function_exists('frontendCurrentUserId')) {
    function frontendCurrentUserId()
    {
        return frontendCurrentUser() ? frontendCurrentUser()->id : '';
    }
}

if (!function_exists('frontendIsLogin')) {
    /**
     * @return mixed
     */
    function frontendIsLogin()
    {
        return frontendGuard()->check();
    }
}

if (!function_exists('backendIsLogin')) {
    /**
     * @return mixed
     */
    function backendIsLogin()
    {
        return backendGuard()->check();
    }
}
// End auth

if (!function_exists('backendRouterName')) {
    /**
     * @param $routeName
     * @return mixed
     */
    function backendRouterName($routeName)
    {
        return 'backend.' . $routeName;
    }
}

if (!function_exists('backendRouter')) {
    /**
     * @param $routeName
     * @param array $params
     * @return mixed
     */
    function backendRouter($routeName, $params = [])
    {
        return route('backend.' . $routeName, $params);
    }
}

if (!function_exists('getConfig')) {
    function getConfig($key, $default = '')
    {
        return config('config.' . $key, $default);
    }
}

if (!function_exists('delFlagOn')) {
    function delFlagOn()
    {
        return getConfig('del_flag.active', 0);
    }
}

if (!function_exists('delFlagOff')) {
    function delFlagOff()
    {
        return getConfig('del_flag.disable', 1);
    }
}

if (!function_exists('getSTTBackend')) {

    function getSTTBackend($entities, $index)
    {
        return getBackendPagination() * ($entities->currentPage() - 1) + 1 + $index;
    }
}

if (!function_exists('getBackendPagination')) {
    function getBackendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.backend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('getFrontendPagination')) {
    function getFrontendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.frontend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('getInputOld')) {

    function getInputOld($old, $default = '')
    {
        return empty($old) ? $default : $old;
    }
}

if (!function_exists('transMessage')) {
    function transMessage($key, $default = '')
    {
        return empty(trans('messages.' . $key)) ? $default : trans('messages.' . $key);
    }
}

/* Redirect */
if (!function_exists('backSystemError')) {
    function backSystemError($msg = '')
    {
        $msg = empty($msg) ? transMessage('system_error') : $msg;
        return redirect()->back()->with('notification_error', $msg);
    }
}

if (!function_exists('backSystemSuccess')) {
    function backSystemSuccess($msg = '')
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->back()->with('notification_success', $msg);
    }
}

if (!function_exists('backSuccess')) {
    function backSuccess($msg = '')
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->back()->with('notification_success', $msg);
    }
}

if (!function_exists('backRouteSuccess')) {
    function backRouteSuccess($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_success', $msg);
    }
}

if (!function_exists('backRouteError')) {
    function backRouteError($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_error', $msg);
    }
}
/* End redirect */