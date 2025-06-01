<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }} - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body class="">


<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
    <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0 bg-primary-500/10">
        <div
                class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 transition-[transform_0.2s_linear] origin-left animate-[2.1s_cubic-bezier(0.65,0.815,0.735,0.395)_0s_infinite_normal_none_running_loader-animate]"></div>
    </div>
</div>

<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <main class="auth-main relative">
        <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
            <div class="auth-form flex items-center justify-center grow flex-col min-h-screen bg-cover relative p-6 bg-[url('../images/authentication/img-auth-bg.html')] dark:bg-none dark:bg-themedark-bodybg">
                <div class="card sm:my-12 w-full max-w-[480px] shadow-none">
                    <div class="card-body !p-10">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
{{--<script src="../assets/js/plugins/simplebar.min.js"></script>--}}
{{--<script src="../assets/js/plugins/popper.min.js"></script>--}}
{{--<script src="../assets/js/plugins/i18next.min.js"></script>--}}
{{--<script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>--}}
{{--<script src="../assets/js/icon/custom-font.js"></script>--}}
{{--<script src="../assets/js/plugins/feather.min.js"></script>--}}
{{--<script src="../assets/js/component.js"></script>--}}
{{--<script src="../assets/js/theme.js"></script>--}}
{{--<script src="../assets/js/multi-lang.js"></script>--}}
<script src="../assets/js/script.js"></script>
</body>
</html>

