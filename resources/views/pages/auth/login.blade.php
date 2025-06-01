<x-layouts.auth title="Login">

    <div class="text-center">
        <a href="#"><img src="../assets/images/logo-dark.svg" alt="img" class="mx-auto"></a>
        <div class="grid my-4">
            <button type="button"
                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500">
                <img src="../assets/images/authentication/facebook.svg" alt="img"> <span>Sign In with Facebook</span>
            </button>
            <button type="button"
                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500">
                <img src="../assets/images/authentication/twitter.svg" alt="img"> <span>Sign In with Twitter</span>
            </button>
            <button type="button"
                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500">
                <img src="../assets/images/authentication/google.svg" alt="img"> <span>Sign In with Google</span>
            </button>
        </div>
    </div>
    <div class="relative my-5">
        <div aria-hidden="true" class="absolute flex inset-0 items-center">
            <div class="w-full border-t border-theme-border dark:border-themedark-border"></div>
        </div>
        <div class="relative flex justify-center">
            <span class="px-4 bg-theme-cardbg dark:bg-themedark-cardbg">OR</span>
        </div>
    </div>
    <h4 class="text-center font-medium mb-4">Login with your email</h4>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="mb-3">
            {{--        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">--}}
            <x-forms.input type="email" name="email" class="form-control"
                           placeholder="{{ __('Email') }}"/>
        </div>
        <div class="mb-4">
            <x-forms.input label="Password" type="password" name="password" class="form-control"
                           placeholder="{{ __('Password') }}"/>
        </div>
        <div class="flex mt-1 justify-between items-center flex-wrap">
            <x-forms.checkbox label="Remember me" name="remember"/>
            <h6 class="font-normal text-primary-500 mb-0"><a href="forgot-password-v1.html">Forgot Password?</a></h6>
        </div>
        <div class="mt-4">
            <x-elements.buttons.general type="submit" class=" btn-primary w-full">Login fgfgf
            </x-elements.buttons.general>
        </div>
    </form>
    <div class="flex justify-between items-end flex-wrap mt-4">
        <h6 class="f-w-500 mb-0">Don't have an Account?</h6><a href="register-v1.html" class="text-primary-500">Create
            Account</a>
    </div>
</x-layouts.auth>
