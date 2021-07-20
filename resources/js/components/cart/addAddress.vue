<template>
  <div>
    <p style="color: black">
      Want to save this address for future?.
      <span style="font-weight: bold; cursor: pointer" @click="openModal"
        >Click here</span
      >
    </p>

    <sweet-modal ref="modal" :blocking="true">
      <div class="container text-left pl-5">
        <h3>Add Address</h3>
        <hr />
        <div class="common-input2 mb-2">
          <h6>Address Name</h6>
          <input
            type="text"
            placeholder="enter address name"
            v-model="editedItem.addressName"
          />
          <span class="invalid-feedback d-block" style="color: red">
            <strong style="color: red">{{ error[0] }}</strong>
          </span>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="common-input2 mb-2">
              <h6>Address</h6>
              <input
                type="text"
                placeholder="enter address"
                v-model="editedItem.address"
              />
              <span class="invalid-feedback d-block" style="color: red">
                <strong style="color: red">{{ error[1] }}</strong>
              </span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="common-input2 mb-2">
              <h6>Apartment</h6>
              <input
                type="text"
                placeholder="enter apartment"
                v-model="editedItem.apartment"
              />
              <span class="invalid-feedback d-block" style="color: red">
                <strong style="color: red">{{ error[2] }}</strong>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="common-input2 mb-2">
              <h6>Zone No #</h6>
              <input
                type="text"
                placeholder="enter zone no"
                v-model="editedItem.zone"
              />
              <span class="invalid-feedback d-block" style="color: red">
                <strong style="color: red">{{ error[3] }}</strong>
              </span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="common-input2 mb-2">
              <h6>Street No #</h6>
              <input
                type="text"
                placeholder="enter street no"
                v-model="editedItem.street"
              />
              <span class="invalid-feedback d-block" style="color: red">
                <strong style="color: red">{{ error[4] }}</strong>
              </span>
            </div>
          </div>
        </div>
        <div class="common-input2 mb-2">
          <h6>City</h6>
          <input
            type="text"
            placeholder="enter city"
            v-model="editedItem.city"
          />
          <span class="invalid-feedback d-block">
            <strong style="color: red">{{ error[5] }}</strong>
          </span>
        </div>
        <div class="common-input2 mb-2">
          <h6>Country</h6>
          <input
            type="text"
            placeholder="enter country"
            v-model="editedItem.country"
          />
          <span class="invalid-feedback d-block">
            <strong style="color: red">{{ error[6] }}</strong>
          </span>
        </div>

        <button class="template-btn2 on2" @click="save">
          Save <span>&rharu;</span>
        </button>
      </div>
    </sweet-modal>
  </div>
</template>

<script>
import { SweetModal } from "sweet-modal-vue";
export default {
  components: { SweetModal },
  props: ["data", "lat", "lng"],
  data() {
    return {
      showDialog: false,
      editedItem: {
        address: "",
        addressName: "",
        apartment: "",
        street: "",
        zone: "",
        city: "",
        country: "",
        lat: "",
        lng: "",
      },
      defaultItem: {
        address: "",
        addressName: "",
        apartment: "",
        zone: "",
        street: "",
        city: "",
        country: "",
        lat: "",
        lng: "",
      },
      error: [],
    };
  },
  mounted() {},
  methods: {
    openModal() {
      console.log(this.data);
      this.editedItem.address = this.data.address;
      this.editedItem.apartment = this.data.building_no;
      this.editedItem.zone = this.data.zone_no;
      this.editedItem.street = this.data.street_no;
      this.editedItem.city = this.data.city;
      this.editedItem.country = this.data.country;
      this.editedItem.lat = this.lat;
      this.editedItem.lng = this.lng;
      this.$refs.modal.open();
    },

    showToast(message, type) {
      Vue.$toast.open({
        message,
        type,
      });
    },

    async save() {
      this.error = [];
      if (this.editedItem.addressName == "") {
        this.error.push("The address name field is required");
      }
      if (this.editedItem.address == "") {
        this.error.push("The address field is required");
      }
      if (this.editedItem.apartment == "") {
        this.error.push("The apartment field is required");
      }
      if (this.editedItem.zone == "") {
        this.error.push("The zone field is required");
      }
      if (this.editedItem.street == "") {
        this.error.push("The street field is required");
      }
      if (this.editedItem.city == "") {
        this.error.push("The city field is required");
      }
      if (this.editedItem.country == "") {
        this.error.push("The country field is required");
      }

      if (this.error.length > 0) {
        return;
      } else {
        try {
          const { data } = await axios({
            method: "POST",
            url: "/app/address",
            data: this.editedItem,
          });
          this.$refs.modal.close();
          this.editedItem = Object.assign({}, this.defaultItem);
          if (data.status) {
            this.showToast("Success", "success");
          } else {
            this.showToast(data.message, "error");
          }
        } catch (error) {
          this.$refs.modal.close();
          this.showToast("Failed", "error");
        }
      }
    },
  },
};
</script>