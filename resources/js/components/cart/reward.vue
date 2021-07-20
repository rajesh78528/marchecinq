<template>
  <div class="cart-content">
    <div class="cart-title text-center">
      <h2>Rewards</h2>
    </div>

    <LoadingSpinner v-if="loading" />

    <div class="cart-items">
      <div class="container-fluid d-flex justify-content-between my-3">
        <div class="my-reward" @click="viewRewards()">My Rewards</div>
        <div class="points">Points: {{ user_points }}</div>
      </div>
      <!-- <div class="single-item">
        <div class="amount">
          <p>Buying Amount: {{ redeem_points }}</p>
          <p>Amount: 10 QAR</p>
        </div>
        <button class="template-btn2 on2 redeem" @click="redeem">
          Redeem Now
        </button>
      </div> -->
      <div class="container-fluid my-3">
        <div class="row my-3" v-for="item in offers" :key="item.id">
          <div class="col-md-3">
            <img :src="imageUrl + item.image" alt="" />
          </div>
          <div class="col-md-6">
            <h5 style="margin: 0">
              {{ locale == "en" ? item.title_en : item.title_ar }}
            </h5>
            <hr />
            <p class="amount">Buying Amount: {{ item.points }} points</p>
            <p class="amount">Amount: {{ item.amount }} QAR</p>
          </div>
          <div class="col-md-3">
            <button class="btn" @click="redeem(item)">Redeem</button>
          </div>
        </div>
      </div>
    </div>

    <sweet-modal icon="success" ref="modal" :blocking="true">
      <h2>{{ code }}</h2>
    </sweet-modal>

    <sweet-modal ref="redeemcodes" title="Redeem Codes" :blocking="true">
      <div class="container">
        <div class="row redeem-item" v-for="item in redeemCodes" :key="item.id">
          <div class="col-md-8">
            <h4>
              {{ locale == "en" ? item.title_en : item.title_ar }}
            </h4>
            <p class="amount">Amount: {{ item.amount }}</p>
            <p class="amount">
              Status:
              <span v-if="item.status" style="color: green">Active</span>
              <span v-else style="color: red">Used</span>
            </p>
          </div>
          <div class="col-md-4 redeem-code">
            <h6 style="text-align: center">{{ item.code }}</h6>
          </div>
        </div>
      </div>
    </sweet-modal>
  </div>
</template>

<style lang="scss">
.sweet-title {
  display: flex;
  align-items: center;
}
.sweet-content {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important;
}
.my-reward {
  font-weight: 700;
  font-size: 24px;
  cursor: pointer;
}
.points {
  border: 1px solid #005677;
  border-radius: 30px;
  padding: 10px;
  font-weight: bold;
}
.amount {
  font-size: 14px;
  font-weight: bold;
  margin: 0;
}
.redeem {
  border: 1px solid #005677 !important;
  font-weight: bold;
  color: #005677 !important;
  margin-top: 1rem;
  padding: 10px;
  background: white;
}
.redeem:hover {
  background: #da5f15;
}
.redeem-item {
  border: 1px solid #ccc;
  padding: 20px;
}
.redeem-code {
  border-left: 3px dashed #ccc;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

<script>
import { SweetModal } from "sweet-modal-vue";
import LoadingSpinner from "../misc/loading-spinner";
export default {
  components: { SweetModal, LoadingSpinner },
  data() {
    return {
      locale: "",
      translations: Object,
      offers: [],
      redeemCodes: [],
      imageUrl: "",
      user_points: 0,
      redeem_points: 1000,
      code: false,
      loading: false,
    };
  },
  mounted() {
    this.imageUrl = window.baseURL;
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    this.initialize();
  },
  methods: {
    async initialize() {
      try {
        const { data } = await axios({
          method: "GET",
          url: "/app/offers",
        });
        this.offers = data;
        this.getUserPoints();
      } catch (error) {
        Vue.$toast.open({
          message: "Failed",
          type: "error",
        });
      }
    },

    async getUserPoints() {
      const { data } = await axios({
        method: "GET",
        url: "/app/reward/123",
      });
      this.user_points = data;
    },

    async viewRewards() {
      this.loading = true;
      try {
        const { data } = await axios({
          method: "GET",
          url: "/app/reward",
        });
        this.redeemCodes = data;
        this.$refs.redeemcodes.open();
      } catch (error) {
        Vue.$toast.open({
          message: "Failed",
          type: "error",
        });
      } finally {
        this.loading = false;
      }
    },

    async redeem(item) {
      try {
        const { data } = await axios({
          method: "POST",
          url: "/app/reward",
          data: {
            title_en: item.title_en,
            title_ar: item.title_ar,
            points: item.points,
            amount: item.amount,
          },
        });
        if (data.status == 422) {
          let str = "";
          data.data.forEach((item) => (str += item));
          Vue.$toast.open({
            message: str,
            type: "error",
          });
          return;
        }

        if (!data.status) {
          Vue.$toast.open({
            message: data.data,
            type: "error",
          });
        } else {
          this.code = data.data.code;
          this.initialize();
          this.$refs.modal.open();
        }
      } catch (error) {
        Vue.$toast.open({
          message: "Failed",
          type: "error",
        });
      }
    },
  },
};
</script>