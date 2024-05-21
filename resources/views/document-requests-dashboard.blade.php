@filamentStyles

<x-app-layout>
    <!-- Header -->
    <x-header title="Document Requests" />
    <!-- Buttons Container -->
    <div class="flex items-center space-x-2.5">
        <!-- Search Bar -->
        <?php $id = "documentSearch"; ?>
        <x-search-bar :id="$id" />
        <!-- Add button -->
        <x-add-button id="addDocumentsButton" />
        <!-- Sort by Document type -->
        <x-dropdown align="right" width="48" contentClasses="py-1 bg-white">
            <x-slot name="trigger">
                <button id="documentTypeDropdownButton"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Document type
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link href="#">Diploma</x-dropdown-link>
                <x-dropdown-link href="#">Transcript of Records</x-dropdown-link>
                <x-dropdown-link href="#">Honorable Dismissal</x-dropdown-link>
                <x-dropdown-link href="#">English Translation of Diploma</x-dropdown-link>
                <x-dropdown-link href="#">Certification of Grades</x-dropdown-link>
                <x-dropdown-link href="#">Certification of Graduation</x-dropdown-link>
                <x-dropdown-link href="#">Certification of Units Earned</x-dropdown-link>
                <x-dropdown-link href="#">Certification of Enrollment</x-dropdown-link>
                <x-dropdown-link href="#">Certification of Medium of Instruction</x-dropdown-link>
                <x-dropdown-link href="#">Replacement of Registration Card/ID</x-dropdown-link>
                <x-dropdown-link href="#">DFA/CHED Authentication of Records</x-dropdown-link>
            </x-slot>
        </x-dropdown>
        <!-- End Sort by Document type -->
        <!-- Sort by Status -->
        <x-dropdown align="right" width="48" contentClasses="py-1 bg-white">
            <x-slot name="trigger">
                <button id="statusDropdownButton"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Status
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link href="#">In progress</x-dropdown-link>
                <x-dropdown-link href="#">Completed</x-dropdown-link>
                <x-dropdown-link href="#">Cancelled</x-dropdown-link>
            </x-slot>
        </x-dropdown>
        <!-- End Sort by Status -->
    </div>
    <!-- End Buttons Container -->
    <!-- Document Requests Table -->
    <livewire:list-document-requests />
</x-app-layout>