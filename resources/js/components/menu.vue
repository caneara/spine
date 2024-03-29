<template>
    <div class="ui-menu items-center ml-3 flex relative">

        <!-- Trigger -->
        <div ref="trigger"
             @click="open = ! open"
             :dusk="`menu-${id.toLowerCase()}`"
             class="ui-trigger text-13px text-gray-500 hover:text-gray-800 uppercase whitespace-nowrap select-none cursor-pointer animated relative top-1px">

            <!-- Icon -->
            <i class="ui-icon fas fa-ellipsis-h text-17px"></i>

        </div>

        <!-- Drawer -->
        <div class="ui-drawer bg-white border border-gray-300 flex flex-col transition-all duration-300 rounded absolute py-6px"
             :class="[position, open ? 'opacity-100 scale-100 pointer-events-auto z-20' : 'opacity-0 scale-90 pointer-events-none -z-1']">

            <!-- Slot -->
            <div class="ui-item"
                 v-for="item in (items.filter(item => item.show).length ? items : empty)">

                <!-- Link -->
                <span v-if="item.show && item.type === 'link'"
                      @click.stop="open = false; item['action']()"
                      :dusk="`menu-${id.toLowerCase()}-${item.id}`"
                      class="ui-link hover:bg-gray-200/75 text-16px text-gray-700/80 hover:text-gray-700 flex items-center select-none whitespace-nowrap cursor-pointer animated pl-3 pr-6 py-10px">

                    <!-- Icon -->
                    <i :class="item.icon"
                       v-if="! Util.blank(item.icon)"
                       class="ui-icon fa-fw text-17px text-gray-400 relative top-[.5px] mr-10px">
                    </i>

                    <!-- Text -->
                    <span class="ui-label text-gray-700">
                        {{ item.label }}
                    </span>

                </span>

                <!-- Separator -->
                <div v-if="item.show && item.type === 'separator'"
                     class="ui-separator border-t border-gray-200 my-6px">
                </div>

                <!-- Empty -->
                <div v-if="item.show && item.type === 'empty'"
                     class="ui-empty text-13px text-gray-600/70 uppercase select-none whitespace-nowrap cursor-pointer px-6 pt-2 pb-5px">

                    <!-- Text -->
                    {{ emptyText }}

                </div>

            </div>

        </div>

    </div>
</template>

<script>
    import Container from '../mixins/Container';

    export default
    {
        /**
         * Define the mixins.
         *
         */
        mixins : [
            Container,
        ],

        /**
         * Define the data model.
         *
         */
        data() { return {
            empty    : [{ type : 'empty', show : true }],
            open     : false,
            position : '',
        }},

        /**
         * Define the public properties.
         *
         */
        props : {
            'emptyText' : { type : String, default : 'No Options Available' },
            'id'        : { type : String, default : 'Menu' },
            'items'     : { type : Array,  default : [] },
        },

        /**
         * Execute actions when the component is mounted to the DOM.
         *
         */
        mounted()
        {
            this.setOrientation();
        },

        /**
         * Define the watch methods.
         *
         */
        watch :
        {
            /**
             * Watch the 'items' data attribute.
             *
             */
            items : function(current, previous)
            {
                this.setOrientation();
            }
        },

        /**
         * Define the supporting methods.
         *
         */
        methods :
        {
	    	/**
	    	 * Determine if the component currently has the user's attention.
	    	 *
	    	 */
	    	hasUserAttention()
	    	{
                return this.open;
	    	},

	    	/**
	    	 * Respond to the component losing the user's attention.
	    	 *
	    	 */
	    	lostUserAttention()
	    	{
                this.open = false;
	    	},

            /**
             * Determine if the menu is too close to the bottom of the page.
             *
             */
            nearBottom()
            {
                let vertical = this.rectangle().bottom + (window.pageYOffset || document.body.scrollTop);

                return (document.body.scrollHeight - vertical - (this.items.length * 30)) <= 10;
            },

            /**
             * Determine if the menu is too close to the left of the page.
             *
             */
            nearLeft()
            {
                return (this.rectangle().left + (window.pageXOffset || document.body.scrollLeft)) <= 150;
            },

            /**
             * Retrieve the bounding rectangle for the trigger.
             *
             */
            rectangle()
            {
                return this.$refs.trigger.getBoundingClientRect();
            },

            /**
             * Assign the direction that the menu should expand to.
             *
             */
            setOrientation()
            {
                if (this.nearLeft() && this.nearBottom()) {
                    this.position = 'origin-bottom-left left-0 bottom-8';
                } else if (this.nearLeft()) {
                    this.position = 'origin-top-left left-0 top-8';
                } else if (this.nearBottom()) {
                    this.position = 'origin-bottom-right -right-3 bottom-8';
                } else {
                    this.position = 'origin-top-right -right-3 top-8';
                }
            },
        }
    }
</script>