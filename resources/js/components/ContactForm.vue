<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form @submit="sendMessage" class="was-validated">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input
                            v-model="name"
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Enter your name"
                            name="name"
                            required
                        />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input
                            type="email"
                            class="form-control"
                            v-model="email"
                            id="email"
                            placeholder="Enter your email"
                            name="email"
                            required
                        />
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea
                            v-model="message"
                            class="form-control"
                            name="message"
                            placeholder="Please enter your message here"
                            required
                        ></textarea>
                    </div>

                    <button
                        v-if="formSending == false"
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    <button
                        v-if="formSending == true"
                        type="submit"
                        class="btn btn-primary"
                    >
                        Sending Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loaded: false,
            formSending: false,
            name: null,
            email: null,
            message: null
        };
    },
    mounted() {},
    methods: {
        sendMessage(e) {
            e.preventDefault();
            this.formSending = true;
            Vue.axios
                .post("/contact-us/sendmessage/ajax", {
                    name: this.name,
                    email: this.email,
                    message: this.message
                })
                .then(response => {
                    alert("Thank you. Your message has been sent!");
                    this.formSending = false;
                    this.name = null;
                    this.email = null;
                    this.message = null;
                })
                .catch(error => {
                    alert(
                        "Sorry, we are not able to process sending the message"
                    );
                    console.log(error);
                    this.formSending = false;
                });
        }
    }
};
</script>

<style lang="scss" scoped></style>
