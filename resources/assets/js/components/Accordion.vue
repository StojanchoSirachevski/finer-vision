<template>
    <div class="container p-10 bg-white rounded-lg">
        <form action="/store" method="post">
            <accordion-item
                    name="first"
                    :is-open="active === 'first'"
                    @toggle="setActive('first')">
                <template slot="header">
                    <p>Step 1: Your details</p>
                </template>
                <template slot="body">
                    <div class="section--body h-auto" slot="body">
                        <div class="flex p-3">
                            <div class="flex flex-col mr-2 w-1/3">
                                <label class="ml-1 mb-1" for="first_name">First Name:</label>
                                <input type="text"
                                       id="first_name"
                                       class="h-8 pl-1 rounded-lg"
                                       name="first_name"
                                       v-model="firstName"
                                       v-validate="'required'"
                                       data-vv-as="First Name"
                                       data-vv-validate-on="none" />
                                <span class="error">{{ errors.first('first_name') }}</span>
                            </div>
                            <div class="flex flex-col w-1/3">
                                <label class="ml-1 mb-1" for="last_name">Surname:</label>
                                <input type="text"
                                       id="last_name"
                                       class="h-8 pl-1 rounded-lg"
                                       name="last_name"
                                       v-model="lastName"
                                       v-validate="'required'"
                                       data-vv-as="Last name"
                                       data-vv-validate-on="none" />
                                <span class="error">{{ errors.first('last_name') }}</span>
                            </div>
                        </div>
                        <div class="flex px-3">
                            <div class="flex flex-col w-1/3">
                                <label class="ml-1 mb-1" for="email">Email address:</label>
                                <input type="email"
                                       id="email"
                                       class="h-8 pl-1 rounded-lg"
                                       name="email"
                                       v-model="email"
                                       v-validate="'required|email'"
                                       data-vv-as="Email address"
                                       data-vv-validate-on="none" />
                                <span class="error">{{ errors.first('email') }}</span>
                            </div>
                            <div></div>
                        </div>
                        <div class="mb-2 flex justify-end mr-2">
                            <button class="button--next rounded-lg" @click.prevent="nextStep">Next ></button>
                        </div>
                    </div>
                </template>
            </accordion-item>

            <accordion-item name="second"
                            :is-open="active === 'second'"
                            @toggle="setActive('second')">
                <template slot="header">
                    <p>Step 2: More comments</p>
                </template>
                <template slot="body">
                    <div class="section--body">
                        <div class="flex p-3">
                            <div class="flex flex-col mr-2">
                                <label class="ml-1 mb-1" for="phone_number">Phone Number:</label>
                                <input type="text"
                                       id="phone_number"
                                       class="h-8 pl-1 rounded-lg"
                                       name="phone_number"
                                       v-model="phoneNumber"
                                       v-validate="'required|numeric'"
                                       data-vv-as="Phone Number"
                                       data-vv-validate-on="none" />
                                <span class="error">{{ errors.first('phone_number') }}</span>
                            </div>
                            <div class="flex flex-col">
                                <label class="ml-1 mb-1">Gender:</label>
                                <div class="flex">
                                    <div class="flex items-center justify-center mr-3">
                                        <input type="radio"
                                               id="gender-male"
                                               class="h-8 mr-1"
                                               name="gender"
                                               value="m"
                                               v-model="gender"
                                               v-validate="'required'"
                                               data-vv-as="Gender"
                                               data-vv-validate-on="none" />
                                        <label for="gender-male">Male</label>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <input type="radio"
                                               id="gender-female"
                                               class="h-8 mr-1"
                                               name="gender"
                                               value="f"
                                               v-model="gender"
                                               v-validate="'required'"
                                               data-vv-as="Gender"
                                               data-vv-validate-on="none" />
                                        <label for="gender-female">Female</label>
                                    </div>
                                </div>
                                <span class="error">{{ errors.first('gender') }}</span>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col px-3">
                                <label class="ml-1 mb-1" for="dob">Date of birth:</label>
                                <input type="date"
                                       id="dob"
                                       class="h-8 pl-1 rounded-lg"
                                       name="dob"
                                       v-model="dob"
                                       v-validate="'required'"
                                       data-vv-as="Date of birth"
                                       data-vv-validate-on="none" />
                                <span class="error">{{ errors.first('dob') }}</span>
                            </div>
                            <div></div>
                        </div>
                        <div class="mb-2 flex justify-end mr-2">
                            <button class="button--next rounded-lg mr-2" @click.prevent="nextStep">Next ></button>
                        </div>
                    </div>
                </template>
            </accordion-item>

            <accordion-item name="third"
                            :is-open="active === 'third'"
                            @toggle="setActive('third')">
                <template slot="header">
                    <p>Step 3: Final comments</p>
                </template>
                <template slot="body">
                    <div class="section--body">
                        <div class="flex p-3">
                            <div class="flex flex-col w-full">
                                <label class="ml-1 mb-1" for="comments">Comments:</label>
                                <textarea name="comments"
                                          id="comments"
                                          class="w-1/2 p-1 rounded-lg"
                                          v-model="comments"></textarea>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-end mr-2">
                            <button class="button--next rounded-lg mr-2" @click.prevent="nextStep">Submit</button>
                        </div>
                    </div>
                </template>
            </accordion-item>
        </form>
    </div>
</template>

<script>
    import AccordionItem from './AccordionItem.vue';
    import moment from 'moment';

    export default {
        components: {AccordionItem},
        data() {
            return {
                sections: [],
                active: null,
                firstName: '',
                lastName: '',
                email: '',
                phoneNumber: '',
                gender: '',
                dob: '',
                comments: '',
            }
        },
        mounted() {
            this.sections = this.$children.map(item => {
                return item.name;
            });

            this.active = this.sections[0];
        },
        methods: {
            reset() {
                this.firstName = '';
                this.lastName = '';
                this.email = '';
                this.phoneNumber = '';
                this.gender = '';
                this.dob = '';
                this.comments = '';
                this.active = this.sections[0];
            },
            setActive(name) {

                this.$validator.validateAll()
                    .then(result => {

                        if(!result) return;

                        this.active = name;
                    });
            },
            nextStep() {

                this.$validator.validateAll()
                    .then(result => {

                        if(!result) return;

                        let index = this.sections.map(item => item).indexOf(this.active);

                        if(this.sections.length > index+1) {
                            this.active = this.sections[index+1];
                        } else {
                            this.submit();
                        }
                    });
            },
            submit() {

                let data = {
                    'first_name': this.firstName,
                    'last_name': this.lastName,
                    'email': this.email,
                    'phone_number': this.phoneNumber,
                    'gender': this.gender,
                    'dob': moment(this.dob).format('DD/MM/YYYY'),
                    // 'dob': this.dob,
                    'comments': this.comments
                };

                axios.post('/store', data)
                    .then(response => {

                        this.reset();
                    })
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

    .section--body {
        height: auto;
        background-color: #dddddd;
        overflow: hidden;
        transition: 500ms ease-out;
    }

    .button--next {
        background-color: #5200b4;
        padding: 3px 20px;
        color: white;
        font-size: 0.8em;
    }

    .error {
        font-size: 0.8em;
        margin-top: 5px;
        color: red;
    }

    [type="date"] {
        background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
    }
    [type="date"]::-webkit-inner-spin-button {
        display: none;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    #comments {
        height: 100px;
    }
</style>
