<?php

namespace App\Http\Controllers\Frontend\Base;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected function _inValid($errors)
    {
        $data = $this->getFormData();
        session([getConfig('key_form_data_old') => $data]);
        return redirect()->back()->withErrors($errors);
    }

    public function afterStoreUpdateCommit()
    {
        if (session('entity')) {
            session()->forget('entity');
        }

        if (session(getConfig('key_form_data_old'))) {
            session()->forget(getConfig('key_form_data_old'));
        }
    }
}