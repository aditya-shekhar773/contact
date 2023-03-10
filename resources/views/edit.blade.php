<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class='w-full flex bg-slate-100  h-screen'>
        <div class='w-1/5'>
            <div class='w-10/12 flex justify-between items-center p-2'>
                <div class='hover:bg-slate-230 px-3 py-3 rounded-full'>
                    <svg xmlns="http://www.w3.org/2300/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                </div>
                <div class=''>
                    <a href="{{route('student.show')}}"><img class="gb_Fc gb_ce" src="https://www.gstatic.com/images/branding/product/1x/contacts_2022_48dp.png" srcset="https://www.gstatic.com/images/branding/product/1x/contacts_2022_48dp.png 1x, https://www.gstatic.com/images/branding/product/2x/contacts_2022_48dp.png 2x " alt="" aria-hidden="true" role="presentation" style="width:40px;height:40px" data-atf="true"></a>
                </div>
                <div>
                    <a href="{{route('student.show')}}" class='text-2xl  text-slate-500 font-sans'>Contacts</a>
                </div>
            </div>
            <div class='w-full flex p-3 -mt-2'>
                <div class='flex text-center px-4 py-2 p-2 bg-white shadow-xl gap-2 rounded-3xl'> 
                    <svg xmlns="http://www.w3.org/2300/svg" class='w-8 h-8 -ml-3' fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <h1 class='text-center text-base mt-1 font-medium'>Create contact</h1>
                </div>
            </div>
            <div>
                <ul class='mt-3'>
                    <li class='flex w-full bg-slate-300 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 9c2.7 0 5.8 1.29 6 2v1H6v-.99c.2-.72 3.3-2.01 6-2.01m0-11C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path></svg>
                        <p class='ml-5 text-sm font-medium text-blue-00'>Contacts</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M13 3c-4.97 0-9 4.03-9 9H1l4 3.99L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.23 2.52.77-1.28-3.52-2.09V8z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Frequently contacted</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M19 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 23.17l-1.59-1.59-.58-.58H5V4h14v14zm-7-1l1.88-4.12L18 11l-4.12-1.88L12 5l-1.88 4.12L6 11l4.12 1.88z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Merge & fix</P>
                    </li>
                </ul>
            </div>
            <div class='w-full border border-slate-300'></div>
            <div>
                <ul class='mt-1'>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Labels</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Create label</p>
                    </li>
                </ul>
            </div>
            <div class='w-full border border-slate-300 mt-1'></div>
            <div>
                <ul class='mt-1'>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.41-7.59L11 7.83V16h2V7.83l2.59 2.59L17 9l-5-5-5 5 1.41 1.41z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Contacts</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Frequently contacted</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-4h8v4zm0-11H8V5h8v3zm2 4.5c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Merge & fix</P>
                    </li>
                </ul>
            </div>
            <div class='w-full border border-slate-300 mt-1'></div>
            <div>
                <ul class='mt-1'>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M23.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM5 19V8h14v11H5zm8.45-9h-2.9v3H8l4 4 4-4h-2.55z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Labels</p>
                    </li>
                    <li class='flex w-full hover:bg-slate-200 py-2 rounded-tr-2xl rounded-br-2xl'><svg class='ml-8' width="23" height="23" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path d="M15 4V3H9v1H4v2h1v13c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6h1V4h-5zm2 15H7V6h10v13z"></path><path d="M9 8h2v9H9zm4 0h2v9h-2z"></path></svg>
                        <p class='ml-5 text-sm font-medium'>Create label</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class='w-4/5 sticky top-0'>
            <div class='w-full flex mt-2'>
                <div class='w-8/12 flex bg-white shadow-xl rounded-tr-2xl rounded-tl-2xl ml-4 p-2'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-5 mt-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input type='text' value='Search' class='ml-6 border-none py-1 w-full '/>
                </div>
                <div class='4/12'>
                    <div class='ml-32'>
                        <ul class='flex space-x-6 mt-2'>
                            <li class='mt-1'><svg width="20" height="20" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe null"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"></path></svg></li>
                            <li class='mt-1'><svg width="20" height="20" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe null"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z"></path><circle cx="12" cy="12" r="3.5"></circle></svg></li>
                            <li class='mt-1'><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
                                </svg>
                            </li>
                            <li class='ml-10'><img class="gb_h gbii rounded-full" src="https://lh3.googleusercontent.com/ogw/AAEL6shkA6LZJmVcmLhF5QAn_1PtQPRTxCi2kptMiHRWMQ=s32-c-mo" srcset="https://lh3.googleusercontent.com/ogw/AAEL6shkA6LZJmVcmLhF5QAn_1PtQPRTxCi2kptMiHRWMQ=s32-c-mo 1x, https://lh3.googleusercontent.com/ogw/AAEL6shkA6LZJmVcmLhF5QAn_1PtQPRTxCi2kptMiHRWMQ=s64-c-mo 2x " alt="" aria-hidden="true" data-noaft=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=''>
                <div class='border-b border-slate-300 ml-5'>
                    <div class='flex p-4'>
                        <div class='px-16 py-16 bg-slate-300 rounded-full ml-10'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>
                        </div>
                        <div class='px-2 py-2 ml-10 mt-16'>
                            <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>
                        </div>
                        <div class='ml-96 mt-36'>
                            <a class='bg-slate-300 px-4 py-2 rounded-md text-sm font-semibold'>SAVE</a>
                        </div>
                    </div>
                </div>    
            </div>
            <div class='ml-20 mt-2'>
                <form action="{{route('student.create')}}" method='post'>
                    @csrf
                    <div class='flex'>
                        <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined mt-4"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 9c2.7 0 5.8 1.29 6 2v1H6v-.99c.2-.72 3.3-2.01 6-2.01m0-11C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path></svg>
                        <input type='text' name='name' placeholder='Enter your name' class='w-96 py-2 border-b border-slate-400 bg-slate-100 ml-10'/>
                    </div>
                    <div class='flex'>
                        <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined mt-4"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"></path></svg>
                        <input type='text' name='email' placeholder='Enter your email' class='w-96 py-2 border-b border-slate-400 bg-slate-100 ml-10'/>
                    </div>
                    <div class='flex'>
                        <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined mt-4"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"></path></svg>
                        <input type='number' name='contact' placeholder='Enter phone number' class='w-96 py-2 border-b border-slate-400 bg-slate-100 ml-10'/>
                    </div>
                    <div class='flex'>
                        <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined mt-4"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"></path></svg>
                        <input type='text' name='company' placeholder='Enter company name' class='w-96 py-2 border-b border-slate-400 bg-slate-100 ml-10'/>
                    </div>
                    <div class='flex'>
                        <svg width="25" height="25" viewBox="0 0 24 24" class="NSy2Hd cdByRd RTiFqe undefined mt-4"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 14v-4c0-1.1-.9-2-2-2h-4V6.55c.15-.09.29-.18.41-.31.39-.39.59-.92.59-1.42s-.2-1.02-.59-1.41L12 2l-1.41 1.41c-.39.39-.59.91-.59 1.41s.2 1.03.59 1.42c.13.13.27.22.41.31V8H7c-1.1 0-2 .9-2 2v4c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 10h10v4H7v-4zm12 10H5v-4h14v4z"></path></svg>
                        <input type='date' name='dob' placeholder='Bithday date' class='w-96 py-2 border-b border-slate-400 bg-slate-100 ml-10'/>
                    </div>
                    <div class='w-full p-2 -mt-2'>
                        <input type='Submit' name='Submit' class='px-4 mt-3 ml-44 py-2 bg-teal-500 font-semibold hover:bg-teal-600 rounded-md text-sm'/>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>