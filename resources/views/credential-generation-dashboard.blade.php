<x-app-layout>
    <!-- Header -->
    <x-header title="Credential Generation" />
    <div x-data="{ activeTab: 'student-portal-account' }">
        <x-tab-navigation tab1Title="Student Portal Account" tab2Title="PLM Email" />
        <!-- Tab Contents -->
        <div x-show="activeTab === 'student-portal-account'">
            <section class="p-4 rounded-lg" role="tabpanel" aria-labelledby="student-portal-account-tab">
                <!-- Buttons Container -->
                <div class="flex items-center justify-between mb-4">
                    <x-email-all-button student-count="2000" button-text="Email all" />
                    <x-edit-email-template-button modal-id="sp-account-modal"
                        modal-title="Student Portal Account Email Template" />
                </div>
                <!-- Pending Credentials Table -->
                <livewire:list-pending-email-student-portal />
            </section>
        </div>
        <div x-show="activeTab === 'plm-email'">
            <section class="p-4 rounded-lg" role="tabpanel" aria-labelledby="plm-email-tab">
                <!-- Buttons Container -->
                <div class="flex items-center justify-between mb-4">
                    <x-email-all-button student-count="2000" button-text="Email all" />
                    <x-edit-email-template-button modal-id="plm-email-modal"
                        modal-title="PLM Email Credentials Email Template" />
                </div>
                <!-- Pending Credentials Table -->
                <livewire:list-pending-email-p-l-m-email />
            </section>
        </div>
    </div>
</x-app-layout>