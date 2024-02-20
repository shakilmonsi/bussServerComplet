
$(document).ready(function () { 
    "use strict";

    var profileimgaepath =  $("#adminprofile").val();
    var baseurl =  $("#baseurl").val();
    profileimgaepath = baseurl+'/public/'+ profileimgaepath;
    
    $("#adminprofileedit").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '365px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-6',
        maxFileSize:      '',
        placeholderImage: {
            image : profileimgaepath,
            width :'100%'
         },
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });



   
    $("#document").spartanMultiImagePicker({
        fieldName:        'nid_picture',
        maxCount:         1,
        rowHeight:        '100px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
       
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });


    $("#profile").spartanMultiImagePicker({
        fieldName:        'profile_picture',
        maxCount:         1,
        rowHeight:        '100px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
        
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });

    var imgaepath =  $("#documentoldpic").val();
    var baseurl =  $("#baseurl").val();
    imgaepath = baseurl+'/public/'+imgaepath;
    $("#documentedit").spartanMultiImagePicker({
        fieldName:        'nid_picture',
        maxCount:         1,
        rowHeight:        '100px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
        placeholderImage: {
            image : imgaepath,
            width :'100%'
         },
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });

    var profileimgaepath =  $("#profileoldpic").val();
    profileimgaepath = baseurl+'/public/'+ profileimgaepath;
    
    $("#profileedit").spartanMultiImagePicker({
        fieldName:        'profile_picture',
        maxCount:         1,
        rowHeight:        '100px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
        placeholderImage: {
            image : profileimgaepath,
            width :'100%'
         },
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });


   
    $("#buspic").spartanMultiImagePicker({
        fieldName:        'busimg[]',
        maxCount:         4,
        rowHeight:        '200px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
       
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });



    $("#buspicedit").spartanMultiImagePicker({
        fieldName:        'busimgedit[]',
        maxCount:         4,
        rowHeight:        '200px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
       
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });



    $("#subtripimage").spartanMultiImagePicker({
        fieldName:        'imagesubtrip',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
       
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
           
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });


    var subtripimage =  $("#imagepath").val();
    var baseurl =  $("#baseurl").val();
   var subtripimagepath = baseurl+'/public/'+ subtripimage;
    $("#editsubtripimage").spartanMultiImagePicker({
        fieldName:        'imagesubtrip',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
       
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
           
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });




    var seconeimage =  $("#seconeimagpath").val();
  
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ seconeimage;
    
    $("#sectiononeimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });







    $("#howitworkimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    var seconeimage =  $("#sectewhowitimg").val();
  
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ seconeimage;
    
    $("#edithowitworkimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    $("#commentimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });





    var secfourimage =  $("#secfouroldimg").val();
  
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ secfourimage;
    
    $("#editsecfourimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });





    var secfiveimage =  $("#secfiveimgpath").val();
  
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ secfiveimage;
    
    $("#sectionfiveimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    var secSevenimage =  $("#secSevenimgpath").val();
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ secSevenimage;
    
    $("#sectionSevenimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    $("#blog").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    var blogimage =  $("#oldblogimg").val();
    var baseurl = $("#baseurl").val();
    var subtripimagepath = baseurl+'/public/'+ blogimage;
    
    $("#editblogimg").spartanMultiImagePicker({
        fieldName:        'image',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : subtripimagepath,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    $("#logoheader").spartanMultiImagePicker({
        fieldName:        'headerlogo',
        maxCount:         1,
        rowHeight:        '55px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '4000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });

    $("#logofavicon").spartanMultiImagePicker({
        fieldName:        'favicon',
        maxCount:         1,
        rowHeight:        '32px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });


    $("#logofooter").spartanMultiImagePicker({
        fieldName:        'footerlogo',
        maxCount:         1,
        rowHeight:        '40px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '4000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    var headerlogo =  $("#oldlogoheader").val();
    var baseurl = $("#baseurl").val();
    var oldheaderimg = baseurl+'/public/'+ headerlogo;
    
    $("#editlogoheader").spartanMultiImagePicker({
        fieldName:        'headerlogo',
        maxCount:         1,
        rowHeight:        '55px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '4000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldheaderimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    var favlogo =  $("#oldlogofavicon").val();
    var baseurl = $("#baseurl").val();
    var oldfavimg = baseurl+'/public/'+ favlogo;
    
    $("#editlogofavicon").spartanMultiImagePicker({
        fieldName:        'favicon',
        maxCount:         1,
        rowHeight:        '32px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldfavimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    var footerlogo =  $("#oldlogofooter").val();
    var baseurl = $("#baseurl").val();
    var oldfooterimg = baseurl+'/public/'+ footerlogo;
    
    $("#editfooterlogo").spartanMultiImagePicker({
        fieldName:        'footerlogo',
        maxCount:         1,
        rowHeight:        '40px',
        groupClassName:   'col-md-12 col-sm-12 col-xs-12',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '4000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldfooterimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    $("#social").spartanMultiImagePicker({
        fieldName:        'image_path',
        maxCount:         1,
        rowHeight:        '40px',
        groupClassName:   'col-md-3 col-sm-3 col-xs-3',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });



    var oldsocial =  $("#oldsocial").val();
    var baseurl = $("#baseurl").val();
    var oldsocialimg = baseurl+'/public/'+ oldsocial;
    
    $("#editsocial").spartanMultiImagePicker({
        fieldName:        'image_path',
        maxCount:         1,
        rowHeight:        '40px',
        groupClassName:   'col-md-3 col-sm-3 col-xs-3',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldsocialimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });





    $("#add").spartanMultiImagePicker({
        fieldName:        'image_path',
        maxCount:         1,
        rowHeight:        '600px',
        groupClassName:   'col-md-6 col-sm-6 col-xs-6',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '16000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });




    var oldadd =  $("#oldadd").val();
    var baseurl = $("#baseurl").val();
    var oldaddimg = baseurl+'/public/'+ oldadd;
    
    $("#editadd").spartanMultiImagePicker({
        fieldName:        'image_path',
        maxCount:         1,
        rowHeight:        '600px',
        groupClassName:   'col-md-6 col-sm-6 col-xs-6',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG',
        maxFileSize:      '16000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldaddimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });


    $("#invoice").spartanMultiImagePicker({
        fieldName:        'doc_location',
        maxCount:         1,
        rowHeight:        '300px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-4',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG|GIF',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });


    var oldadd =  $("#invoiceold").val();
    var baseurl = $("#baseurl").val();
    var oldaddimg = baseurl+'/public/'+ oldadd;
    
    $("#invoiceedit").spartanMultiImagePicker({
        fieldName:        'doc_location',
        maxCount:         1,
        rowHeight:        '600px',
        groupClassName:   'col-md-6 col-sm-6 col-xs-6',
        allowedExt:       'png|jpg|gif|jpeg|JPG|PNG|JPEG|GIF',
        maxFileSize:      '2000000',
        required:      true,
        dropFileLabel : "Drop Here",
        placeholderImage: {
            image : oldaddimg,
            width :'100%'
         },
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log('preview');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
       
    });


});


