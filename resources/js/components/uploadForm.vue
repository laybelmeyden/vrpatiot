<template>
  <div>
    <div class="file_manager">
      <input
        class="input_main_form_modal input_cloud"
        id="real-file"
        type="text"
        name="drop_box_file"
        placeholder="Ссылка на файл в облаке"
        value
      />
      <div class="file-field input-field">
        <div class="btn btn_download js-labelFile">
          <span class="js-fileName">Загрузить файл</span>
          <input
            type="file"
            name="photos[]"
            @change="fileInputChange"
            multiple
          />
        </div>
        <div class="file-path-wrapper">
          <input
            class="file-path validate"
            type="text"
            placeholder="Выберите один или несколько файлов"
          />
        </div>
      </div>
    </div>

    <div class="progress prg1" :val="fileProgress" v-if="fileProgress">
      <div
        class="progress-bar"
        role="progressbar"
        :style="{ width: fileProgress + '%' }"
      >
        {{ fileCurrent }}%
      </div>
    </div>
    <!-- <input type="file" name="app1"  @change="fileInputChange" /> -->
    <div class="row" :val="fileOrder" v-if="fileOrder">
      <div class="col-sm-6">
        <h3 class="text-center fileiuty">
          Файлы в очереди ({{ fileOrder.length }})
        </h3>
        <ul class="list-group">
          <li
            class="list-group-item"
            v-for="(file, idx) in fileOrder"
            :key="idx"
          >
            {{ file.name }} : {{ file.type }}
          </li>
        </ul>
      </div>
      <!-- <div class="col-sm-6">
        <h3 class="text-center">Загруженные файлы ({{ filesFinish.length }})</h3>
        <ul class="list-group">
          <li
            class="list-group-item"
            v-for="(file, idx) in filesFinish"
            :key="idx"
          >{{ file.name }} : {{ file.type }}</li>
        </ul>
      </div>-->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fileOrder: false,
      filesFinish: [],
      fileProgress: 0,
      fileCurrent: "",
    };
  },
  methods: {
    async fileInputChange() {
      let files = Array.from(event.target.files);
      this.fileOrder = files.slice();

      for (let item of files) {
        if(item.size > 100000000){
            this.fileProgress = 100;
            this.fileCurrent = "Выбранный файл слишком большой, пожалуйста, загрузите все файлы в облако!";
        }else{
          await this.uploadFile(item);
        }
      }
    },
    async uploadFile(item) {
      let form = new FormData();
      form.append("photos", item);
      await axios
        .post("/update_main_form", form, {
          onUploadProgress: (itemUpload) => {
            this.fileProgress = Math.round(
              (itemUpload.loaded / itemUpload.total) * 100
            );
            this.fileCurrent = item.name + " " + this.fileProgress;
          },
        })
        .then((response) => {
          this.fileProgress = 100;
          this.fileCurrent = "Все файлы были загружены на 100";
          this.filesFinish.push(item);
          this.fileOrder.splice(item, 1);
        })
        .catch((error) => {
          alert(
            "Выбранный файл слишком большой, пожалуйста, загрузите все файлы в облако!"
          );
        });
    },
  },
};
</script>
