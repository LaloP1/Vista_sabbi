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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    <style>
        /* Otros estilos que puedas tener */
    .blurred {
        filter: blur(5px); /* Ajusta el valor según la cantidad de desenfoque que deseas */
    }

    </style>
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
    <div class="menu-container w-[50px] hover:w-[300px] h-[92%] bg-[#ffffff] fixed px-[9px] py-[7px] text-[#868b96ff] overflow-hidden grid content-between" style="transition: width 0.3s ease;">
        <div class="">
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2] ">
                    <i class="fi fi-ts-house-chimney "></i>
                    <h4 class="text-[13px] mx-[15px] ">Tablero</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2] ">
                    <i class="fi fi-rs-users-alt"></i>
                    <h4 class="text-[13px]  mx-[15px]">Comunidad</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <i class="fi fi-ts-coins"></i>
                    <h4 class="text-[13px]  mx-[15px]">Cobranza</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2] ">
                    <i class="fi fi-ts-comments"></i>
                    <h4 class="text-[13px]  mx-[15px]">Comunicacion</h4>
                </div>
            </a>
            <a href="#">
                <div class="flex px-[10px] py-[7px] hover:bg-[#f0f1f2]">
                    <i class="fi fi-tr-book-user"></i>
                    <h4 class="text-[13px]  mx-[15px]">Calificaciones</h4>
                </div>
            </a>
        </div>

        <div class="py-[7px] font-normal text-[13px] text-[#868b96ff] ">
            <div class="items-center">
                <div class="flex justify-between misPlantelesContainer">
                    <p>Mis planteles</p>
                    <button href="#">
                        <i class="fi fi-sr-plus hover:bg-[#f0f1f2] hover:p-1 hover:rounded-full" style="color: #2a4ebb"></i>
                    </button>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                   <div class="flex">
                        <p class="bg-[#f5405eff] w-[20px] h-[20px] rounded-[5px]"></p>
                        <p class=" mx-[15px] misPlantelesContainer misPlantelesContainer">La asuncion</p>
                   </div>
                   <a href="#">
                        <i class="fi fi-rr-angle-small-right misPlantelesContainer"></i>
                   </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2]">
                    <div class="flex">
                        <p class="bg-[#14b8a5ff] w-[20px] h-[20px] rounded-[5px]"></p>
                        <p class="mx-[15px] misPlantelesContainer">Ciudad de Mexico</p>
                    </div>
                    <a href="#">
                        <i class="fi fi-rr-angle-small-right misPlantelesContainer"></i>
                    </a>
                </div>
            </div>
            <div class="items-center ">
                <div class="w-auto flex justify-between misPlantelesContainer" >
                    <p>Mis ofertas</p>
                    <a href="#">
                        <i class="fi fi-sr-plus hover:bg-[#f0f1f2] hover:p-1 hover:rounded-full" style="color: #2a4ebb"></i>
                    </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2] ">
                    <div class="flex">
                        <p class="w-[25px]"><img class="h-[22px] rounded-full" src="https://www.humanium.org/es/wp-content/uploads/2020/03/shutterstock_1352177318-1536x1024.jpg" alt="primaria"></p>
                        <p class="mx-[15px] ">Primaria</p>
                    </div>
                    <a href="">
                        <i class="fi fi-rr-angle-small-right misPlantelesContainer"></i>
                    </a>
                </div>
                <div class="flex px-[10px] py-[7px] justify-between hover:bg-[#f0f1f2] border-r-4 border-r-[#2a4ebb]">
                    <div class="flex ">
                        <p class="w-[20px]"><img class="h-[20px] rounded-full" src="https://www.pngkey.com/png/full/115-1150152_default-profile-picture-avatar-png-green.png" alt="perfil"></p>
                        <p class="mx-[15px] misPlantelesContainer">Licenciatura en Diseño Grafico Digital</p>
                    </div>
                    <a href="#">
                        <i class="fi fi-rr-angle-small-right misPlantelesContainer"></i>
                    </a>
                </div>
            </div>
            <div class="mt-[15px] border-t border-gray-400 w-full"></div>
            <div class="items-center">
                <div class="flex px-[10px] py-[7px] justify-between">
                    <div class="flex">
                            <img class="w-[25px] h-[30px] rounded-full" src="https://tse3.mm.bing.net/th?id=OIP.x52_SjxdK-sG4Ed5ZjL3QQHaJQ&pid=Api&P=0&h=180" alt="">
                        <div class="mx-[15px] ">
                            <p>Fito</p>
                            <p>Administrador</p>
                        </div>
                    </div>
                    <a href="">
                        <i class="fi fi-rr-angle-small-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

