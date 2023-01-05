@push('styles')
<link href="{{ mix('css/career.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="main-banner mt-[61px] md:mt-[77px]">
  <picture>
    <source srcset="{{ mix("img/career/banner.webp") }}" type="image/webp" />
    <source srcset="{{ mix("img/career/banner.jpg") }}" />
    <img alt="" />
  </picture>
  <div class="main-banner-container">
    <div class="falga-container">
      <h1 class="font-poppins text-white text-center font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        Career
      </h1>
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "CAREER", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container">
    <div class="w-full text-center falga-section-title red-falga uppercae my-16">{{ "We're Hiring!" }}</div>
    <div class="overflow-x-auto relative mb-8">
        <table class="w-full text-xl text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-red-falga focus:border-red-falga block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga" placeholder="Search Jobs">
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <button id="location-bt" data-dropdown-toggle="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-red-falga focus:border-red-falga p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga flex items-baseline w-full text-left" type="button"><div class="flex-1">Location</div> <i class="fa-solid fa-chevron-down"></i></button>
                        <!-- Dropdown menu -->
                        <div id="location" class="hidden z-10 w-255 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 border">
                            <ul class="py-1 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="location-bt">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Jakarta Barat, Indonesian</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Surabaya, Indonesian</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Bandung, Indonesia</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Medan, Indoensia</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <button id="department-bt" data-dropdown-toggle="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-red-falga focus:border-red-falga p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga flex items-baseline w-full text-left" type="button"><div class="flex-1">Department</div> <i class="fa-solid fa-chevron-down"></i></button>
                        <!-- Dropdown menu -->
                        <div id="department" class="hidden z-10 w-255 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 border">
                            <ul class="py-1 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="department-bt">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">HRD</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Sales</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Production</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <button id="type-bt" data-dropdown-toggle="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-red-falga focus:border-red-falga p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga flex items-baseline w-full text-left" type="button"><div class="flex-1">Work Type</div> <i class="fa-solid fa-chevron-down"></i></button>
                        <!-- Dropdown menu -->
                        <div id="type" class="hidden z-10 w-255 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 border">
                            <ul class="py-1 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="type-bt">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Full Time</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Part Time</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Internship</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr class="border-t text-black font-poppins">
                    <th scope="row" class="py-9 px-6 text-xl text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item["title"] }}
                    </th>
                    <td class="py-9 px-6 text-xl">
                        {{ $item["location"] }}
                    </td>
                    <td class="py-9 px-6 text-xl">
                        {{ $item["department"] }}
                    </td>
                    <td class="py-9 px-6 text-xl">
                        {{ $item["type"] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
