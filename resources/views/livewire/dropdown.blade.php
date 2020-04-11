<div>
    <div class="relative">
        <div class="">
            <label for="search" class="sr-only">Users</label>

            <div class="mt-1 relative rounded-md shadow-sm">
                <input wire:model.debounce.250ms="search" id="search" name="search" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Search by domain extension (.org, .net)"/>
            </div>
        </div>

        @if($users)
        <div class="absolute mt-2 w-full bg-white rounded-md shadow-lg">
            <ul>
                @foreach($users as $user)
                <li>
                    <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">
                                <div class="min-w-0 flex-1 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <div class="text-sm leading-5 font-medium text-indigo-600 truncate">{{ $user->name }}</div>

                                        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                            <span class="truncate">{{ $user->email }}</span>
                                        </div>
                                    </div>

                                    <div class="hidden md:block">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-900">
                                                Created on
                                                <time datetime="2020-01-07">{{ Carbon\Carbon::parse( $user->created_at)->format('F jS, Y') }}</time>
                                            </div>

                                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Completed phone screening
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
