<x-app-layout>
    <div class="w-full overflow-hidden ">
        <div class="overflow-x-auto bg-white rounded-md shadow dark:bg-shark-800">
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
                    @forelse ($doctors as $doctor)

                        <tr class="text-shark-700 dark:text-shark-300">
                            <td class="px-4 py-3">
                                <a href="{{ route('doctor.show', $doctor) }}">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ asset($doctor->avatar) }}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
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
            {{ $doctors->links() }}
        </div>
    </div>
</x-app-layout>
