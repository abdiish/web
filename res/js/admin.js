$(document).ready(function(){

    //var root = "http://localhost/web/";
    var root = "https://asdeproyec.000webhostapp.com/web/";

    try {
        CKEDITOR.replace('txtDescription');
    } catch (error) {
        
    }

    $(".btnAdminLogin").on("click", function() {
        
        var email = $(".username-input").val().trim();
        var pass  = $(".password-input").val().trim();

        console.log("Email:"+email);
        console.log("Password:"+pass);

        $.ajax({
            type: "POST",
            url:  root + "res/php/admin_actions/login.php",
            data:  {
                    email: email,
                    pass: pass
            },
            success: function(data) {
                console.log("Valor de data:"+data);
                
                if (data == "true") {
                    //window.location.href = "http://localhost/web/admin/";
                    window.location.href = "https://asdeproyec.000webhostapp.com/web/admin/";
                }else
                    if(data == "false"){
                    alert("Sus credenciales no coinciden, por favor intente de nuevo.");
                }
            }
        });

    });
    /**GUARDAR CATEGORIA*/
    $(".btnGuardarCategoria").on("click", function() {

        var category = $(".txtNameCategory").val().trim();
        self = this;//Hace referencia al boton
        $.ajax({
            type: "POST",
            url:  root + "res/php/admin_actions/save_category.php",
            data:  {
                    category: category
            },
            beforeSend: function() {
                $(self).addClass("loading");
            },
            success:function(data){
                $(self).removeClass("loading");
                if (data > 0) {
                    alert('Se agrego una nueva categoria');
                    $('.txtNameCategory').val("");
                    $('.tbl-categories tr:last').after('<tr><td>'+category+'</td><td><li class="fa fa-times delete-cat" data-categoryId="'+data+'" title="Eliminar categoria"></li><td><li class="fa fa-pencil edit-cat" title="Editar categoria"></li></tr>');
                
                }else{
                    alert('Hubo un error al guardar la información.');
                }
            },
            error: function(error){
                alert('Se ha producido un error.');
            }
        });
    });

    $(".tbl-categories").on("click",".delete-cat", function(){
        var category_id = $(this).attr("data-categoryId");
        $.ajax({
            type: "POST",
            url:  root + "res/php/admin_actions/delete_category.php",
            data:  {
                    category_id: category_id
            },
            success:function(data){
                if (data > 0) {
                    $(self).parent().parent().remove();
                    alert('Se ha eliminado la categoria.');   
                }else{
                    alert('Se ha producido un error.');
                }
            },
            error: function(error){
                alert('Se ha producido un error.');
            }
        });
    });

    $(".btnSavePost").on("click",function(e){
        e.preventDefault();
        var description = CKEDITOR.instances.txtDescription.getData(),
            name = $('.txtNamePost').val().trim(),
            category_id = $('.txtCategoryPost').val().trim();

            if (description !== "" && name !== "" && category_id > 0) {
                //Petición Ajax para subir la publicación
                var formData = new FormData($("#new_post_container")[0]);
                    formData.append("description",description);

                    $.ajax({
                        xhr: function(){
                            var xhr = new window.XMLHttpRequest();
                                xhr.upload.addEventListener("progress",function(evt){
                                    if (evt.lengthComputable) {
                                        var percentComplete = evt.loaded / evt.total;
                                            percentComplete = parseInt(percentComplete * 100);
                                            console.log(percentComplete);
                                    }
                                },false);
        
                                return xhr;
                        },
                        type: "POST",
                        url: root + "res/php/admin_actions/new_post.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function(){
                            //
                        },
                        success: function(data){
                            $('.txtNamePost').val("");
                            $('.txtCategoryPost').val("");
                            CKEDITOR.instances['txtDescription'].setData("");
                            alert("Se subio la publicación");
                        },
                        error: function(){
                            alert("Error");     
                        }
                    });
               } else {
                alert("Debe llenar todos los campos.");
            }
            
    });
});
