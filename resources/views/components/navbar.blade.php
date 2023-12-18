<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body class="bg-[#f7faffff]">

    <nav class="bg-[#ffffff] shadow-lg">
        <div class="mx-[15px] flex justify-between items-center">
            <a href="/">
                <img class="w-[150px]" src="https://web.sabbi.app/images/logo/SABBI2.png" alt="logo">
            </a>
            <ul class="flex space-x-[30px] items-center">
                <a href="#" class=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></a>
                <a href="#" class=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="18" viewBox="0 0 448 512"><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112v25.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V208c0-61.9 50.1-112 112-112zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg></a>
                <div class="flex items-center">
                    <img class="w-[120px] object-cover" src="https://landing.academic.lat/assets/image/a32bde.jpeg" alt="uni">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </div>
            </ul>
        </div>
    </nav>

    <div class="w-[250px] h-full bg-[#ffffff] fixed px-[10px] py-[7px]">
        <div class=" mb-[200px]">
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g><path d="M23.045 8.035 21 6.428V2h-1v3.641L13.545.567a2.494 2.494 0 0 0-3.09 0l-9.5 7.468A2.484 2.484 0 0 0 0 10v14h8v-9.5c0-.827.673-1.5 1.5-1.5h5c.827 0 1.5.673 1.5 1.5V24h8V10c0-.772-.348-1.489-.955-1.965ZM23 23h-6v-8.5c0-1.378-1.121-2.5-2.5-2.5h-5A2.503 2.503 0 0 0 7 14.5V23H1V10c0-.463.209-.893.572-1.179l9.5-7.468a1.498 1.498 0 0 1 1.855 0l9.5 7.468c.363.286.572.716.572 1.179v13Z" fill="#9196a1ff" opacity="1" data-original="#9196a1ff" class="hovered-path"></path></g></svg>
                    <h4 class="text-[13px] text-[#868b96ff] mx-[15px]">Tablero</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M6.349 11H3a1 1 0 0 0-1 1v3H0v-3a3 3 0 0 1 3-3h4.537a5.977 5.977 0 0 0-1.188 2ZM21 9h-4.537a5.977 5.977 0 0 1 1.188 2H21a1 1 0 0 1 1 1v3h2v-3a3 3 0 0 0-3-3Zm-5 4a4 4 0 1 0-4 4 4 4 0 0 0 4-4Zm-2 0a2 2 0 1 1-2-2 2 2 0 0 1 2 2Zm4 8a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v3h2v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3h2Zm4-17a4 4 0 1 0-4 4 4 4 0 0 0 4-4Zm-2 0a2 2 0 1 1-2-2 2 2 0 0 1 2 2ZM10 4a4 4 0 1 0-4 4 4 4 0 0 0 4-4ZM8 4a2 2 0 1 1-2-2 2 2 0 0 1 2 2Z" fill="#9196a1ff" opacity="1" data-original="#9196a1ff" class=""></path></g></svg>
                    <h4 class="text-[13px] text-[#868b96ff] mx-[15px]">Comunidad</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M17 0c-3.925 0-7 1.757-7 4v4.378A11.756 11.756 0 0 0 7 8c-3.925 0-7 1.757-7 4v8c0 2.243 3.075 4 7 4s7-1.757 7-4v-.385c.933.248 1.955.385 3 .385 3.925 0 7-1.757 7-4V4c0-2.243-3.075-4-7-4Zm0 1c3.252 0 6 1.374 6 3s-2.748 3-6 3-6-1.374-6-3 2.748-3 6-3ZM7 9c3.252 0 6 1.374 6 3s-2.748 3-6 3-6-1.374-6-3 2.748-3 6-3Zm-6 5.08C2.213 15.238 4.419 16 7 16s4.787-.762 6-1.92V16c0 1.626-2.748 3-6 3s-6-1.374-6-3v-1.92ZM7 23c-3.252 0-6-1.374-6-3v-1.92C2.213 19.238 4.419 20 7 20s4.787-.762 6-1.92V20c0 1.626-2.748 3-6 3Zm10-4c-1.057 0-2.086-.149-3-.422v-2.962c.932.248 1.953.383 3 .383 2.581 0 4.787-.762 6-1.92v1.92c0 1.626-2.748 3-6 3Zm0-4c-1.061 0-2.086-.151-3-.424V12c0-.133-.012-.264-.034-.393.938.254 1.963.393 3.034.393 2.581 0 4.787-.762 6-1.92V12c0 1.626-2.748 3-6 3Zm0-4c-1.309 0-2.538-.22-3.586-.624C12.896 9.693 12.058 9.115 11 8.7V6.081c1.213 1.158 3.419 1.92 6 1.92s4.787-.762 6-1.92v1.92c0 1.626-2.748 3-6 3Z" fill="#9196a1ff" opacity="1" data-original="#9196a1ff" class=""></path></g></svg>
                    <h4 class="text-[13px] text-[#868b96ff] mx-[15px]">Cobranza</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M24 16v5a3 3 0 0 1-3 3h-5a8 8 0 0 1-6.92-4 10.968 10.968 0 0 0 2.242-.248A5.988 5.988 0 0 0 16 22h5a1 1 0 0 0 1-1v-5a5.988 5.988 0 0 0-2.252-4.678A10.968 10.968 0 0 0 20 9.08 8 8 0 0 1 24 16Zm-6.023-6.349A9 9 0 0 0 8.349.023 9.418 9.418 0 0 0 0 9.294v5.04C0 16.866 1.507 18 3 18h5.7a9.419 9.419 0 0 0 9.277-8.349Zm-4.027-5.6a7.018 7.018 0 0 1 2.032 5.46A7.364 7.364 0 0 1 8.7 16H3c-.928 0-1-1.275-1-1.666v-5.04a7.362 7.362 0 0 1 6.49-7.276Q8.739 2 8.988 2a7.012 7.012 0 0 1 4.962 2.051Z" fill="#9196a1ff" opacity="1" data-original="#9196a1ff" class=""></path></g></svg>
                    <h4 class="text-[13px] text-[#868b96ff] mx-[15px]">Comunicacion</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M9 16v-2.5c0-1.378 1.121-2.5 2.5-2.5h5c1.379 0 2.5 1.122 2.5 2.5V16h-1v-2.5c0-.827-.673-1.5-1.5-1.5h-5c-.827 0-1.5.673-1.5 1.5V16H9Zm2-9c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3Zm1 0c0 1.103.897 2 2 2s2-.897 2-2-.897-2-2-2-2 .897-2 2Zm10-5.5V24H4.5A2.503 2.503 0 0 1 2 21.5v-19C2 1.122 3.121 0 4.5 0h16c.827 0 1.5.673 1.5 1.5ZM20.5 1H7v18h14V1.5a.5.5 0 0 0-.5-.5ZM3 2.5v17.001A2.485 2.485 0 0 1 4.5 19H6V1H4.5C3.673 1 3 1.673 3 2.5ZM21 23v-3H4.5c-.827 0-1.5.673-1.5 1.5S3.673 23 4.5 23H21Z" fill="#9196a1ff" opacity="1" data-original="#9196a1ff" class=""></path></g></svg>
                    <h4 class="text-[13px] text-[#868b96ff] mx-[15px]">Calificaciones</h4>
                </div>
            </a>
        </div>
        <div class="py-[7px] grid content-end">
            <div>
                <div class="flex justify-between">
                    <p class="text-[13px] text-[#9196a1ff]">Mis planteles</p>
                    <a href="#">
                        <i class="fi fi-sr-plus hover:bg-[#f0f1f2] hover:p-1 hover:rounded-full" style="color: #2a4ebb"></i>
                    </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                   <div class="flex">
                        <p class="bg-[#f5405eff] w-[20px] h-[20px] rounded-[5px]"></p>
                        <p class="text-[13px] text-[#9196a1ff] mx-[15px]">La asuncion</p>
                   </div>
                   <a href="#">
                        <i class="fi fi-rr-angle-small-right"></i>
                   </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                    <div class="flex">
                        <p class="bg-[#14b8a5ff] w-[20px] h-[20px] rounded-[5px]"></p>
                        <p class="text-[13px] text-[#9196a1ff] mx-[15px]"> Ciudad de Mexico</p>
                    </div>
                    <a href="#">
                        <i class="fi fi-rr-angle-small-right"></i>
                    </a>
                </div>
            </div>
            <div class="top-0">
                <div class="flex justify-between">
                    <p class="text-[13px] text-[#9196a1ff]">Mis ofertas</p>
                    <a href="#">
                        <i class="fi fi-sr-plus hover:bg-[#f0f1f2] hover:p-1 hover:rounded-full" style="color: #2a4ebb"></i>
                    </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                    <div class="flex">
                        <img class="w-[25px] h-[25px] rounded-full" src="https://www.humanium.org/es/wp-content/uploads/2020/03/shutterstock_1352177318-1536x1024.jpg" alt="primaria">
                        <p class="text-[13px] text-[#9196a1ff] mx-[15px]">Primaria</p>
                    </div>
                    <a href="">
                        <i class="fi fi-rr-angle-small-right"></i>
                    </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                    <div class="flex">
                        <img class="w-[20px] h-[20px]" src="https://www.pngkey.com/png/full/115-1150152_default-profile-picture-avatar-png-green.png" alt="perfil">
                        <p class="text-[13px] text-[#9196a1ff] mx-[15px]">Licenciatura en Diseño Grafico Digital</p>
                    </div>
                    <a href="#">
                        <i class="fi fi-rr-angle-small-right"></i>
                    </a>
                </div>
            </div>
            <div class="flex px-[10px] py-[7px] justify-between">
                <div class="flex">
                        <img class="w-[25px] h-[30px] rounded-full" src="https://tse3.mm.bing.net/th?id=OIP.x52_SjxdK-sG4Ed5ZjL3QQHaJQ&pid=Api&P=0&h=180" alt="">
                    <div class="mx-[15px]">
                        <p class="text-[13px] text-[#9196a1ff]">Fito</p>
                        <p class="text-[13px] text-[#9196a1ff]">Administrador</p>
                    </div>
                </div>
                <a href="">
                    <i class="fi fi-rr-angle-small-right"></i>
                </a>
            </div>
        </div>
    </div>
