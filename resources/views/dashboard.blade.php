<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-shark-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container grid mx-auto ">
        <h2 class="my-6 text-2xl font-semibold text-shark-700 dark:text-shark-200">
            Dashboard
        </h2>

        <!-- Cards -->
        {{-- text-purple-100 text-purple-500 bg-purple-100 bg-purple-500 --}}
        {{-- text-green-100 text-green-500 bg-green-100 bg-green-500 --}}
        {{-- text-blue-100 text-blue-500 bg-blue-100 bg-blue-500 --}}
        {{-- text-yellow-100 text-yellow-500 bg-yellow-100 bg-yellow-500 --}}

        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <x-stat-card color="yellow" title="Users" desc="{{ $users }}">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </x-slot>
            </x-stat-card>
            <!-- Card -->
            <x-stat-card color="blue" title="Doctors" desc="{{ $doctors }}">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                    </svg>
                </x-slot>
            </x-stat-card>
            <!-- Card -->
            <x-stat-card color="purple" title="Specializations" desc="{{ $specializations->count() }}">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                </x-slot>
            </x-stat-card>
            <!-- Card -->
            <x-stat-card color="green" title="Articels" desc="{{ $articels }}">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </x-slot>
            </x-stat-card>

        </div>
        <!-- Charts -->
        <h2 class="my-6 text-2xl font-semibold text-shark-700 dark:text-shark-200">
            Charts
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-sm shadow-xs dark:bg-shark-800">
                <h4 class="mb-4 font-semibold text-shark-800 dark:text-shark-300">
                     Doctors Per Gender
                </h4>
                 {!! $gender_Chartjs->render() !!}
            </div>

            <div class="min-w-0 p-4 bg-white rounded-sm shadow-xs dark:bg-shark-800">
                <h4 class="mb-4 font-semibold text-shark-800 dark:text-shark-300">
                    Doctors Per Specialization
                </h4>
                {!! $chartjs->render() !!}
            </div>
        </div>
        <!-- New Table -->
        <div class="w-full overflow-hidden ">
            <div class="overflow-x-auto bg-white rounded-sm shadow dark:bg-shark-800">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="font-bold tracking-wide text-left uppercase border-b text-md text-shark-500 dark:border-shark-700 dark:text-shark-300">
                            <th class="px-6 pt-6 pb-4">Doctor</th>
                            <th class="px-6 pt-6 pb-4">Clinc Address</th>
                            <th class="px-6 pt-6 pb-4">Status</th>
                            <th class="px-6 pt-6 pb-4">Phone</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y dark:divide-shark-700 ">
                        @forelse ($doctors_list as $doctor)

                            <tr class="text-shark-700 dark:text-shark-300">
                                <td class="px-4 py-3">
                                    <a href="{{ route('doctor.show', $doctor) }}">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="{{ asset($doctor->avatar) }}" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">{{ $doctor->name }}</p>
                                                <p class="text-xs text-shark-600 dark:text-shark-300">
                                                    {{ $doctor->specialization->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('doctor.show', $doctor) }}">
                                        {{ $doctor->clinic_address }}
                                    </a>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <a href="{{ route('doctor.show', $doctor) }}">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Approved
                                        </span>
                                    </a>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('doctor.show', $doctor) }}">
                                        {{ $doctor->phone_number }}
                                    </a>
                                </td>
                            </tr>
                        </ @empty <tr class="text-shark-700 dark:text-shark-300 flex items-center justify-center">
                            <td class="px-4 py-3" colspan="5">{{ __('No data to show!') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div
                class=" px-4 py-3 text-xs font-semibold tracking-wide uppercase border-t text-shark-500 dark:border-shark-700 sm:grid-cols-9 dark:text-shark-300 ">
                {{ $doctors_list->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
