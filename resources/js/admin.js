function del(smg) {
    if (window.confirm(smg)) {

        return true;
    } else {

        return false;
    }
}

// jQuery( '.article-ckeditor' ).each(function() {
//     CKEDITOR.replace(this,{
//         language:'en-gb',
//         filebrowserImageUploadUrl : ''+window.location+'/public/assets/upload?type=Images&_token=',
//         filebrowserBrowseUrl : ''+window.location+'/public/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
//         filebrowserUploadUrl : ''+window.location+'/public/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
//         filebrowserImageBrowseUrl :'assets/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
//     });
// });
// function myFunction() {
//     document.getElementById('myForm').reset();
// }
// function open_popup(url){
//   var w = 1180;
//   var h = 770;
//   var l = Math.floor((screen.width-w)/2);
//   var t = Math.floor((screen.height-h)/2);
//   var win = window.open( url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l );
// }


function ChangeToSlug()
{
    var title, slug;
    //Lấy text từ thẻ input title
    title = document.getElementById("title").value;
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
