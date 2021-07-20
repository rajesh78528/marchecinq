<template>
  <!-- Tab Content Starts -->
  <div class="tab-content-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <div class="tab-content">
            <div class="tab-one-content lost active current">
              <!-- Shipping Section Starts -->
              <div class="shipping-section">
                <div class="shipping-title">
                  <h2 style="padding-top: 35px; padding-bottom: 25px">
                    {{ translations.checkout }}
                  </h2>
                </div>

                <div class="cart-box">
                  <div class="address-section delivery-section">
                    <div>
                      <div>
                        <div class="common-input2 mb-4">
                          <h3>{{ translations.personalinfo }}</h3>
                          <h6>{{ translations.fullname }}</h6>
                          <input
                            type="text"
                            placeholder="Enter Name ..."
                            v-model="cartCheckOutData.full_name"
                          />
                        </div>

                        <div class="diffrent-input mb-4">
                          <div class="common-input2">
                            <h6>{{ translations.emailText }}</h6>
                            <input
                              type="email"
                              placeholder="Enter Email ..."
                              v-model="cartCheckOutData.email"
                            />
                          </div>
                        </div>
                        <div class="common-input2 mb-4">
                          <h6>{{ translations.phoneText }}</h6>
                          <input
                            type="text"
                            placeholder="Enter Mobile ..."
                            v-model="cartCheckOutData.mobile"
                          />
                        </div>
                        <h3>{{ translations.address }}</h3>

                        <div class="row mt-4">
                          <div class="col-md-12">
                            <div class="common-input2 mb-4">
                              <h6>Select Address</h6>
                              <select
                                v-model="address"
                                @change="addressChange"
                                class="sel"
                              >
                                <option value="0" disabled>
                                  Select an option
                                </option>
                                <option
                                  v-for="item in addresses"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.address_name }}
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="common-input2 mb-4">
                              <h6>{{ translations.country }}</h6>
                              <select
                                class="sel"
                                style="width: 100%"
                                v-model="cartCheckOutData.country"
                                @change="changeCountry"
                              >
                                <option value="Qatar">Qatar</option>
                                <option
                                  :value="data.name_en"
                                  v-for="(data, index) in countries"
                                  :key="index"
                                >
                                  {{ data.name_en }}
                                </option>
                              </select>
                            </div>
                          </div>
                          <div
                            class="col-lg-6"
                            v-if="
                              showType && cartCheckOutData.country != 'Qatar'
                            "
                          >
                            <div class="common-input2 mb-4">
                              <h6>Shipping Type</h6>
                              <select
                                style="width: 100%"
                                class="sel"
                                v-model="cartCheckOutData.shipping_type"
                                @change="calculatePrice()"
                              >
                                <option value="0">Document Upto 5kg</option>
                                <option value="1">
                                  Non-Document over 5kg and packages
                                </option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div
                              class="common-input2 mb-4"
                              v-if="cartCheckOutData.country == 'Qatar'"
                            >
                              <h6>{{ translations.city }}</h6>
                              <select
                                class="sel"
                                style="width: 100%"
                                v-model="cartCheckOutData.city"
                              >
                                <option value="" disabled selected>
                                  --Select City --
                                </option>
                                <option
                                  :value="data"
                                  v-for="(data, index) in dataCity"
                                  :key="index"
                                >
                                  {{ data }}
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <GmapMap
                          :center="{ lat: lat, lng: lng }"
                          :zoom="12"
                          map-type-id="terrain"
                          style="width: 100%; height: 300px"
                          @click="newmark"
                          ref="mapRef"
                        >
                          <GmapMarker
                            :key="index"
                            v-for="(m, index) in markers"
                            :position="position"
                            :clickable="true"
                            :draggable="true"
                            @click="center = m.position"
                          />
                        </GmapMap>
                        <div class="common-input2 mb-4">
                          <h6>{{ translations.address }}</h6>
                          <input
                            type="text"
                            placeholder="Enter Address ..."
                            v-model="cartCheckOutData.address"
                          />
                        </div>
                        <div
                          class="common-input2 mb-4"
                          v-if="cartCheckOutData.country != 'Qatar'"
                        >
                          <h6>{{ translations.city }}</h6>
                          <input
                            type="text"
                            placeholder="City ..."
                            v-model="cartCheckOutData.city"
                          />
                        </div>
                        <div
                          class="common-input2 mb-4"
                          v-if="cartCheckOutData.country != 'Qatar'"
                        >
                          <h6>{{ translations.location }}</h6>
                          <input
                            type="text"
                            placeholder="Zone, Street, Buliding,  Office ..."
                            v-model="cartCheckOutData.apartment"
                          />
                        </div>
                        <div
                          class="common-input2 mb-4"
                          v-if="cartCheckOutData.country != 'Qatar'"
                        >
                          <h6>{{ translations.company }}</h6>
                          <input
                            type="text"
                            placeholder="Comapany (Optional) ..."
                            v-model="cartCheckOutData.company"
                          />
                        </div>
                        <div
                          class="common-input2 mb-4"
                          v-if="cartCheckOutData.country == 'Qatar'"
                        >
                          <h6>{{ translations.building }}</h6>
                          <input
                            type="number"
                            placeholder="Building No..."
                            v-model="cartCheckOutData.building_no"
                          />
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div
                              class="common-input2 mb-4"
                              v-if="cartCheckOutData.country == 'Qatar'"
                            >
                              <h6>{{ translations.zone }}</h6>
                              <input
                                type="number"
                                placeholder="Zone No..."
                                v-model="cartCheckOutData.zone_no"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div
                              class="common-input2 mb-4"
                              v-if="cartCheckOutData.country == 'Qatar'"
                            >
                              <h6>{{ translations.street }}</h6>
                              <input
                                type="number"
                                placeholder="Street No..."
                                v-model="cartCheckOutData.street_no"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="common-input2 mb-4">
                          <h6>{{ translations.note }}</h6>
                          <textarea
                            style="width: 100%"
                            placeholder="Enter Note ..."
                            v-model="cartCheckOutData.note"
                          ></textarea>
                        </div>
                        <div class="mb-4">
                          <AddAddress
                            :data="cartCheckOutData"
                            :lat="lat"
                            :lng="lng"
                          />
                        </div>
                        <div class="text-right">
                          <button @click="save" class="template-btn2 on2">
                            {{ translations.submit }} <span>&rharu;</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Shipping Section End -->
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="tab-content">
            <div class="tab-one-content lost active current">
              <div class="shipping-section">
                <div class="cart-box pl-0" style="margin-top: 12vh">
                  <div class="address-section delivery-section">
                    <cart-list
                      :isCheckout="true"
                      :shipping_rate="shipping_rate"
                    ></cart-list>
                  </div>
                  <div class="address-section delivery-section mt-2">
                    <Reward />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tab Content End -->
</template>

<style lang="scss">
div.tab-content-section * {
  color: #005677;
}
.cart-box {
  background: white !important;
}
.sel {
  padding: 15px 20px;
  width: 100%;
  background: transparent;
  border: 1px solid #d0cbc7;
}
</style>

<script>
import Reward from "./reward.vue";
import AddAddress from "./addAddress";
export default {
  components: { Reward, AddAddress },
  data: () => ({
    locale: "",
    translations: Object,
    today: "",
    tommrow: "",
    countries: [],
    showType: false,
    weight: 0,
    shipping_rate: null,
    lat: 25.261713,
    lng: 51.494597,
    addresses: [],
    address: 0,
    markers: [
      {
        position: {
          lat: 25.261713,
          lng: 51.494597,
        },
      },
    ],
    cartCheckOutData: {
      cartData: [],
      full_name: "",
      mobile: "",
      address: "",
      note: "",
      total_amount: "",
      store_id: "",
      date: new Date(Date.now()),
      email: "",
      country: "Qatar",
      city: "",
      zone_no: "",
      building_no: "",
      street_no: "",
      company: "",
      apartment: "",
      shipping_type: null,
    },

    defaultcartCheckOutData: {
      cartData: [],
      full_name: "",
      mobile: "",
      address: "",
      note: "",
      total_amount: "",
      store_id: "",
      date: new Date(Date.now()),
      email: "",
      country: "Qatar",
      city: "",
      zone_no: "",
      building_no: "",
      street_no: "",
      company: "",
      apartment: "",
      shipping_type: null,
    },

    dataCity: [
      "Doha",
      "Al Rayyan",
      "Umm Slal",
      "Al Khor",
      "Al Wakrah",
      "Al Daayen",
      "Al Shamal",
      "Al Sheehaniya",
    ],
  }),

  props: {
    source: String,
  },

  computed: {
    cartData() {
      return this.$store.state.cartData;
    },
    getShippingRate() {
      return this.shipping_rate;
    },
    position() {
      var position = {
        lat: this.lat,
        lng: this.lng,
      };
      if (this.$refs.mapRef) {
        this.$refs.mapRef.$mapPromise.then(() => {
          var geocoder = new google.maps.Geocoder();
          geocoder.geocode({ location: position }, (result, status) => {
            if (status == google.maps.GeocoderStatus.OK) {
              this.cartCheckOutData.address = result[0].formatted_address;
            }
          });
        });
      }

      return position;
    },
  },

  mounted() {
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
  },

  created() {
    this.initialize();
  },

  methods: {
    async initialize() {
      this.total();
      this.getCountry();
      this.getAddresses();
    },

    async getAddresses() {
      const { data } = await axios({
        method: "GET",
        url: "/app/address",
      });
      console.log("data");
      this.addresses = data.data;
    },

    addressChange() {
      const addr = this.addresses.find((item) => item.id == this.address);
      this.cartCheckOutData.address = addr.address;
      this.cartCheckOutData.building_no = addr.apartment;
      this.cartCheckOutData.city = addr.city;
      this.cartCheckOutData.country = addr.country;
      this.cartCheckOutData.zone_no = addr.zone;
      this.cartCheckOutData.street_no = addr.street;
    },

    // maps
    newmark(i) {
      this.lat = i.latLng.lat();
      this.lng = i.latLng.lng();
    },

    total() {
      let sum = 0;
      if (this.cartData) {
        this.cartCheckOutData.total_amount = this.cartData.reduce(
          (sum, item) => sum + item.product_price * item.quantity,
          0
        );
      }
    },

    async getCountry() {
      try {
        let { data } = await axios({
          method: "get",
          url: "https://admin.marchecinq.com/api/countries",
        });

        this.countries = data;
      } catch (e) {
        console.log("error");
      }
    },

    async changeCountry() {
      if (this.cartCheckOutData.country != "Qatar") {
        try {
          let products = [];
          this.cartData.forEach((item) => {
            products.push({ id: item.product_id, quantity: item.quantity });
          });

          const { data } = await axios({
            method: "GET",
            url: "https://admin.marchecinq.com/api/calculate-weight",
            params: {
              products: products,
            },
          });

          this.weight = data;

          if (this.weight <= 5.0) {
            this.showType = true;
          } else {
            this.showType = false;
            this.calculatePrice();
          }
        } catch (error) {
          Vue.$toast.open({ message: "An error occurred", type: "error" });
        }
      }
    },

    async calculatePrice() {
      const country = this.countries.find(
        (item) => item.name_en === this.cartCheckOutData.country
      );
      let type = 0;
      if (this.showType) {
        type = this.cartCheckOutData.shipping_type;
      } else {
        if (this.weight <= 70.0) {
          type = 1;
        } else {
          type = 2;
        }
      }
      try {
        const { data } = await axios({
          method: "GET",
          url: "https://admin.marchecinq.com/api/calculate_shipping",
          params: {
            country_id: country.id,
            weight: this.weight,
            weight_class: "Kilo Gram",
            type,
          },
        });
        if (data.status) {
          this.shipping_rate = data.data.price;
        } else {
          Vue.$toast.open({ message: data.message, type: "error" });
          this.shipping_rate = null;
        }
      } catch (error) {
        Vue.$toast.open({ message: "Error", type: "error" });
      }
    },

    close() {
      localStorage.clear();
      this.$store.commit("getCartData", null);
      this.cartCheckOutData = Object.assign({}, this.defaultcartCheckOutData);
    },

    async save() {
      this.cartCheckOutData.cartData = [...this.cartData];
      this.cartCheckOutData.store_id = this.cartData[0].store_id;
      this.cartCheckOutData.lat = this.lat;
      this.cartCheckOutData.lon = this.lng;
      const r = localStorage.getItem("coupon");
      if (r) {
        const reward = JSON.parse(r);
        this.cartCheckOutData.total_amount =
          this.cartCheckOutData.total_amount - reward.amount;

        this.cartCheckOutData.coupon = reward.code;
      }
      try {
        let { data } = await axios({
          method: "post",
          url: "/app/order",
          data: this.cartCheckOutData,
        });
        if (data.status == 422) {
          let str = "";
          data.data.forEach((item) => (str += item));
          Vue.$toast.open({ message: str, type: "error" });
          return;
        }
        if (data.status) {
          Vue.$toast.open({ message: "Order Placed Succefully", type: "info" });
          localStorage.removeItem("coupon");
          this.close();
          setTimeout(() => {
            this.$router.replace("/app/order");
            this.$router.go("/app/order");
          }, 3000);
        } else {
          Vue.$toast.open({ message: "Error", type: "error" });
        }
      } catch (e) {
        Vue.$toast.open({ message: "Some thing Went Wrong!", type: "error" });
      }
    },
  },
};
</script>

<style scoped>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
  background: #fbf4ef;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,
.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover,
.same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>