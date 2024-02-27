<!DOCTYPE html>
<html class="screen-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProSuite</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap">
    <link rel="stylesheet" id="bs-base-fonts">
    <link rel="stylesheet" href="https://shuffle.dev/vendor/tailwind-artemis/css/tailwind.min.css" id="bs-base-css">
    <style type="text/css" id="bs-recompiled-css"></style>
    <style type="text/css" id="bs-custom-css"></style>

    <link href="https://shuffle.dev/static/build/css/shuffle-preview.d5a7e40d.css" rel="stylesheet" />

    <script src="https://shuffle.dev/vendor/tailwind-artemis/js/main.js"></script>
</head>

<body id="page" class="antialiased font-body bg-body text-body">
    <div class="" id="content">

        <div data-section-id="1" data-share="" data-category="ta-menus" data-component-id="10070f9f_02_awz" data-container="1">
            <nav class="lg:hidden py-6 px-6 border-b">
                <div class="flex items-center justify-between">
                    <a class="text-2xl font-semibold" href="#" data-config-id="brand">
                        <h1>LOGO</h1>
                    </a>
                    <button class="navbar-burger flex items-center rounded focus:outline-none">
                        <svg class="text-white bg-indigo-500 hover:bg-indigo-600 block h-8 w-8 p-2 rounded" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" data-config-id="auto-svg-1-2">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </nav>
            <div class="hidden lg:block navbar-menu relative z-50">
                <div class="navbar-backdrop fixed lg:hidden inset-0 bg-gray-800 opacity-10"></div>
                <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-3/4 lg:w-80 sm:max-w-xs pt-6 pb-8 bg-white border-r overflow-y-auto">
                    <div class="flex w-full items-center px-6 pb-6 mb-6 lg:border-b border-blue-50">
                        <a class="text-xl font-semibold" href="#" data-config-id="brand">
                            <h1>LOGO</h1>
                        </a>
                    </div>
                    <div class="px-4 pb-6">
                        <ul class="mb-8 text-sm font-medium">
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-white bg-indigo-500 rounded" href="{{ route('risks.index') }}">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                                            <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link1">Dashboard</span>

                                </a>
                            </li>
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-2 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-bar-graph-fill" viewBox="0 0 16 16">
                                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-2 11.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5m-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link2">Risk Register</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link3">My Risks</span>

                                </a>
                            </li>
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-toggles" viewBox="0 0 16 16">
                                            <path d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5m2.45 0A3.5 3.5 0 0 1 8 3.5 3.5 3.5 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link4">Controls</span>

                                </a>
                            </li>
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-check-fill" viewBox="0 0 16 16">
                                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1.146 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link5">Assessments</span>

                                </a>
                            </li>
                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
                                            <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z" />
                                            <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z" />
                                        </svg> </span>
                                    <span data-config-id="link6">Report</span>

                                </a>
                            </li>


                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link6">Messages</span>

                                </a>
                            </li>

                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-earmark-break-fill" viewBox="0 0 16 16">
                                            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1z" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link6">Audit Trail</span>

                                </a>
                            </li>


                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link6">Settings</span>

                                </a>
                            </li>

                            <li>
                                <a class="flex items-center pl-3 py-3 pr-4 text-gray-500 hover:bg-indigo-50 rounded" href="#">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                        </svg>
                                    </span>
                                    <span data-config-id="link6">Help and Resources</span>

                                </a>
                            </li>
                        </ul>





                    </div>
                </nav>
            </div>
            <div class="mx-auto lg:ml-80" data-bucket="1">
                <section data-section-id="2" data-share="" data-category="ta-headers" data-component-id="52511d2d_01_awz" class="py-8 px-6">
                    <div class="flex flex-wrap -mx-3 items-center">
                        <div class="w-full lg:w-1/2 flex items-center mb-5 lg:mb-0 px-3">



                            <div>

                             <a style="font-weight: 600;" class="text-indigo-500" href="{{ route('risks.index') }}">Back</a>
                            </div>


                        </div>
                        <div class="w-full lg:w-auto ml-auto px-3">
                            <a class="inline-flex items-center py-2 px-3 mr-3 text-xs text-indigo-500 font-medium bg-white hover:bg-indigo-50 rounded" href="#">
                                <span class="inline-block mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                    </svg>
                                </span>
                                <span data-config-id="1-action1">LogOut</span>
                            </a>
                            <a class="inline-flex items-center py-2 px-3 mr-3 text-xs text-indigo-500 font-medium bg-white hover:bg-indigo-50 rounded" href="#">
                                <span class="inline-block mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                    </svg>
                                </span>
                            </a>
                            <a class="inline-flex items-center py-2 px-3 text-xs text-white font-medium bg-indigo-500 hover:bg-indigo-600 rounded" href="#">
                                <span class="inline-block mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>




                    <div class="mt-8">
                        <div>

                            <br>

                        </div>










                        <div class="flex flex-wrap -mx-3 items-center">
                            <div class="w-full lg:w-1/2 flex items-center mb-5 lg:mb-0 px-3">



                                <div>

                                    <span>
                                        <h1 class="text-4xl font-semibold inline-flex">View A Risk</h1>

                                    </span>
                                </div>


                            </div>
                            <div class="w-full lg:w-auto ml-auto px-3">



                            </div>
                        </div>





                        @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">

                            <section class="bg-white dark:bg-gray-900">
                                <div class="p-4">
                                    <form method="post" action="{{ route('risks.update', $risk->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                            <div class="sm:col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text" readonly name="name" value="{{$risk->name}}" id="name" class="bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required="">
                                            </div>
                                            <div class="w-full">
                                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" readonly name="title" value="{{$risk->title}}" id="title" class="bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title" required="">
                                            </div>
                                            <div class="w-full">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="email" readonly name="email" value="{{$risk->email}}" id="email" class="bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required="">
                                            </div>

                                            <div>
                                                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                                <input type="text" readonly name="role" value="{{$risk->role}}" id="role" class="bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Role" required="">
                                            </div>

                                        </div>
                                        <a href="{{route('risks.edit', $risk->id)}}" type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-indigo-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-indigo-600">
                                            Edit Risk
</a>
                                    </form>
                                </div>
                            </section>

                        </div>


                    </div>

                </section>




            </div>
        </div>
    </div>

</body>

</html>