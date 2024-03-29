<template>
    <div class="flex justify-between items-center relative">

        <!-- Summary -->
        <span v-if="metrics"
              class="text-12px text-gray-500/80 uppercase relative top-3px">

            <!-- Text -->
            <span>
                Page
            </span>

            <!-- Current -->
            <span class="font-medium text-gray-700 mx-1px">
                {{ trim(source.pagination?.current_page ?? '1') }},
            </span>

            <!-- Text -->
            <span class="ml-1">
                Items
            </span>

            <!-- From -->
            <span class="font-medium text-gray-700 ml-1px">
                {{ trim(source.pagination?.from ?? '0') }}
            </span>

            <!-- Divider -->
            <span class="-mx-1px">
                -
            </span>

            <!-- To -->
            <span class="font-medium text-gray-700 ml-1px">
                {{ trim(source.pagination?.to ?? '0') }}
                {{ source.type === 'LengthAwarePaginator' ? ',' : '' }}
            </span>

            <!-- Total -->
            <span v-if="source.type === 'LengthAwarePaginator'"
                  class="block md:inline mt-6px md:ml-1 md:mt-0">

                <!-- Text -->
                <span>
                    Total
                </span>

                <!-- Value -->
                <span class="font-medium text-gray-700 ml-1px">
                    {{ trim(source.pagination?.total ?? '0') }}
                </span>

            </span>

        </span>

        <!-- Actions -->
        <div class="flex justify-end rounded relative top-3px">

            <!-- Reset -->
            <div v-if="reset"
                 title="Clear search"
                 class="cursor-pointer px-3"
                 dusk="ui_paginator_button_reset"
                 @click="Form.submit(Form.create(), resetUrl(), 'get', { preserveScroll : true }, true)">

                <!-- Link -->
                <i class="fas fa-times text-14px text-gray-800/50 hover:text-sky-600 animated"></i>

            </div>

            <!-- Search -->
            <div v-if="search"
                 title="Search"
                 @click="search()"
                 class="cursor-pointer px-3"
                 dusk="ui_paginator_button_search">

                <!-- Link -->
                <i class="fas fa-search text-14px text-gray-800/50 hover:text-sky-600 animated"></i>

            </div>

            <!-- Filter -->
            <div v-if="filter"
                 @click="filter()"
                 :title="filterTitle"
                 class="cursor-pointer px-3"
                 dusk="ui_paginator_button_filter">

                <!-- Link -->
                <i class="fa-filter text-14px hover:text-sky-600 animated"
                    :class="Browser.queryString(filterKey, '0') === '0' ? 'far text-gray-800/50' : 'fas text-sky-600/70'">
                </i>

            </div>

            <!-- Previous Page (Disabled) -->
            <div class="select-none cursor-not-allowed px-3"
                 v-if="Util.blank(source.pagination.prev_page_url)">

                <!-- Arrow -->
                <i class="fas fa-arrow-left text-14px text-gray-300"></i>

            </div>

            <!-- Previous Page (Enabled) -->
            <div title="Previous Page"
                 class="cursor-pointer px-3"
                 v-if="source.pagination.prev_page_url"
                 @click="goToPage(url(source.pagination.prev_page_url), { preserveScroll : true })">

                <!-- Link -->
                <i class="fas fa-arrow-left text-14px text-gray-800/50 hover:text-sky-600 animated"></i>

            </div>

            <!-- Next Page (Enabled) -->
            <div title="Next Page"
                 class="cursor-pointer pl-3"
                 v-if="source.pagination.next_page_url"
                 @click="goToPage(url(source.pagination.next_page_url), { preserveScroll : true })">

                <!-- Link -->
                <i class="fas fa-arrow-right text-14px text-gray-800/50 hover:text-sky-600 animated"></i>

            </div>

            <!-- Next Page (Disabled) -->
            <div class="select-none cursor-not-allowed pl-3"
                 v-if="Util.blank(source.pagination.next_page_url)">

                <!-- Arrow -->
                <i class="fas fa-arrow-right text-14px text-gray-300"></i>

            </div>

        </div>

    </div>
</template>

<script>
    export default
    {
        /**
         * Define the public properties.
         *
         */
        props : {
            'filter'      : { type : Function, default : null },
            'filterKey'   : { type : String,   default : 'filter' },
            'filterTitle' : { type : String,   default : '' },
            'metrics'     : { type : Boolean,  default : true },
            'reset'       : { type : Boolean,  default : false },
            'search'      : { type : Function, default : null },
            'source'      : { type : Object,   default : {} },
        },

        /**
         * Define the supporting methods.
         *
         */
        methods :
        {
            /**
             * Redirect the user to a different page.
             *
             */
            goToPage(url, options)
            {
                window.app.config.globalProperties.$inertia.visit(url, options);
            },


            /**
             * Generate the URL to reset the page.
             *
             */
            resetUrl()
            {
                return `${window.location.origin}${window.location.pathname}`
            },

            /**
             * Remove extraneous content from the given value.
             *
             */
            trim(value)
            {
                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            },

            /**
             * Generate a URL using the given link.
             *
             */
            url(link)
            {
                let pair = link.split('?')[1].split('=');

                let query = Browser.queryString();

                query.set(pair[0], pair[1]);

                return `${link.split('?')[0]}?${query.toString()}`;
            },
        },
    }
</script>