function previewImg() {
  const media = document.querySelector(".custom-file-input");
  const mediaLabel = document.querySelector(".custom-file-label");
  const imgPreview = document.querySelector(".img-preview");
  const fileMedia = new FileReader();

  mediaLabel.textContent = media.files[0].name;
  fileMedia.readAsDataURL(media.files[0]);

  fileMedia.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}

$(":radio").change(function () {
  console.log("New star rating: " + this.value);
});
