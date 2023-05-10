<template>
	<div class="ui-lookup w-full">

		<!-- Container -->
		<div ref="container"
             @mouseover="hover = true"
             @mouseout="hover = false"
			 class="ui-container bg-white border border-gray-300 rounded relative animated">

			<!-- Field -->
			<input :id="name"
				   :name="name"
                   type="hidden"
				   :value="modelValue" />

			<!-- Input -->
			<input type="text"
                   ref="input"
				   v-model="term"
                   max-length="50"
				   @input="search()"
				   autocomplete="off"
                   @focus="focus = true"
				   :id="`${name}_display`"
				   @focusout="focus = false"
				   :name="`${name}_search_display`"
				   class="ui-control ui-input w-full bg-inherit text-17px text-gray-900 text-ellipsis overflow-hidden rounded appearance-none pl-3 pt-25px pb-6px" />

            <!-- Label -->
            <v-label :icon="icon"
                     :focus="focus"
                     :value="label"
                     :optional="optional"
                     :optionalText="optionalText"
                     :filled="! System.Util.blank(modelValue) || ! System.Util.blank(term)">
            </v-label>

            <!-- Clear -->
            <v-clear @click="clear()"
                     :focus="focus && ! System.Util.blank(term)"
                     :hover="hover && ! System.Util.blank(term)"
                     :filled="! System.Util.blank(modelValue) || ! System.Util.blank(term)">
            </v-clear>

		</div>

		<!-- Search Results -->
		<div class="relative">
			<div class="w-full absolute z-50"
                 :class="open ? 'pointer-events-auto' : 'pointer-events-none'">

                <!-- List -->
				<ul ref="list"
					:class="open ? 'open opacity-100 z-50' : 'opacity-0 z-minus-1'"
                    class="ui-selector bg-white border border-gray-300 border-t-0 max-h-[190px] overflow-y-auto list-reset rounded-b">

					<!-- Items -->
					<li v-for="item in items"
						@click="select(item)"
                        :value="item[itemValueKey]"
						:id="`lookup-${name}-item-${item[itemValueKey]}`"
                        :dusk="`lookup-${name}-item-${item[itemValueKey]}`"
						:class="System.Util.blank(item[itemSubtextKey]) ? 'pt-10px pb-1' : 'py-10px'"
						class="bg-white hover:bg-yellow-600/10 text-gray-700 text-15px cursor-pointer relative animated list-none px-3 m-0">

                        <!-- Item -->
                        <div class="truncate"
                             :class="[
                                System.Util.blank(itemSubtextKey) || System.Util.blank(item[itemSubtextKey]) ? 'pb-7px' : '',
                                System.Util.blank(itemImageKey) ? '' : 'flex items-center'
                             ]">

                            <!-- Image -->
                            <img class="h-40px rounded-full mr-3"
                                 v-if="!System.Util.blank(itemImageKey)"
                                 :src="System.Resource.userAvatar(item.avatar)" />

                            <div>

                                <!-- Text -->
                                <div class="text-17px text-gray-700 -mb-3px">
                                    {{ item[itemTextKey] }}
                                </div>

                                <!-- Subtext -->
                                <div class="text-15px text-gray-600/70 mb-0">
                                    {{ item[itemSubtextKey] }}
                                </div>

                            </div>

                        </div>

					</li>

					<!-- Feedback -->
					<li v-show="feedback"
						class="bg-green-600/5 text-12px text-gray-600/90 uppercase pointer-events-none relative px-3 pt-13px pb-11px m-0">

                        <!-- Text -->
						{{ feedback }}

					</li>

				</ul>

			</div>
		</div>

        <!-- Error -->
        <v-error :message="fault"></v-error>

	</div>
</template>

<script>
    import { debounce } from 'lodash-es';
    import ClearComponent from './clear.vue';
    import ErrorComponent from './error.vue';
    import LabelComponent from './label.vue';
    import Component from '../mixins/Component';
    import Container from '../mixins/Container';

	export default
    {
        /**
         * Define the mixins.
         *
         */
        mixins : [
            Component,
            Container,
        ],

        /**
         * Define the components.
         *
         */
        components : {
            'v-clear' : ClearComponent,
            'v-error' : ErrorComponent,
            'v-label' : LabelComponent,
        },

		/**
		 * Define the data model.
		 *
		 */
		data() { return {
			end      : false,
			open     : false,
			page     : 1,
			term     : '',
			items    : [],
			suffix   : this.url.includes('?') ? '&' : '?',
            working  : false,
			feedback : '',
		}},

        /**
         * Define the events.
         *
         */
        emits : ['selected'],

		/**
		 * Define the public properties.
		 *
		 */
		props : {
			'itemImageKey'   : { type : Function,         default : null },
			'itemSubtextKey' : { type : String,           default : null },
			'itemTextKey'    : { type : String,           default : '' },
			'itemValueKey'   : { type : String,           default : '' },
			'query'          : { type : [String, Number], default : '' },
			'url'            : { type : String,           default : '' },
		},

		/**
		 * Define the watch methods.
		 *
		 */
		watch :
        {
			/**
			 * Watch the 'value' property.
			 *
			 */
			modelValue : function(current, previous)
			{
                if (! this.working) {
                    this.assignTerm();
                }
			}
		},

		/**
		 * Execute actions when the component is instantiated.
		 *
		 */
		created()
		{
			if (! System.Util.blank(this.modelValue)) {
                this.assignTerm();
            }
		},

		/**
		 * Define the supporting methods.
		 *
		 */
		methods :
        {
            /**
             * Fetch or assign the search term for the component.
             *
             */
            async assignTerm()
            {
                if (! System.Util.blank(this.query)) {
                    return this.term = this.query;
                }

                if (System.Util.blank(this.modelValue)) {
                    return this.term = '';
                }

                let response = await System.Request.post(
                    `${this.url}${this.suffix}match=1&term=${this.modelValue}&page=${this.page}`
                );

                this.term = response.data[0][this.itemTextKey];
            },

            /**
             * Reset the component.
             *
             */
            clear()
            {
                this.working = true;

                this.change('', '');

                this.term = '';

                this.$emit('selected', {});

                this.hide();

                setTimeout(() => this.working = false, 150);
            },

	    	/**
	    	 * Determine if the component is open or visible.
	    	 *
	    	 */
	    	hasUserAttention()
	    	{
                return this.open;
	    	},

			/**
			 * Hide any currently displayed results.
			 *
			 */
			hide()
			{
				this.page     = 1;
				this.open     = false;
				this.feedback = '';
				this.term     = System.Util.blank(this.modelValue) ? this.term : '';

				this.$refs.container.classList.add('rounded');
				this.$refs.container.classList.remove('rounded-t');

				setTimeout(() => this.items = [], 150);
			},

	    	/**
	    	 * Close or hide the component.
	    	 *
	    	 */
	    	lostUserAttention()
	    	{
                this.hide();
	    	},

			/**
			 * Attempt to load additional items that match the search query.
			 *
			 */
			more()
			{
                console.log('h');

				if (this.end) return;

				let position = this.$refs.list.scrollTop;
				let height   = this.$refs.list.scrollHeight - this.$refs.list.clientHeight;

				if (position / height >= 1) {
					this.$refs.list.removeEventListener('scroll', this.more);

					this.feedback = 'Loading more results, please wait...';

					this.page = this.page + 1;

					setTimeout(async() => {
                        let response = await System.Request.post(
                            `${this.url}${this.suffix}match=0&term=${this.term}&page=${this.page}`
                        );

                        this.parse(response.data, false);
					}, 1000)
				}
			},

			/**
			 * Insert the search results into the component's item list.
			 *
			 */
			parse(results, reset)
			{
				if (! reset && ! this.open) return;

				this.end      = reset ? false : this.end;
				this.items    = reset ? [] : this.items;
				this.open     = true;
				this.feedback = '';

				if (System.Util.blank(results) && System.Util.blank(this.items)) {
					this.feedback = 'No items were found...'; this.end = true;
				} else if (System.Util.blank(results) && ! System.Util.blank(this.items)) {
					this.feedback = 'No more items were found...'; this.end = true;
				} else {
					this.items = this.items.concat(results);
				}

				this.$refs.container.classList.remove('rounded');
				this.$refs.container.classList.add('rounded-t');

				this.$refs.list.addEventListener('scroll', this.more);
			},

			/**
			 * Submit a lookup request to the server.
			 *
			 */
			search : debounce(async function()
			{
				this.page = 1;
                this.working = true;
				this.change('');

                setTimeout(() => this.working = false);

				if (System.Util.blank(this.term)) {
					return this.hide();
				}

                if (this.term.length < 2) {
                    return;
                }

                let response = await System.Request.post(
                    `${this.url}${this.suffix}match=0&term=${this.term}&page=${this.page}`
                );

                this.parse(response.data, true);
			}, 300),

			/**
			 * Set the component's value using the given payload.
			 *
			 */
			select(item)
			{
				this.page     = 1;
				this.open     = false;
				this.term     = item[this.itemTextKey];
				this.feedback = '';

				this.$refs.container.classList.add('rounded');
				this.$refs.container.classList.remove('rounded-t');

                this.working = true;

				this.change(item[this.itemValueKey], item[this.itemTextKey]);
				this.$emit('selected', item);

				setTimeout(() => this.items = [], 150);
                setTimeout(() => this.working = false, 150);
			},
		}
	}
</script>