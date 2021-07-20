<template>
  <!-- Instagram Starts -->
  <section class="instagram-area">
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 style="color: #005677">{{ translations.offer }}</h2>
          </div>
        </div>
      </div>
      <div class="row" v-if="offer.length > 0">
        <div class="col-lg-12 px-0">
          <div class="owl-carousel">
            <div
              class="single-slide slide-1"
              :style="{
                'background-image': 'url(' + imageUrl + data.image + ')',
              }"
              v-for="(data, index) in offer"
              :key="index"
            ></div>
            <div class="single-slide slide-1"></div>
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col-lg-12 px-0">
          <div class="row title">
            <h3>{{ translations.follow_instagram }}</h3>
          </div>

          <!-- <div class="row">
            <Carousel
              :per-page="4"
              :autoplay="true"
              :paginationEnabled="false"
              :loop="true"
              style="display: block; margin: 10px"
            >
              <Slide v-for="(item, index) in instaPosts" :key="index">
                <img :src="item.node.display_url" alt="" :style="imgStyle" />
              </Slide>
            </Carousel>
          </div> -->

          <div class="row">
            <carousel
              :autoplay="true"
              :nav="false"
              :items="5"
              v-if="!loading"
              :margin="10"
              :loop="true"
              :dots="false"
            >
              <img
                :src="item.node.display_url"
                alt="image"
                v-for="(item, index) in instaPosts"
                :key="index"
                style="height: 20rem; width: 20rem"
              />
            </carousel>
          </div>

          <div class="row insta-btn on2">
            <a
              href="https://instagram.com/marchecinq"
              class="template-btn2 on2"
              style="color: #005677"
              target="_blank"
              >{{ translations.view_instagram }} &rharu;</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Instagram End -->
</template>

<style lang="scss">
.item-slide {
  height: 30vh;
}
.title {
  h3 {
    margin: 2rem auto;
    color: rgb(0, 86, 119);
  }
}
#instafeed {
  margin: 0 auto;
  width: 70%;
}
.insta-btn {
  a {
    margin: 2rem auto;
  }
}
</style>


<script>
import carousel from "vue-owl-carousel";
export default {
  components: {
    carousel,
  },
  data() {
    return {
      locale: "",
      imageUrl: "",
      translations: Object,
      loading: false,
      instaPosts: [],
      images: [],
      imgStyle: {
        width: "100%",
        "object-fit": "cover",
        height: "100%",
      },
    };
  },

  props: {
    offer: Array,
  },

  computed: {},
  watch: {},
  mounted() {
    this.imageUrl = window.baseURL;
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    this.loading = true;
    // this.fetchInsta();
    // this.getInstagram();
  },
  created() {},

  methods: {
    async fetchInsta() {
      new InstagramFeed({
        host:
          "https://images" +
          ~~(Math.random() * 3333) +
          "-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&url=https://www.instagram.com/",
        username: "marchecinq",
        items: 8,
        display_profile: false,
        display_biography: false,
        callback: (data) => {
          var img = [];
          this.instaPosts = [...data.edge_owner_to_timeline_media.edges];
          for (var i = 0; i < this.instaPosts.length; i++) {
            let item = this.instaPosts[i];
            this.images.push(item.node.display_url);
          }
          console.log(this.images);
          // this.instaPosts.forEach((item) => {
          //   this.images.push(item.node.display_url);
          // });
          this.loading = false;
        },
        error: function (e) {
          console.log(e);
          this.loading = false;
        },
      });
    },

    async getInstagram() {
      this.loading = true;
      const options = {
        method: "GET",
        url: "https://instagram40.p.rapidapi.com/account-medias",
        params: { userid: "37782333154" },
        headers: {
          "x-rapidapi-key":
            "4c62c3b559msh3fb66a4b1146bf1p1b1d22jsn660dcaacb41c",
          "x-rapidapi-host": "instagram40.p.rapidapi.com",
        },
      };
      const { data } = await axios(options);
      this.instaPosts = data.edges;
      this.loading = false;
    },
  },
};
</script>