<x-app-layout>
    <!-- Header -->
    <?php $headerTitle = "Credential Generation"; ?>
    <x-header :title="$headerTitle" />
    <!-- Tab -->
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <!-- Student Portal Account -->
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="student-portal-account-tab"
                    data-tabs-target="#student-portal-account" type="button" role="tab"
                    aria-controls="student-portal-account" aria-selected="false">Student Portal Account</button>
            </li>
            <!-- PLM Email -->
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="plm-email-tab" data-tabs-target="#plm-email" type="button" role="tab" aria-controls="plm-email"
                    aria-selected="false">PLM Email</button>
            </li>
        </ul>
    </div>
    <!-- End Tab -->
    <!-- Tab Contents -->
    <div id="default-tab-content">
        <!-- Student Portal Account -->
        <div class="hidden p-4 rounded-lg" id="student-portal-account" role="tabpanel"
            aria-labelledby="student-portal-account-tab">
            <!-- Buttons Container -->
            <div class="flex items-center justify-between mb-4">
                <!-- "Email all" Button -->
                <?php $studentCount = "1000"; ?>
                <x-email-all-button :studentCount="$studentCount" />
                <!-- "Edit email template" Button -->
                <x-edit-email-template-button id="sp-account" />
                <x-edit-email-template-modal id="sp-account" />
                <script>
                document.querySelectorAll('[data-modal-toggle]').forEach((toggle) => {
                    toggle.addEventListener('click', () => {
                        const target = toggle.getAttribute('data-modal-toggle');
                        document.getElementById(target).classList.toggle('hidden');
                    });
                });
                </script>
            </div>
            <!-- End Buttons Container -->
            <!-- Pending Credentials Table -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                STUDENT NUMBER
                            </th>
                            <th scope="col" class="px-6 py-3">
                                STUDENT NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PLM EMAIL ADDRESS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                STATUS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                2020-01234
                            </th>
                            <td class="px-6 py-4">
                                Pacatang, Dana Justine D.
                            </td>
                            <td class="px-6 py-4">
                                djdpacatang2020@plm.edu.ph
                            </td>
                            <td class="px-6 py-4">
                                Pending
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Pending Credentials Table -->
        </div>
        <!-- End Student Portal Account -->
        <!-- PLM Email -->
        <div class="hidden p-4 rounded-lg" id="plm-email" role="tabpanel" aria-labelledby="plm-email-tab">
            <!-- Buttons Container -->
            <div class="flex items-center justify-between mb-4">
                <!-- "Email all" Button -->
                <?php $studentCount = "1000"; ?>
                <x-email-all-button :studentCount="$studentCount" />
                <!-- "Edit email template" Button -->
                <button data-modal-target="edit-email-template-modal-plm-email"
                    data-modal-toggle="edit-email-template-modal-plm-email" type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg text-xs px-2 py-1 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 
                dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 0 1-.517.608 7.45 7.45 0 0 0-.478.198.798.798 0 0 
                        1-.796-.064l-.453-.324a1.875 1.875 0 0 0-2.416.2l-.243.243a1.875 1.875 0 0 0-.2 2.416l.324.453a.798.798 0 0 1 .064.796 7.448 7.448 0 0 
                        0-.198.478.798.798 0 0 1-.608.517l-.55.092a1.875 1.875 0 0 0-1.566 1.849v.344c0 .916.663 1.699 1.567 
                        1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 0 1-.064.796l-.324.453a1.875 1.875 0 0 0 .2 
                        2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 0 1 
                        .796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 
                        1.85-1.567l.091-.549a.798.798 0 0 1 .517-.608 7.52 7.52 0 0 0 .478-.198.798.798 0 0 1 .796.064l.453.324a1.875 1.875 0 0 0 
                        2.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 0 
                        1-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 0 0 
                        1.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 0 1-.608-.517 7.507 7.507 0 0 0-.198-.478.798.798 0 0 1 
                        .064-.796l.324-.453a1.875 1.875 0 0 0-.2-2.416l-.243-.243a1.875 1.875 0 0 0-2.416-.2l-.453.324a.798.798 0 0 1-.796.064 7.462 7.462 0 0 
                        0-.478-.198.798.798 0 0 1-.517-.608l-.091-.55a1.875 1.875 0 0 0-1.85-1.566h-.344ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">Edit email template</span>
                </button>
                <!-- End "Edit email template" Button -->
                <!-- Email Template Modal -->
                <div id="edit-email-template-modal-plm-email" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
            justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] 
                max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Email Template Modal Content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Email Template Modal Header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    PLM Email Credentials Email Template
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 
                            ms-auto inline-flex 
                                justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Email Template End Modal Header -->
                            <!-- Email Template Modal Body -->
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <textarea id="description" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
                                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write text here..."></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                dark:focus:ring-blue-800">
                                    Save
                                </button>
                            </form>
                            <!-- End Email Template Modal Body -->
                        </div>
                        <!-- End Email Template Modal Content -->
                    </div>
                </div>
                <!-- End Email Template Modal -->
            </div>
            <!-- End Buttons Container -->
            <!-- Pending Credentials Table -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                STUDENT NUMBER
                            </th>
                            <th scope="col" class="px-6 py-3">
                                LAST NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                GIVEN NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                MIDDLE NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ENROLLMENT DATE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                STATUS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                2020-01234
                            </th>
                            <td class="px-6 py-4">
                                Pacatang
                            </td>
                            <td class="px-6 py-4">
                                Dana Justine
                            </td>
                            <td class="px-6 py-4">
                                Decena
                            </td>
                            <td class="px-6 py-4">
                                2020
                            </td>
                            <td class="px-6 py-4">
                                Pending
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Pending Credentials Table -->
        </div>
        <!-- End PLM Email -->
    </div>
    <!-- End Tab Contents -->
</x-app-layout>