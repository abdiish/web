<?php
//Incluye el archivo de conexión con la base de datos 
require 'init.php';

class User_Actions
{ 
    public function getRecentPosts() {
        global $database;

        $posts = $database->select("posts",[
            "post_id",
            "name",
            "img_post",
            "created_at"
        ],[
            "ORDER" => ["posts.post_id" => "DESC"],
            "LIMIT" => '6'
        ]);

        return $posts;
    }
}

class Admin_Actions
{
    public function logIn($email, $pass) {
        global $database;

        $data = $database->select("admins", ["password"],[ "OR" => ["username" => $email,"email" => $email]]);
        return $data;

        $password = $data[0]["password"];
        echo $password;

        if (password_verify($pass, $password)) {
            # code...
            return true;
        } else {
            # code...
            return false;
        }
    }

    public function getProfile($email){
        global $database;

        $admin = $database->select("admins",[
            "admin_id",
            "username"
        ],[
            "email" => $email
        ]);
        return $admin;
    }

    public function getCategories(){
        global $database;

        $categories = $database->select("categories",[
            "category_id",
            "category"
        ]);
        return $categories;
    }
    public function saveCategory($category){
        global $database;

        $database->insert("categories",[
            "category" => htmlentities($category)
        ]);
        //medoo retorna el id de la informacion ingresada 
        return $database->id();
    }
    public function deleteCategory($category_id){
        global $database;

        $delete = $database->delete("categories",[
            "category_id" => $category_id
        ]);
        //medoo retorna cuantas filas fueron afectados  
        return $delete->rowCount();
    }

    public function savePost($name, $category_id, $description, $name_image, $admin_id) {
        global $database;

        $database->insert("posts",[
            "name" => htmlentities($name),
            "body" => htmlentities($description),
            "img_post" => $name_image,
            "category_id" => htmlentities($category_id),
            "admin_id" => $admin_id,
            "created_at" => time()
        ]);
        //medoo retorna el id de la informacion ingresada 
        return $database->id();
    }
}
?>