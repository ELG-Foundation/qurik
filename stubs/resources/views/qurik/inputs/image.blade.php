@props([
    'model' => null,
])

<div x-data="HandleFile('{{ $model }}')" @drag.prevent="handleFileDrop" @dragover.prevent="isDroppingFile = true"
    @dragleave.prevent="isDroppingFile = false" @drop="isDroppingFile = false"
    :class="temurl ? 'border-success' : 'border-base-300'"
    class="w-full h-48 border-2 border-dashed @error($model) border-error @else border-base-300 @enderror rounded-xl relative">

    <div x-show="!temurl" class="size-full center flex-col py-3 px-4 ">
        <span class="iconify solar--upload-square-bold text-4xl p-2 rounded-md bg-primary text-white"></span>
        <p>Drag & drop or click to choose file</p>
    </div>

    <div x-show="temurl" class="size-full overflow-hidden p-1 rounded-xl relative">

        <div class="w-full between absolute top-0 left-0 z-20 px-3 py-2">
            <span x-html="temFile?.name"></span>
            <button @click="removeUpload" type="button" class="btn btn-circle btn-sm">
                <span class="iconify lucide--x text-2xl"></span>
            </button>
        </div>

        <img class="size-full object-cover object-center" :src="temurl" alt="temUrl">
    </div>

    <input @change="handleFileSelect" class="size-full absolute top-0 left-0 opacity-0 z-10" type="file"
        name="userImage" accept="image/*" />
</div>

@push('js')
    <script>
        function HandleFile(model) {
            return {
                isDropping: false,
                isUploading: false,
                progress: 0,
                temurl: null,
                temName: null,
                temFile: null,

                handleFileSelect(event) {
                    if (event.target.files.length) {
                        this.uploadFiles(event.target.files[0]);
                    }
                },

                handleFileDrop(event) {
                    if (event.dataTransfer.files.length > 0) {
                        this.uploadFiles(event.dataTransfer.files[0]);
                    }
                },

                uploadFiles(file) {

                    this.isUploading = true;
                    this.temurl = URL.createObjectURL(file)
                    this.temFile = file

                    this.$wire.upload(
                        model, file,
                        finish = (uploadedFilename) => {
                            this.temName = uploadedFilename
                            this.isUploading = false
                        },
                        error = () => {
                            console.log('error uploading file');
                        },
                        progress = (event) => {
                            this.progress = event.detail.progress
                        }
                    )
                },

                removeUpload() {
                    this.$wire.$removeUpload(model, this.temName,
                        finish = () => {
                            this.temurl = null
                            this.temFile = null
                            this.temName = null
                        },
                        error = () => {
                            console.log('error while removing');
                        }
                    )
                },
            }
        }
    </script>
@endpush
