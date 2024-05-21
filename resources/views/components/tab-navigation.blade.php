@props(['tab1Title', 'tab2Title'])

<nav>
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" role="tablist">
        <!-- Student Portal Account -->
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="student-portal-account-tab"
                @click="activeTab = 'student-portal-account'" :class="{
                    'border-blue-600 text-blue-600': activeTab === 'student-portal-account',
                    'text-gray-600 hover:text-blue-600 hover:border-blue-600 border-transparent': activeTab !== 'student-portal-account'
                }" type="button" role="tab" aria-controls="student-portal-account" aria-selected="true">
                {{ $tab1Title }}
            </button>
        </li>
        <!-- End Student Portal Account -->
        <!-- PLM Email -->
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="plm-email-tab" @click="activeTab = 'plm-email'"
                :class="{
                    'border-blue-600 text-blue-600': activeTab === 'plm-email',
                    'text-gray-600 hover:text-blue-600 hover:border-blue-600 border-transparent': activeTab !== 'plm-email'
                }" type="button" role="tab" aria-controls="plm-email" aria-selected="false">
                {{ $tab2Title }}
            </button>
        </li>
        <!-- End PLM Email -->
    </ul>
</nav>