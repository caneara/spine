<template>
    <div class="ui-progress relative">

        <!-- Bar -->
        <div class="ui-progress-bar bg-gray-200 w-full h-8px overflow-hidden relative rounded-[3px]">

            <!-- Step -->
            <div :style="`width: ${Math.round((value / maximum) * 100)}%`"
                 class="ui-progress-step bg-sky-600/70 h-8px rounded-4px rounded-r-none absolute top-0 left-0 transition-all duration-300">
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
            'maximum' : { type : Number, default : 100 },
            'value'   : { type : Number, default : 0 },
        },
    }
</script>