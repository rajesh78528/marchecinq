<template>
  <div>
    <!-- Profile Area Starts -->
    <section class="profile-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="profile-image">
              <div
                class="image avatar-img"
                :style="{
                  background: 'url(' + cms_url + editedItem.image + ')',
                }"
              ></div>
              <div class="name mt-2">
                <h4 style="color: #005677">
                  {{ editedItem.name }}
                  <i
                    class="fa fa-pencil-square-o"
                    @click="$refs.myFile.click()"
                  ></i>
                </h4>
              </div>
              <input
                type="file"
                name="myFile"
                ref="myFile"
                accept="image/*"
                style="display: none"
                @change="handleFileChange"
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="profile-title">
              <h2 style="color: #005677">My Account</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2 pr-0">
            <div class="profile-tab">
              <div class="">
                <div class="tab">
                  <ul>
                    <li class="tab-one">
                      <h6 style="color: #005677">
                        <i class="fa fa-user-o"></i> profile
                      </h6>
                    </li>
                    <li class="tab-second">
                      <h6 @click="logout" style="color: #005677">
                        <i class="fa fa-sign-out"></i> Log Out
                      </h6>
                    </li>

                    <!-- <li class="tab-second"><h6><i class="fa fa-heart-o"></i> Saved</h6></li> -->
                    <!-- <li class="tab-three"><h6><i class="fa fa-square-o"></i> Track Order</h6></li>
                                <li class="tab-four"><h6><i class="fa fa-cog"></i> setting</h6></li> -->
                    <!-- <li class="tab-five"><h6><i class="fa fa-sign-out"></i> Log Out</h6></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-10 pl-0">
            <div class="">
              <div class="">
                <div class="contact-bg">
                  <div class="form-border">
                    <div class="form-title">
                      <h4 style="color: #005677">Contact Details</h4>
                    </div>

                    <ul class="errors" v-if="errors.length > 0">
                      <li v-for="item in errors" :key="item">{{ item }}</li>
                    </ul>
                    <div>
                      <h6 style="color: #005677">Full Name</h6>
                      <input
                        class="diffrent"
                        type="text"
                        placeholder="Name"
                        v-model="editedItem.name"
                      />
                      <h6 style="color: #005677">Email Address</h6>
                      <input
                        type="email"
                        placeholder="Email"
                        v-model="editedItem.email"
                        disabled
                      />

                      <div class="row mt-3">
                        <div class="col-md-6">
                          <h6 style="color: #005677">Address</h6>
                          <input
                            type="text"
                            placeholder="Address"
                            v-model="editedItem.address"
                          />
                        </div>
                        <div class="col-md-6">
                          <h6 style="color: #005677">City</h6>
                          <input
                            type="text"
                            placeholder="City"
                            v-model="editedItem.city"
                          />
                        </div>
                      </div>

                      <h6 style="color: #005677" class="mt-3">Country</h6>
                      <input
                        type="text"
                        placeholder="Country"
                        v-model="editedItem.country"
                      />
                      <div class="form-button">
                        <!-- <button type="button" class="template-btn2 on2">Back To Setting<span class="custom-icon"></span></button> -->
                        <button
                          type="submit"
                          class="template-btn2 on1"
                          @click="save"
                        >
                          Save Changes<span class="custom-icon"></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Profile Area End -->

    <!-- Instagram Starts -->
    <section class="instagram-area section-padding-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <h2 style="color: #005677">Follow Our Instagram</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 px-0">
            <div class="instagram-slider owl-carousel">
              <div class="single-slide slide-1"></div>
              <div class="single-slide slide-2"></div>
              <div class="single-slide slide-3"></div>
              <div class="single-slide slide-4"></div>
              <div class="single-slide slide-5"></div>
              <div class="single-slide slide-6"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Instagram End -->
  </div>
</template>

<style lang="scss" scoped>
.errors {
  color: red;
  margin: 20px auto;
}
.avatar-img {
  background-repeat: no-repeat !important;
  background-position: center !important;
}
@media only screen and (max-width: 992px) {
  .profile-image {
    margin-top: -20px !important;
  }
}
</style>


<script>
export default {
  components: {},
  data: () => ({
    editedItem: {
      name: "",
      email: "",
      address: "",
      city: "",
      country: "",
      image: "",
    },
    myFile: null,
    cms_url: "",
    errors: [],
  }),

  props: {
    profiledata: Object,
  },

  computed: {},
  watch: {},
  created() {
    this.cms_url = window.baseURL;
    this.editedItem.name = this.profiledata.name;
    this.editedItem.email = this.profiledata.email;
    this.editedItem.image = this.profiledata.image;
    if (this.profiledata.address.length > 0) {
      this.editedItem.address = this.profiledata.address[0].address;
      this.editedItem.city = this.profiledata.address[0].city;
      this.editedItem.country = this.profiledata.address[0].country;
    }
  },

  methods: {
    async save() {
      try {
        this.errors = [];
        let { data } = await axios({
          method: "post",
          url: "/app/updateprofile",
          data: this.editedItem,
        });
        if (data.status == 422) {
          Object.keys(data.data).forEach((item) => {
            this.errors.push(data.data[item][0]);
          });
          Vue.$toast.open({ message: "Validation failed", type: "error" });
          return;
        }
        if (data.status) {
          Vue.$toast.open({ message: "Details updated", type: "success" });
        } else {
          Vue.$toast.open({ message: "Error", type: "error" });
        }
      } catch (e) {}
    },

    async logout() {
      try {
        let { data } = await axios({
          method: "post",
          url: "/app/logout",
          data: this.editedItem,
        });
        if (data.status) {
          window.location.href = "/";
        } else {
        }
      } catch (e) {}
    },

    async handleFileChange(e) {
      this.myFile = e.target.files[0];
      try {
        const formData = new FormData();
        formData.append("user_id", this.profiledata.id);
        formData.append("myFile", this.myFile);
        const { data } = await axios({
          method: "POST",
          url: this.cms_url + "/app/avatar",
          data: formData,
        });
        if (data.status) {
          this.editedItem.image = data.data;
          Vue.$toast.open({
            message: "Image updated",
            type: "success",
          });
        } else {
          Vue.$toast.open({
            message: "Failed",
            type: "error",
          });
        }
      } catch (error) {
        console.log(error);
        Vue.$toast.open({
          message: "Failed",
          type: "error",
        });
      }
    },
  },
};
</script>