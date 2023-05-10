<template>
	<div class="ui-tabs flex items-end overflow-x-auto mb-18">

        <!-- Tabs -->
        <div @click="tab.action()"
             :dusk="`ui-tab-select-${tab.id}`"
             v-for="(tab, index) in items.filter(tab => tab?.visible ?? true)"
             class="ui-tab group cursor-pointer whitespace-nowrap select-none animated relative z-1">

            <!-- Content -->
            <div class="ui-content flex items-center px-4 py-3 md:mx-1">

                <!-- Icon -->
                <i :title="tab.label"
                   :class="[tab.icon, tab.id === active ? 'text-sky-600' : 'text-gray-500/[.65]']"
                   class="ui-icon text-20px lg:text-17px animated md:mx-1 lg:ml-0 lg:mr-14px">
                </i>

                <!-- Label -->
                <span v-html="tab.label"
                      :class="tab.id === active ? 'text-sky-600' : 'text-gray-600 hidden lg:inline'"
                      class="ui-label font-medium text-16px animated hidden lg:inline">
                </span>

            </div>

            <!-- Borders -->
            <div class="ui-border-top group-hover:bg-sky-600/[.80] w-full h-1px animated relative z-1"></div>
            <div class="ui-border-bottom bg-gray-300 group-hover:bg-sky-600/[.80] w-full h-1px animated relative z-1"></div>

        </div>

        <!-- Track -->
        <div class="ui-track bg-gray-300 w-full h-1px rounded-lg relative z-2"></div>

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
			'active' : { type : String, default : '' },
			'items'  : { type : Array,  default : [] },
		},
	}
</script>