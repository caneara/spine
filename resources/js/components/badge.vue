<template>
    <div :title="tooltip"
         class="ui-badge"
         v-if="! Util.blank(value)">

        <!-- Opaque -->
        <div v-if="mode === 'opaque'"
             :class="[modes.opaque[color], small ? 'text-10px px-1' : 'text-11px px-2 py-2px']"
             class="ui-content ui-content-opaque inline-block rounded-md font-semibold tracking-[.1px] select-none whitespace-nowrap uppercase">

            <!-- Text -->
            {{ value }}

        </div>

        <!-- Dot -->
        <div v-if="mode === 'dot'"
             class="ui-content ui-content-dot flex justify-center items-center rounded-md font-semibold text-11px text-gray-500 tracking-[.1px] select-none whitespace-nowrap uppercase">

            <!-- Outer -->
            <div :class="modes.dot[color].outer"
                 class="w-14px h-14px flex justify-center items-center rounded-full mr-2">

                <!-- Inner -->
                <div :class="modes.dot[color].inner"
                     class="w-6px h-6px rounded-full">
                </div>

            </div>

            <!-- Text -->
            {{ value }}

        </div>

    </div>
</template>

<script>
    export default
    {
        /**
         * Define the data model.
         *
         */
        data() { return {
            modes : {
                opaque : {
                    blue   : 'bg-sky-500/10 border border-sky-700/40 text-sky-700/90',
                    green  : 'bg-emerald-500/10 border border-emerald-700/40 text-emerald-700/90',
                    gray   : 'bg-gray-500/10 border border-gray-700/40 text-gray-700/90',
                    purple : 'bg-purple-500/10 border border-purple-700/40 text-purple-900/70',
                    red    : 'bg-red-500/10 border border-red-700/40 text-red-800/90',
                    yellow : 'bg-yellow-500/10 border border-yellow-700/40 text-yellow-700/90',
                    teal   : 'bg-teal-500/10 border border-teal-700/40 text-teal-700/90',
                },
                dot : {
                    blue   : { outer : 'bg-sky-500/20',     inner : 'bg-sky-500' },
                    green  : { outer : 'bg-emerald-500/20', inner : 'bg-emerald-500' },
                    gray   : { outer : 'bg-gray-500/20',    inner : 'bg-gray-500' },
                    purple : { outer : 'bg-purple-500/20',  inner : 'bg-purple-500' },
                    red    : { outer : 'bg-red-500/20',     inner : 'bg-red-500' },
                    yellow : { outer : 'bg-yellow-500/20',  inner : 'bg-yellow-500' },
                    teal   : { outer : 'bg-teal-500/20',    inner : 'bg-teal-500' },
                }
            }
        }},

        /**
         * Define the public properties.
         *
         */
        props : {
            'color'   : { type : String,  default : 'blue' },
            'mode'    : { type : String,  default : 'opaque' },
            'small'   : { type : Boolean, default : false },
            'tooltip' : { type : String,  default : '' },
            'value'   : { type : String,  default : '' },
        },
    }
</script>