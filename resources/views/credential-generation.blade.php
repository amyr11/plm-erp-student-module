<x-app-layout>
    <!-- Header -->
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
        </svg>
        <h2 class="ml-2 font-medium text-gray-600">Credential Generation</h2>
    </div>
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
    <!-- Tab Contents -->
    <div id="default-tab-content">
        <!-- Student Portal Account -->
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="student-portal-account" role="tabpanel"
            aria-labelledby="student-portal-account-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Student Portal Account tab's associated
                    content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
        <!-- PLM Email -->
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="plm-email" role="tabpanel"
            aria-labelledby="plm-email-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">PLM Email tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
    </div>
</x-app-layout>