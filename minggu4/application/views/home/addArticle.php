<!DOCTYPE html>
<html>
<head>
	<title>Daftar Artikel</title>
    <style type="text/css">
        body{
             margin: 0;
             padding: 0;
            }
        .text{
                font-weight: bold;
                font-size: 30px;
                font-family: sans-serif;

            }
        .Main{
                width: 100%;
                height: 100%;
                position: fixed;
                background: rgb(246, 245, 243);

            }

            .container{
                position: relative;
                border-radius: 20px;
                margin: 85px auto ;
                width: 500px;
                padding: 30px;
                height: 300px;
                background: white;
                
            }

            h2{
                opacity: 0.6 ;
                text-align: center;

            }

            
            .form-group{
                border:none;
                border-bottom: 1px solid #bbb9ba ;
                outline-color: white;
            }

            .input-sm:focus{
            transition: 0.7s;
            border-bottom: 2.5px solid #00ff99;
            box-shadow: 0 0 0 white;

         }
           

            .left{
                float: left;
            }
           .right{
            float: right;
           }

           @media screen and (max-width: 600px){

            .Main{
                background: white;
            }
           }
    </style>
</head>
<body>
	<div class="text-center-title banner">
    <h2>Tambah Article</h2>
    </div>

    <?php validation_errors(); ?>
    <?php echo $error;?>
    <div class="main">
    <div class="container">
        <?php echo form_open_multipart('home/tambahArticles'); ?>
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Artikel">
                <p><?php echo  form_error('title'); ?></p>
            </div>
            <div class="form-group">
                <label>Artikel</label>
                <textarea class="form-control input-sm" name="article" rows="20" column="20"></textarea>
                <p><?php echo  form_error('article'); ?></p>
            </div>
            <div class="form-group">
                <label>Masukkan Cover Artikel (Berupa Gambar .jpg/.png)</label><br>
                <input type="file" name="cover_img">
            </div>
            <?php echo  form_error('cover_img'); ?>
            <br>
            <input type="submit" value="Tambah Artikel" class="btn btn-primary w-100">
        </form>
    </div>
</div>
</body>
</html>