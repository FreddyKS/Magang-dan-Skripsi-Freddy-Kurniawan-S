<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<style type="text/css">
            html, body{
                height: 0;
                padding: 0; /* remove any pre-existing padding, just in case */
                padding-bottom: 79%;
                background-image : url('/../../storage/Images/Background_Web_Images.png');
                background-position: center center;
                background-size: 100%;
                background-repeat: no-repeat;
            }
            .Logo{
		        transition: transform .5s ease;
	        }
	        .Logo:hover{
		        transform: scale(1.1);
            }
            .Logo:Zooming:hover{
		        transform: scale(1.1);
            }
            .Zooming{
		        transition: font-size .3s ease;
                color: #636b6f;
                text-decoration : none;
	        }
	        .Zooming:hover{
		        color: #32CD32;
		        font-size: 14px;
	            font-weight: 600;
                transition : scale(1.1);
                text-decoration : none;
	        }
            .Zooming:active{
                color: #ADFF2F;
		        font-size: 14px;
	            font-weight: 600;
                transition : scale(1.1);
                text-decoration : none;
            }
            .th_Score {
                font-family: 'Nunito', sans-serif;
                font-size: .8em;
                font-weight: bold;
                background: #666;
                color: #FFF;
                padding: 2px 6px;
                border-collapse: separate;
                border: 1px solid #000;
            }
            .td_Score {
                font-family: 'Nunito', sans-serif;
                font-size: .8em;
                border: 1px solid #DDD;
            }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                   <!-- <?php echo e(config('app.name', 'Laravel')); ?> -->
                   <img class="Logo" src="/../../storage/Images/Logo.jpg" style="width:70px;height:70px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item Zooming">
                                <a class="Zooming" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item Zooming">
                                    <a class="Zooming" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="Zooming" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/layouts/app.blade.php ENDPATH**/ ?>