<template>
  <div class="container">
    <div class="progress" style="height:40px;" :val="fileProgress" v-if="fileProgress">
      <div
        class="progress-bar"
        role="progressbar"
        :style="{ width:fileProgress + '%'}"
      >{{ fileCurrent }}%</div>
    </div>
    <hr />
    <input type="file" name="photos[]" multiple @change="fileInputChange" />
    <!-- <input type="file" name="app1"  @change="fileInputChange" /> -->
    <hr />
    <div class="row">
      <div class="col-sm-6">
        <h3 class="text-center">Файлы в очереди ({{ fileOrder.length}})</h3>
        <ul class="list-group">
          <li
            class="list-group-item"
            v-for="(file, idx) in fileOrder"
            :key="idx"
          >{{ file.name }} : {{ file.type }}</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <h3 class="text-center">Загруженные файлы ({{ filesFinish.length }})</h3>
        <ul class="list-group">
          <li
            class="list-group-item"
            v-for="(file, idx) in filesFinish"
            :key="idx"
          >{{ file.name }} : {{ file.type }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fileOrder: [],
      filesFinish: [],
      fileProgress: 0,
      fileCurrent: ""
    };
  },
  methods: {
    async fileInputChange() {
      let files = Array.from(event.target.files);
      this.fileOrder = files.slice();

      for (let item of files) {
        await this.uploadFile(item);
      }
    },
    async uploadFile(item) {
      let form = new FormData();
      form.append("photos", item);
      await axios
        .post("/update_main_form", form, {
          onUploadProgress: itemUpload => {
            this.fileProgress = Math.round(
              (itemUpload.loaded / itemUpload.total) * 100
            );
            this.fileCurrent = item.name + " " + this.fileProgress;
          }
        })
        .then(response => {
          this.fileProgress = false;
          this.fileCurrent = false;
          this.filesFinish.push(item);
          this.fileOrder.splice(item, 1);
        })
        .catch(error => {
          alert("FUCKINA IADIAID");
        });
    }
  }
};
</script>
