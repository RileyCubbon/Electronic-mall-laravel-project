<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admins';

    /**
     * Create a new controller instance.
     */
    public function __construct ()
    {
        $this->middleware('guest:admins.index,manager')->except('logout');
    }

    public function showLoginForm ()
    {
        return view('admin.index.login');
    }

    /**
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard|mixed
     */
    public function guard ()
    {
        return Auth::guard('manager');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }
        /**
         * 如果用户名和密码通过认证后，判断用户是否通过审核状态，如果没有通过
         * 增加减少一次登陆次数，前面到通过用户名和密码认证后会自动将登陆状态
         * 保存到session中，所有需要退出登陆，然后重定向到后台登陆页面
         */
        if ($this->attemptLogin($request)) {
            if (!$this->validationLoginAuthorities($request)) {
                $this->incrementLoginAttempts($request);
                $this->logout($request);
                return redirect()->route('admins.login.show')->withErrors(['name'=>'请联系管理员分配权限']);
            }
            /**
             * 用户名、密码、审核状态全部都通过后记住登陆状态，并跳转后台首页
             */
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function username (  )
    {
        return 'name';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'captcha' => 'required|captcha',
        ]);
    }

    /**
     * 验证数据与数据库匹配情况
     * @param Request $request
     *
     * @return bool
     */
    protected function validationLoginAuthorities ( Request $request )
    {
        return $this->guard()->attempt($this->validationCredentials($request));
    }

    /**
     * 获得需要验证到字段，auth到认证登陆必须需要password字段
     * 所有同时需要取得password字段放到数组中
     *
     * @param Request $request
     *
     * @return array
     */
    protected function validationCredentials ( Request $request )
    {
        return array_merge([
            'is_delete' => Manager::UN_DELETE,
            'is_verify' => Manager::IS_VERIFY,
        ],$request->only('password'));
    }
}
