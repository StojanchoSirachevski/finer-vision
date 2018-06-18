<template>
    <div class="section flex flex-col p-1">
        <div class="section--header p-3 rounded-lg" @click="toggle">
            <slot name="header"></slot>
        </div>

        <transition
                @before-enter="beforeEnter"
                @before-leave="beforeLeave"
                @enter="enter"
                @leave="leave">
            <slot name="body" v-if="isOpen"></slot>
        </transition>
    </div>
</template>

<script>
    export default {
        props: ['name', 'isOpen'],
        methods: {
            toggle() {
                this.$emit('toggle', this.name)
            },
            beforeEnter: function(el) {
                el.style.height = '0';
            },
            enter: function(el) {
                el.style.height = el.scrollHeight + 28 + 'px';
            },
            beforeLeave: function(el) {
                el.style.height = el.scrollHeight + 28 + 'px';
            },
            leave: function(el) {
                el.style.height = '0';
            }
        }
    }
</script>

<style lang="scss" scoped>
    .section--header {
        background-color: #ffcb2a;
        color: white;
        cursor: pointer;
    }
</style>