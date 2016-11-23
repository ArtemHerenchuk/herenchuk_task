
function showUploadBox(){
      if( $('#uploadForm').css('display') != 'block'){
          $('#uploadForm').show();
      }
      else{
          $('#uploadForm').hide();
      }
  }
  function showSortBox(){
      if( $('#sortForm').css('display') != 'block'){
          $('#sortForm').show();
      }
      else{
          $('#sortForm').hide();
      }
  }


  $(document).ready(function() {
      $('#updateDescriptionData').on('click', function(e) {
          e.preventDefault();
          updateDescriptionData();
          return false;
      });
  });



  function updateDescriptionData(){
      var description = $('#description').val();
      var descriptionId = $('#descriptionId').val();

      var postData = {description: description, pictureId: descriptionId};

      $.ajax({
          type: 'POST',
          async: false,
          url: "/pictures/update/",
          data: postData,
          dataType: 'json',
          success: function(data){
              if(data['success']){
                  alert(data['message']);
                  $('[name=description]').attr('placeholder', data['description']);
                  $('#picturePage');
              }
              else{
                  alert(data['message']);
              }
          }
      });
  }
  $(document).ready(function() {
      $('#deletePicture').on('click', function(e) {
          e.preventDefault();
          deletePicture();
          return false;
      });
  });

  function deletePicture(){
      var pictureId = $('#deletePictureId').val();

      var postData = {pictureId: pictureId};
      console.log(postData);

      $.ajax({
          type: 'POST',
          url: "/upload/delete/",
          data: postData,
          dataType: 'json',
          //error: function (xhr, ajaxOptions, thrownError) {
          //    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          //},
          success: function(data){
              if(data['success']){
                  alert(data['message']);
                  document.location = '/../';
              }
              else{
                  alert(data['message']);
              }
          }
      });
  }

  $(document).ready(function() {
      $('#sortForm input[type=submit]').on('click', function(e) {
          e.preventDefault();
          sortForm();
          return false;
      });
  });

  function sortForm(){
      var sortData = document.getElementsByName('sort');
      for(var i = 0; i < sortData.length; i++){
          if(sortData[i].checked){
              var postData =  {sort: sortData[i].value} ;
          }
      }

      $.ajax({
          url: '/index/sort/',
          type: 'post',
          dataType: 'json',
          data: postData,
          error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          },
          success: function(data) {
              $('#CenterColumn').text('');
              var html = '';
              var i = 0;
              console.log(data);
              data.forEach(function (element, index, array) {
                  html += '<div id="indexBlock">';
                  html += '<a href="/pictures/' + element.ID + '/' + '">';
                  html += '<img src="/www/images/pictures/' + element.image_name + '" width="200" height="200" alt="' + element.name + '" >';
                  html += '<input type="hidden" name="openPictureId" value="' + element.ID + '">';
                  html += '</a><br />';
                  html += '<a href = "/pictures/' + element.ID + '/' + '">' + element.name + '</a>';
                  if (i%5 == 0) {
                      html += '<div style="clear: both;"></div>';
                  }
                  html += '</div>';
                  i++;

              });
              $('#CenterColumn').append(html);
          }
      });
      return html;

  }

  $(document).ready(function() {
      $('#uploadButton').on('click', function(e) {
          e.preventDefault();
          upload();
          return false;
      });
  });

  function upload() {

      var pictureName = $('#pictureName').val();
      var pictureDescription = $('#pictureDescription').val();

      var file_data = $('#fileName').prop('files')[0];
      var form_data = new FormData();

      form_data.append('file', file_data);
      form_data.append('pictureName', pictureName);
      form_data.append('pictureDescription', pictureDescription);

          $.ajax({
              url: '/upload/upload/',
              type: 'post',
              dataType: 'json',
              contentType: false,
              processData: false,
              data: form_data,
              success: function (data) {
                  if (data['success']) {
                      var html = sortForm();
                      $('#sortForm').append(html);
                  }
                  else{
                    alert(data['message']);
                  }
              }
          });
  }

  $(document).ready(function() {
      $('#header').on('click', function(e) {
          e.preventDefault();
          toIndexPage();
          return false;
      });
  });

  function toIndexPage(){
      document.location = '/../';
  }










